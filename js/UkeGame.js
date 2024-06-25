const canvas = document.getElementById("gameCanvas");
const ctx = canvas.getContext("2d");
const overlay = document.getElementById("overlay");

let gamePaused = false;
let linePositionX = -400; // Posición inicial de las líneas
let activeNotes = []; // Lista de notas activas
let score = 0; // Puntuación del jugador

const startX = -canvas.width; // Coordenada X de inicio del área de aparición de las líneas
const endX = 7 * canvas.width; // Coordenada X de fin del área de desaparición de las líneas

let lastFrameTime = Date.now(); // Almacenar la hora del último frame

const detectionAreaStartX = canvas.width * 0.4; // Línea imaginaria para cambiar el color de las notas a verde
const colorChangeLineX = canvas.width * 0.6; // Línea imaginaria para cambiar el color de las notas a rojo

canvas.addEventListener("touchstart", function (event) {
  if (gamePaused) {
    resumeGame();
  } else {
    pauseGame();
  }
});

window.addEventListener("keydown", function (event) {
  if (event.key === "Escape") {
    if (gamePaused) {
      resumeGame();
    } else {
      pauseGame();
    }
  }
});

function drawMovingLines(deltaTime) {
  const neckHeight = 100; // Altura del mástil
  const numLines = 13; // Número de líneas a dibujar (ajustado para mayor separación)
  const lineSpacing = (endX - startX) / numLines; // Calcular el espacio entre cada línea
  const vanishingPointX = canvas.width / 2;
  const vanishingPointY = 0;

  ctx.strokeStyle = "#333"; // Color blanco para las líneas
  ctx.lineWidth = 4; // Grosor de las líneas

  for (let i = 0; i <= numLines; i++) {
    const x =
      startX +
      ((((linePositionX + i * lineSpacing) % (endX - startX)) +
        (endX - startX)) %
        (endX - startX));
    ctx.beginPath();
    ctx.moveTo(x, canvas.height * 0.4 + neckHeight); // Comenzar desde la parte inferior del mástil
    ctx.lineTo(vanishingPointX, vanishingPointY); // Línea que apunta al punto de fuga
    ctx.stroke();
  }

  // Actualizar la posición de las líneas para crear el efecto de movimiento
  linePositionX -= 2 * deltaTime; // Ajusta este valor para cambiar la velocidad del movimiento

  // Redibujar las líneas en el lado opuesto si se han salido del canvas
  if (linePositionX < -lineSpacing) {
    linePositionX += lineSpacing;
  }
}

function update(deltaTime) {
  if (!gamePaused) {
    linePositionX -= 62 * deltaTime; // Velocidad de movimiento de las líneas

    // Actualizar la posición de las notas
    for (let i = activeNotes.length - 1; i >= 0; i--) {
      activeNotes[i].x -= 60 * deltaTime; // Velocidad de movimiento de las notas
      if (activeNotes[i].x < -20) {
        activeNotes.splice(i, 1); // Eliminar la nota si sale de la pantalla
      }
    }

    // Si las líneas han pasado completamente el área visible del canvas, resetear su posición
    if (linePositionX < startX) {
      linePositionX = 0;
    }
  }
}

function drawBackground() {
  const neckHeight = 100; // Altura del mástil (debe coincidir con la definida en drawUkuleleNeck)
  const backgroundHeight = canvas.height * 0.4; // Ajustar para que termine justo donde empieza el mástil
  const backgroundWidth = canvas.width;

  ctx.fillStyle = "#222";
  ctx.fillRect(0, 0, backgroundWidth, backgroundHeight);
}

function drawUkuleleNeck() {
  const neckHeight = 100; // Nueva altura del mástil
  const neckWidth = canvas.width; // Ancho del mástil igual al ancho del canvas

  ctx.fillStyle = "#666"; // Color gris oscuro
  ctx.fillRect(0, canvas.height * 0.4, neckWidth, neckHeight); // Posición y tamaño del rectángulo

  ctx.fillStyle = "#333"; // Color gris más oscuro
  ctx.fillRect(0, canvas.height * 0.4 + neckHeight, neckWidth, 20); // Posición y tamaño del rectángulo
}

function drawUkuleleStrings() {
  const neckHeight = 100; // Altura del mástil
  const stringSpacing = neckHeight / 5; // Espacio entre cuerdas
  const stringX = 0; // X posición de las cuerdas
  const neckY = canvas.height * 0.4; // Y posición del mástil

  // Definir los grosores individuales para cada cuerda
  const stringWidths = [2, 2.5, 3, 2]; // Ajustar estos valores según prefieras

  for (let i = 0; i < 4; i++) {
    const y = neckY + (i + 1) * stringSpacing;
    ctx.beginPath();
    ctx.moveTo(stringX, y);
    ctx.lineTo(canvas.width, y);
    ctx.strokeStyle = i < 2 ? "#FFF" : "#F3BF23"; // Blancas para las primeras 2 cuerdas, dorado para las siguientes
    ctx.lineWidth = stringWidths[i]; // Grosor individual de cada cuerda
    ctx.stroke();
  }
}

let noteDefinitions = {
  C4: { string: 3, fret: 0 },
  E4: { string: 2, fret: 0 },
  A4: { string: 1, fret: 0 },
  G4: { string: 4, fret: 0 },
  F4: { string: 2, fret: 1 },
  D4: { string: 3, fret: 2 },
  "C#4": { string: 3, fret: 1 },
  "D#4": { string: 3, fret: 2 },
  "F#4": { string: 2, fret: 2 },
  "G#4": { string: 4, fret: 1 },
  "A#4": { string: 4, fret: 1 },
  B4: { string: 4, fret: 4 },
  C5: { string: 1, fret: 3 },
  "C#5": { string: 1, fret: 4 },
};

let patterns = [
  {
    name: "Pattern 1",
    notes: [
      { name: "C4", delay: 1 },
      { name: "C4", delay: 2 },
      { name: "C4", delay: 3 },
      { name: "F4", delay: 4 },
      { name: "A4", delay: 5 },
      { name: "C4", delay: 6 },
      { name: "C4", delay: 7 },
      { name: "C4", delay: 8 },
      { name: "F4", delay: 9 },
      { name: "A4", delay: 10 },
      { name: "F4", delay: 11 },
      { name: "F4", delay: 12 },
      { name: "E4", delay: 13 },
      { name: "E4", delay: 14 },
      { name: "D#4", delay: 15 },
      { name: "D#4", delay: 16 },
      { name: "C5", delay: 17 },
      { name: "C4", delay: 18 },
      { name: "C4", delay: 19 },
      { name: "C4", delay: 20 },
      { name: "E4", delay: 21 },
      { name: "C5", delay: 22 },
      { name: "C4", delay: 23 },
      { name: "C4", delay: 24 },
      { name: "C4", delay: 25 },
      { name: "E4", delay: 26 },
      { name: "C5", delay: 27 },
    ],
  },

  // Puedes añadir más canciones aquí
];

function drawNotes() {
  const neckY = canvas.height * 0.4; //  posición Y del mástil
  const stringSpacing = 100 / 5; // Espacio entre cuerdas

  for (const note of activeNotes) {
    const stringY = neckY + note.string * stringSpacing;

    let noteColor;
    let noteColor2;

    // Cambiar el color de la nota según su posición
    if (note.detected) {
      noteColor = "#00FF00"; // Verde si la nota fue detectada correctamente
      noteColor2 = "#009900";
    } else if (note.x < detectionAreaStartX) {
      noteColor = "#FE0B0B"; // Rojo si la nota pasó la zona de detección sin ser detectada
      noteColor2 = "#B72727";
    } else {
      noteColor = "#FDAB07"; // Amarillo si la nota está en la zona de detección
      noteColor2 = "#C78602";
    }

    // Dibuja la mitad superior del círculo
    ctx.beginPath();
    ctx.arc(note.x, stringY, 14, 0, Math.PI, true); // Semicírculo superior
    ctx.fillStyle = noteColor; // Cambiar color
    ctx.fill();

    // Dibuja la mitad inferior del círculo
    ctx.beginPath();
    ctx.arc(note.x, stringY, 14, 0, Math.PI, false); // Semicírculo inferior
    ctx.fillStyle = noteColor2; // Cambiar color
    ctx.fill();

    // Añadir el número del traste en lugar del nombre de la nota
    const fretNumber = noteDefinitions[note.name].fret; // Obtener el número del traste de la nota
    const fretText = fretNumber === "#" ? "" : fretNumber.toString(); // Convertir a texto, dejar vacío si es "#"

    ctx.fillStyle = "white";
    ctx.font = "12px Arial";
    ctx.fillText(fretText, note.x - 5, stringY + 4); // Ajusta la posición según sea necesario
  }
}

function addNoteByName(noteName) {
  const noteInfo = noteDefinitions[noteName];
  activeNotes.push({
    name: noteName,
    string: noteInfo.string,
    x: canvas.width + 20, // Iniciar fuera del canvas
    detected: false, // Nuevo estado de detección
  });
}

function startPattern(pattern) {
  for (const note of pattern.notes) {
    setTimeout(() => {
      addNoteByName(note.name);
    }, note.delay * 1000); // Convertir el delay a milisegundos
  }
}

function gameLoop() {
  const now = Date.now();
  const deltaTime = (now - lastFrameTime) / 1000; // Calcular deltaTime en segundos
  lastFrameTime = now; // Actualizar la hora del último frame

  ctx.clearRect(0, 0, canvas.width, canvas.height); // Limpiar el canvas antes de dibujar
  update(deltaTime); // Actualizar la lógica del juego
  drawUkuleleNeck(); // Dibujar el mástil del ukelele
  drawMovingLines(deltaTime); // Dibujar las líneas moviéndose
  drawUkuleleStrings(); // Dibujar las cuerdas del ukelele
  drawNotes(); // Dibujar las notas encima de las cuerdas
  drawBackground(); // Dibujar el fondo

  if (!gamePaused) {
    requestAnimationFrame(gameLoop); // Continuar el bucle del juego
  }
}

function startGame() {
  document.getElementById("menu").style.display = "none";
  canvas.style.display = "block";
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  lastFrameTime = Date.now(); // Inicializar la hora del último frame

  // Iniciar patrones
  startPattern(patterns[0]); // Iniciar el primer patrón como ejemplo
  setTimeout(() => startPattern(patterns[1]), 8000); // Iniciar el segundo patrón después de 8 segundos

  gameLoop(); // Comenzar el bucle del juego
}

function pauseGame() {
  gamePaused = true;
  overlay.style.display = "block";
}

function resumeGame() {
  gamePaused = false;
  overlay.style.display = "none";
  gameLoop(); // Reanudar el bucle del juego
}

function exitGame() {
  location.reload(); // Recarga la página para volver al menú inicial
}

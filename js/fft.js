let audioContext;
let analyser;
let microphone;
let javascriptNode;
let audioStream;
let onNoteDetected; // Callback para detectar la nota

const tones = [
    { min: 254, max: 260, note: "C4" },
    { min: 325, max: 331, note: "E4" },
    { min: 442, max: 448, note: "A4" },
    { min: 346, max: 356, note: "F4" },
    { min: 299, max: 309, note: "D#4" }, // D#4/Eb4
    { min: 279, max: 284, note: "C#4" }, // C#4/Db4
    { min: 370, max: 376, note: "F#4" }, // F#4/Gb4
    { min: 392, max: 400, note: "G4" }, // G4
    { min: 416, max: 422, note: "G#4" }, // G#4/Ab4
    { min: 464, max: 470, note: "A#4" }, // A#4/Bb4
    { min: 980, max: 988, note: "B4" }, // B4
    { min: 1054, max: 1059, note: "C5" }, // C5
    { min: 523, max: 529, note: "C5" },  // C5
    { min: 1123, max: 1127, note: "C#5" }, // C#5
];

function startRecording() {
    navigator.mediaDevices.getUserMedia({ audio: true })
        .then(stream => {
            audioContext = new (window.AudioContext || window.webkitAudioContext)();
            analyser = audioContext.createAnalyser();
            microphone = audioContext.createMediaStreamSource(stream);
            javascriptNode = audioContext.createScriptProcessor(2048, 1, 1);

            analyser.fftSize = 2048;
            analyser.smoothingTimeConstant = 0.85;

            microphone.connect(analyser);
            analyser.connect(javascriptNode);
            javascriptNode.connect(audioContext.destination);

            javascriptNode.onaudioprocess = function () {
                let array = new Uint8Array(analyser.frequencyBinCount);
                analyser.getByteFrequencyData(array);

                let maxIndex = 0;
                for (let i = 1; i < array.length; i++) {
                    if (array[i] > array[maxIndex]) {
                        maxIndex = i;
                    }
                }

                let dominantFrequency = maxIndex * audioContext.sampleRate / analyser.fftSize;

                let found = false;
                
                for (let i = 0; i < tones.length; i++) {
                    if (dominantFrequency >= tones[i].min && dominantFrequency <= tones[i].max) {
                        if (onNoteDetected) onNoteDetected(tones[i].note); // Llamada al callback
                        found = true;
                        break;
                    }
                }
                
                if (!found) {
                    if (onNoteDetected) onNoteDetected("null"); // Llamada al callback
                }
            };

            audioStream = stream;
        })
        .catch(error => console.error('Error al acceder al micrófono: ', error));
}

function stopRecording() {
    if (audioStream) {
        audioStream.getTracks().forEach(track => track.stop());
    }

    if (microphone) microphone.disconnect();
    if (analyser) analyser.disconnect();
    if (javascriptNode) javascriptNode.disconnect();
    if (audioContext) audioContext.close();
}

function setNoteDetectedCallback(callback) {
    onNoteDetected = callback;
}

// Start recording automatically
startRecording();

// To stop recording, call the stopRecording function when needed

// Callback para detectar notas y cambiar el color a verde y aumentar la puntuación
setNoteDetectedCallback(function(detectedNote) {
    for (let note of activeNotes) {
        if (!note.detected && note.name === detectedNote && note.x > detectionAreaStartX && note.x < colorChangeLineX) {
            note.detected = true;
            score += 10; // Aumentar la puntuación si se detecta correctamente
        }
    }
});


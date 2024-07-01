<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        

.scroll-down {
    position: absolute;
    bottom: 20px; /* Ajusta esto según tu preferencia */
    left: 50%;
    transform: translateX(-50%);
    font-size: 2rem; /* Tamaño de la flecha */
    cursor: pointer;
    color: #000; /* Color de la flecha */
    transition: transform 0.3s ease; /* Agregar una transición suave */
}

.scroll-down:hover {
    transform: translate(-50%, 20px); /* Mover ligeramente hacia abajo al pasar el mouse */
}

.body {
    background-color: var(--primary-color);
    color: var(--secondary-color);
    font-family: "Bebas Neue";
    font-size: 45px;
    text-align: center;
}

.pre-footer {
    background-color: var(--background-color);
    font-family: "Bebas Neue";
    font-size: 66px;
    justify-content: center;
    display: flex;
    flex-direction: column;
}

.encabezado{
    color: var(--secondary-color);
    font-family: "Bebas Neue";
    font-size: 55px;
    text-align: center;
    justify-content: center;
    display: flex;
    flex-direction: column;
}

.titulo{
    margin-bottom: 120px;
    font-size: 65px;
}


footer {
    background-color: var(--secondary-color);
    text-align: center;
    padding: 10px;
    box-shadow: 0 -6px 10px rgba(0,0,0,0.1);
}

/* Opcional: para una mejor transición entre secciones */
html {
    scroll-behavior: smooth;
}

/* Estilos para la barra de desplazamiento */
::-webkit-scrollbar {
    width: 12px; /* Ancho de la barra de desplazamiento */
}

/* Color de fondo de la barra de desplazamiento */
::-webkit-scrollbar-track {
    background-color: var(--primary-color);
}

/* Color de la barra de desplazamiento */
::-webkit-scrollbar-thumb {
    background-color: var(--secondary-color);
}

.quienes-somos-container {
    display: flex;
    align-items: flex-start;
}

.left-side {
    flex: 1;
    padding-right: 20px;
}

.right-side {
    flex: 2;
    font-size: 17px;
}

.left-side h2 {
    margin: 0;
    font-family: 'Oswald', Helvetica, Arial, Lucida, sans-serif;;
    font-size: 55   px;
}

.left-side hr {
    border: 0;
    height: 2px;
    background-color: #333;
    margin: 10px 0;
}

.left-side img {
    max-width: 100%;
    height: auto;
    display: block;
}


.button-57 {
    position: relative;
    overflow: hidden;
    border: 2px solid #18181a; /* Aumentar grosor del borde */
    color: #18181a;
    display: inline-block;
    font-size: 40px; /* Aumentar tamaño de fuente significativamente */
    line-height: 40px; /* Ajustar line-height */
    padding: 40px 40px 38px; /* Aumentar padding significativamente */
    text-decoration: none;
    cursor: pointer;
    background: var(--background-color);
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
  }
  
  .button-57 span:first-child {
    position: relative;
    transition: color 600ms cubic-bezier(0.48, 0, 0.12, 1);
    z-index: 10;
  }
  
  .button-57 span:last-child {
    color: white;
    display: block;
    position: absolute;
    bottom: 0;
    transition: all 500ms cubic-bezier(0.48, 0, 0.12, 1);
    z-index: 100;
    opacity: 0;
    top: 50%;
    left: 50%;
    transform: translateY(225%) translateX(-50%);
    height: 28px; /* Ajustar altura del span */
    line-height: 28px; /* Ajustar line-height del span */
  }
  
  .button-57:after {
    content: "";
    position: absolute;
    bottom: -50%;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: black;
    transform-origin: bottom center;
    transition: transform 600ms cubic-bezier(0.48, 0, 0.12, 1);
    transform: skewY(9.3deg) scaleY(0);
    z-index: 50;
  }
  
  .button-57:hover:after {
    transform-origin: bottom center;
    transform: skewY(9.3deg) scaleY(2);
  }
  
  .button-57:hover span:last-child {
    transform: translateX(-50%) translateY(-100%);
    opacity: 1;
    transition: all 900ms cubic-bezier(0.48, 0, 0.12, 1);
  }

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.social-icon {
    color: #18181a;
    font-size: 40px; /* Tamaño de los iconos */
    text-decoration: none;
    transition: color 0.3s ease;
}

.social-icon:hover {
    color: #ffff; /* Cambia el color al pasar el ratón */
}

.productos {
    display: flex;
    justify-content: space-around; /* Distribuye los elementos con espacio alrededor */
    padding: 20px;
    font-size: 30px;
    font-family: 'Poppins', sans-serif;
    font-style: italic;
}

.ukelele img, .guitarra img, .bajo img {
    margin: 20px;
    width: 300px;
    height: 300px;
}


.preguntas_frecuentes {
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;
    margin: 41px;
}

.titulo_PreguntasFrecuentes h2 {
    font-size: 2em;
    margin-bottom: 20px;
}

.contenido_preguntas {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.pregunta {
    background-color: var(--secondary-color);
    border: 1px solid var(--secondary-color);
    border-radius: 5px;
    padding: 15px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: calc(52% - 34px);
    box-sizing: border-box;
    transition: background-color 0.3s, max-height 0.5s ease-in-out;
    cursor: pointer;
    overflow: hidden;
    max-height: 80px; /* Initial max-height to show question */
}

.pregunta h3 {
    font-size: 22px;
    margin-bottom: 10px;
    font-family: "poppins";
}

.pregunta p {
    font-size: 20px;
    font-family: "poppins";
    line-height: 1.4;
    color: #555555;
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
    margin: 0;
}

.pregunta.active p {
    opacity: 1;
}

.pregunta.active {
    max-height: 500px; /* Adjust this height to be large enough to show the full answer */
    background-color: var(--secondary-color);
}

header h1 {
    margin: 0;
    font-family: 'Bakbak One', sans-serif;
}

nav {
    margin-right: 20px;
}

.nav-links {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 20px;
}

.nav-links li {
    display: inline;
}

.nav-links a {
    text-decoration: none;
    color: #333;
    font-weight: 600;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: var(--background-color); /* Tomato color for hover effect */
}

.LadoIzquierdo img {
    border-radius: 50%;
    width: 150px;
    height: 150px;
    object-fit: cover;
    border: 4px solid var(--secondary-color);
}

.LadoDerecho{
    margin: 30px;
}

.LadoDerecho h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
    font-family: 'Bakbak One', sans-serif;
}

.LadoDerecho h2 {
    font-size: 1.5rem;
    margin-bottom: 20px;
    font-weight: 300;
}

.configuracion{
    margin: 20px;
}


.configuracion a {
    display: inline-block;
    transition: transform 0.3s ease; /* Añade una transición para que el cambio sea suave */
}


.configuracion a:hover {
    transform: scale(1.4);
}


.card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: transform 0.3s ease;
}

.card:hover {
    transform: translateY(-5px);
}

.carousel-container {
    overflow-x: auto; /* Habilita el desplazamiento horizontal */
    white-space: nowrap;
    min-width: 100%; /* Asegura que el contenedor tenga suficiente ancho para no cortar el contenido */
}


.carousel-container {
    overflow: hidden;
    white-space: nowrap;
}

.BananaSong{
    padding: 200px;
}

.BananaSong h2{
    font-size: 70px;
}

.Pedro{
    text-align: center;
    padding: 200px;
}

/* General styling for the section */
.Pedro {
    text-align: center;
    padding: 20px;
    margin: 0 auto;
}

.PedroTitulo {
    margin-bottom: 20px;
}

.PedroTitulo h2 {
    font-size: 2em;
}

/* Styling for the content part with two columns */
.PedroContent {
    display: flex;
    align-items: center;
    justify-content: center;
    border-top: 3px solid #000000;
    padding-top: 20px;
}

/* Column for the image */
.PedroImg {
    flex: 1;
    padding: 10px;
}

.PedroImg img {
    max-width: 100%;
    height: auto;
}

/* Column for the text */
.PedroTexto {
    flex: 1;
    padding: 10px;
    text-align: left; /* Align text to the left */
}

/* Adding some padding around the section */
.pre-footer {
    padding: 20px;
}

#score {
    font-size: 24px;
    margin-bottom: 20px;
    color: #000000;
    /* Color amarillo */
    font-weight: 700;
    /* Aumentar el grosor de las letras */
}

#controls {
    margin-bottom: 20px;
}

#start-button,
#stop-button {
    padding: 10px 20px;
    font-size: 18px;
    background-color: #000;
    /* Color amarillo */
    color: #F8C603;
    /* Color de texto negro */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 0 10px;
    transition: background-color 0.3s ease;
    font-weight: 700;
    /* Aumentar el grosor de las letras */
}

#start-button:hover,
#stop-button:hover {
    background-color: #d9534f;
    /* Color amarillo oscuro */
}

#canvas {
    
    /* Borde amarillo */
    display: block;
    background-color: #F8C603;
    /* Color de fondo negro */
    margin-bottom: 10px;
}

#dominant-tone,
#dominant-frequency {
    font-weight: bold;
    color: #000000;
    /* Color amarillo */
    font-weight: 700;
    /* Aumentar el grosor de las letras */
}

#info {
    margin-top: 20px;
    color: #000000;
    /* Color amarillo */
}

#info p {
    font-size: 18px;
    margin-bottom: 10px;
}

#info img {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
}

/* Modal */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgb(0, 0, 0);
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    text-align: center;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

#login-form input {
    width: 100%;
    padding: 10px;
    margin: 5px 0 10px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

#login-form button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

#login-form button:hover {
    opacity: 0.8;
}

.container {
    display: flex;
    flex-direction: column;
    min-height: 100%;
}

header {
    background-color: var(--primary-color);
    color: var(--secondary-color);
    padding: 10px 0; 
    text-align: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
    background-color: var(--primary-color);
}

header > * {
    margin: 0 20px; /* Espaciado entre los elementos dentro del header */
    
}

header a{
color: var(--background-color);
text-decoration: none;
}

main {
    flex-grow: 1;
}

section {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh; /* Cada sección ocupa al menos el 100% de la altura del viewport */
}


    </style>
    <link   
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Workbench&display=swap"
        rel="stylesheet">
</head>

<body>

    <header>
        <h1 class="logo">The Banana</h1>
        <button id="abrir" class="abrir-menu"><i class="bi bi-list"></i></button>
        <nav class="nav" id="nav">
            <button class="cerrar-menu" id="cerrar"><i class="bi bi-x"></i></button>
            <ul class="nav-list">
                <li>
                    <div class="profile-menu">
                        <ul class="dropdown">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Iniciar sesión</a></li>
                            <li><a href="#">Cerrar sesión</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Instrumentos</a></li>
                <li><a href="#">Quiénes somos</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Qué hacemos</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="hero">
        <div class="hero-overlay">
            <div class="hero-text">
                <h1>¡La forma divertida, efectiva y gratis de aprender un idioma!</h1>
                <button>Comenzar ></button>
            </div>
        </div>
    </section>

    <section class="hero-content">
        <div class="hero-text">
            <h1>Descubre tus más grandes dotes con nosotros</h1>
            <br>
            <p>Los primeros pasos siempre son difíciles, pero con BananaSong aprenderás mientras juegas el divertido
                arte de la música.</p>
            <br>
            <button>Comenzar ></button>
        </div>
    </section>

    <main>
        <section class="body">
            <h2>"Aprende a tocar cualquier instrumento <br>con el ritmo de las bananas."</h2>
        </section>
    
        <section class="pre-footer">
            <h2>¡Se una Banana Mas!</h2>
            <a href="php/log_in.php">
                <button class="button-57" role="button"><span class="text">TE INTERESA?</span><span>UNETE</span></button>
            </a>
        </section>
    </main>
    
    <footer>
        <ul class="social-icons">
            <li><a href="https://www.facebook.com" target="_blank" class="bi bi-facebook"></a></li>
            <li><a href="https://www.twitter.com" target="_blank" class="bi bi-twitter"></a></li>
            <li><a href="https://www.instagram.com" target="_blank" class="bi bi-instagram"></a></li>
            <li><a href="https://www.linkedin.com" target="_blank" class="bi bi-linkedin"></a></li>
        </ul>
    </footer>

    <script>
        // Obteniendo el estado de sesión desde PHP
        const isLoggedIn = <?php echo isset($_SESSION['id']) ? 'true' : 'false'; ?>;
    
        if (isLoggedIn) {
            window.location.href = "bananasong.html";
        }
    
        function scrollToNextSection() {
            const nextSection = document.querySelector('.body');
            nextSection.scrollIntoView({behavior: 'smooth', block: 'start'});
        }
    </script>
    <script src="js/main.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana Homepage</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Workbench&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Workbench&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="container">
    <header>
        <a href="index.html"><h1>The Banana</h1></a>
        <nav>
            <ul class="nav-links">
                <li><a href="Cursos.html">Cursos</a></li>
                <li><a href="Perfil.html">Perfil</a></li>
                <li><a href="about.html">Sobre Nosotros</a></li>
                <li><a href="contact.html">Contacto</a></li>
                <li id="auth-link"></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <img src="img/BananaSong_out.jpeg" alt="">
            <div class="scroll-down" onclick="scrollToNextSection()">
                <img src="img/angulo-doble-pequeno-hacia-abajo.png" alt="">
            </div>
        </section>

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
        <div class="social-icons">
            <a href="https://www.youtube.com" target="_blank" class="social-icon">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.instagram.com" target="_blank" class="social-icon">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://x.com/Banana__Song" target="_blank" class="social-icon">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </footer>
</div>

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
</body>
</html>

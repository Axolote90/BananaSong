<?php
session_start();

if (!isset($_SESSION['correo']) || !isset($_SESSION['nombre'])) {
    header("Location: log_in.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana Homepage</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="imgs/10b28d43-87d9-4142-9a9f-1ab05f0d3245.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Workbench&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Workbench&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <header>
            <a href="Index.php"> <h1>The Banana</h1></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="Cursos.php">Cursos</a></li>
                    <li><a href="Perfil.php">Perfil</a></li>
                    <li><a href="About copy.php">Sobre Nosotros</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                </ul>
            </nav>
        </header>
        <main>

            <section class="body">
                <h1>Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?>!</h1>
                <p>¡Gracias por iniciar sesión en nuestro sitio!</p>
                <a href="log_out.php">Cerrar sesión</a>
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
        function scrollToNextSection() {
            const nextSection = document.querySelector('.body');
            nextSection.scrollIntoView({ behavior: 'smooth', block: 'start', duration: 5000 }); // Ajusta la duración a 1000 milisegundos (1 segundo)
        }
    </script>
</body>

</html>

<!-- Luis Manuel Reyes Condado -->
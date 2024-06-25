<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banana Homepage</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="/img/10b28d43-87d9-4142-9a9f-1ab05f0d3245.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Workbench&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        /* Estilos para el contenedor del formulario de login */
        
        .containerLog {
            background-color: #17181D;
            color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 50px auto; /* Ajusta el margen superior para centrar mejor */
            text-align: center;
        }

        .containerLog h2 {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
        }

        .containerLog label {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .containerLog input[type="email"],
        .containerLog input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .containerLog input[type="submit"] {
            background-color: #f4d03f;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .containerLog input[type="submit"]:hover {
            background-color: #d1a73d;
        }

        .containerLog a {
            color: #f4d03f;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }

        .containerLog a:hover {
            text-decoration: underline;
        }

        /* Estilo para el mensaje de error */
        .error-message {
            color: red;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
        }

        .hero {
            width: 100%;
            height: 20vh; /* Ajusta esta altura según tus necesidades */
            overflow: hidden;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <a href="Index.php">
                <h1>The Banana</h1>
            </a>
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
            <section class="hero">
                <div class="containerLog">
                    <h2>Login</h2>
                    <?php
                    if (isset($_GET['error'])) {
                        echo '<p class="error-message">' . htmlspecialchars($_GET['error']) . '</p>';
                    }
                    ?>
                    <form action="authenticate.php" method="post">
                        <label for="correo">Correo:</label>
                        <input type="email" id="correo" name="correo" required><br><br>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required><br><br>
                        <input type="submit" value="Login">
                    </form>
                    <a href="sing_up.php">Registrarse</a>
                </div>
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
</body>

</html>

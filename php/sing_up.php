<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="imgs/10b28d43-87d9-4142-9a9f-1ab05f0d3245.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos para el contenedor del formulario de registro */
        .containerReg {
            background-color: #17181D;
            color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 50px auto;
            text-align: center;
        }

        .containerReg h2 {
            font-family: 'Poppins', sans-serif;
            margin-bottom: 20px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-grid label {
            display: block;
            font-family: 'Poppins', sans-serif;
            font-size: 16px;
            margin-bottom: 8px;
            text-align: left;
        }

        .form-grid input[type="text"],
        .form-grid input[type="email"],
        .form-grid input[type="password"],
        .form-grid input[type="tel"],
        .form-grid input[type="file"],
        .form-grid select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .containerReg input[type="submit"] {
            background-color: #f4d03f;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .containerReg input[type="submit"]:hover {
            background-color: #d1a73d;
        }

        .containerReg a {
            color: #f4d03f;
            font-family: 'Poppins', sans-serif;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }

        .containerReg a:hover {
            text-decoration: underline;
        }

        .form-grid .full-width {
            grid-column: span 2;
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
                <div class="containerReg">
                    <h2>Registro</h2>
                    <form method="post" action="register.php" enctype="multipart/form-data">
                        <div class="form-grid">
                            <div class="full-width">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" required>
                            </div>
                            <div>
                                <label for="correo">Correo:</label>
                                <input type="email" id="correo" name="correo" required>
                            </div>
                            <div>
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password" required>
                            </div>
                            <div>
                                <label for="telefono">Teléfono:</label>
                                <input type="tel" id="telefono" name="telefono" required>
                            </div>
                            <div>
                                <label for="sexo">Sexo:</label>
                                <select id="sexo" name="sexo" required>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Otro">Otro</option>
                                </select>
                            </div>
                            <div class="full-width">
                                <label for="instrument">Instrumento:</label>
                                <select id="instrument" name="instrument">
                                    <option value="Piano">Piano</option>
                                    <option value="Guitarra">Guitarra</option>
                                    <option value="Ukelele">Ukelele</option>
                                </select>
                            </div>
                            <div class="full-width">
                                <input type="submit" value="Registrar">
                            </div>
                        </div>
                    </form>
                    <a href="log_in.php">Iniciar sesión</a>
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

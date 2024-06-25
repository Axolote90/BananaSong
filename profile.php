<!-- profile.html -->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <!-- Agrega enlaces a tus estilos CSS y scripts JS aquí -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="left-box">
        <div class="friends-list">
            <h1>Amigos</h1>
            <div class="friend">
                <div class="friend-pic">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
                <div class="friend-name">Amigo 1</div>
            </div>
            <div class="friend">
                <div class="friend-pic">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
                <div class="friend-name">Amigo 2</div>
            </div>
            <div class="friend">
                <div class="friend-pic">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                </div>
                <div class="friend-name">Amigo 3</div>
            </div>
        </div>
    </div>
    <div class="center-container">
        <!-- Contenido dinámico -->
        <div class="center-box top-center-box">
            <div class="banner">
                <div class="profile-pic-container">
                    <div class="profile-pic">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    </div>
                    <div class="username">
                        <?php
                        if (isset($_SESSION['nombre'])) {
                            echo $_SESSION['nombre'];
                        } else {
                            echo 'Usuario';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-box bottom-center-box">
            <div class="stats">
                <div class="stat-box">
                    <i class="fas fa-heart"></i>
                    <span class="stat-label">0000</span>
                </div>
                <div class="stat-box">
                    <i class="fas fa-fire"></i>
                    <span class="stat-label">0000</span>
                </div>
                <div class="stat-box">
                    <i class="fas fa-diamond"></i>
                    <span class="stat-label">0000</span>
                </div>
                <div class="stat-box">
                    <i class="fas fa-shield-alt"></i>
                    <span class="stat-label">0000</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

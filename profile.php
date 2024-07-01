<!-- profile.html -->


<style>
        /* Estilos para el modal */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            padding-top: 60px; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; 
            padding: 20px;
            border: 1px solid #888;
            width: 80%; 
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

/* Estilos para el banner y la foto de perfil */
.banner {
    position: relative;
    width: 90%;
    height: 300px; /* Ajusta la altura según tus necesidades */
    background-color: #f0f0f0; /* Color de fondo predeterminado */
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    justify-content: center;
}

.profile-pic-container {
    position: absolute;
    bottom: -50px; /* Ajusta esta propiedad para centrar la imagen */
    left: 50%;
    transform: translateX(-50%);
}

.profile-pic {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    border: 6px solid #f2c40cff; /* Añadir un borde blanco alrededor de la imagen */
    display: flex;
    align-items: center;
    justify-content: center;
}

.profile-pic img, .profile-pic i {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.username {
    color:black;
    text-align: center;
    margin-top: 10px; /* Ajusta según la altura de la foto de perfil */
    font-size: 24px; /* Tamaño del texto del nombre de usuario */
}


    </style>

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
            <div class="banner" style="background-image: url('data:image/jpeg;base64,<?php echo base64_encode($_SESSION['banner_picture']); ?>');">
                <div class="profile-pic-container">
                    <div class="profile-pic" onclick="openModal()">
                        <?php if (isset($_SESSION['profile_picture']) && !empty($_SESSION['profile_picture'])): ?>
                            <img src="data:image/jpeg;base64,<?php echo base64_encode($_SESSION['profile_picture']); ?>" alt="Foto de perfil">
                        <?php else: ?>
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <?php endif; ?>
                    </div>
                    <div class="username">
                        <?php echo isset($_SESSION['username']) ? $_SESSION['username'] : 'Usuario'; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="center-box bottom-center-box">
            <div class="stats">
                <div class="stat-box">
                    <i class="fas fa-heart"></i>
                    <span class="stat-label"><?php echo isset($_SESSION['vidas']) ? $_SESSION['vidas'] : '0000'; ?></span>
                </div>
                <div class="stat-box">
                    <i class="fas fa-fire"></i>
                    <span class="stat-label"><?php echo isset($_SESSION['racha']) ? $_SESSION['racha'] : '0000'; ?></span>
                </div>
                <div class="stat-box">
                    <i class="fas fa-diamond"></i>
                    <span class="stat-label"><?php echo isset($_SESSION['gemas']) ? $_SESSION['gemas'] : '0000'; ?></span>
                </div>
                <div class="stat-box">
                    <i class="fas fa-shield-alt"></i>
                    <span class="stat-label"><?php echo isset($_SESSION['clasificacion']) ? $_SESSION['clasificacion'] : '0000'; ?></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para cambiar foto de perfil -->
    <div id="profileModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Cambiar foto de perfil</h2>
            <form action="change_profile_picture.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="profile_picture" required>
                <button type="submit">Subir</button>
            </form>
        </div>
    </div>

    <script>
        function openModal() {
            document.getElementById("profileModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("profileModal").style.display = "none";
        }

        window.onclick = function(event) {
            var modal = document.getElementById("profileModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
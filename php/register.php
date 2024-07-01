<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $password = $_POST['password']; // Sin encriptar la contraseña
    $telefono = $_POST['telefono'];
    $sexo = $_POST['sexo'];
    $instrument = !empty($_POST['instrument']) ? $_POST['instrument'] : NULL;

    // Valores predeterminados para nuevos usuarios
    $vidas = 5;
    $gemas = 0;
    $racha = 0;
    $clasificacion = 0;

    // Manejo de archivos
    $profile_picture = NULL;
    $banner_picture = NULL;

    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == UPLOAD_ERR_OK) {
        $profile_picture = file_get_contents($_FILES['profile_picture']['tmp_name']);
    }

    if (isset($_FILES['banner_picture']) && $_FILES['banner_picture']['error'] == UPLOAD_ERR_OK) {
        $banner_picture = file_get_contents($_FILES['banner_picture']['tmp_name']);
    }

    // Verificar si el correo ya existe
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "El correo ya está registrado.";
    } else {
        // Insertar el nuevo usuario en la base de datos
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, phone, sex, profile_picture, banner_picture, instrument, vidas, gemas, racha, clasificacion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssiiis", $nombre, $correo, $password, $telefono, $sexo, $profile_picture, $banner_picture, $instrument, $vidas, $gemas, $racha, $clasificacion);

        if (!is_null($profile_picture)) {
            $stmt->send_long_data(5, $profile_picture);
        }
        if (!is_null($banner_picture)) {
            $stmt->send_long_data(6, $banner_picture);
        }

        if ($stmt->execute()) {
            // Iniciar sesión automáticamente
            $_SESSION['username'] = $nombre;
            $_SESSION['email'] = $correo;
            $_SESSION['id'] = $stmt->insert_id;
            $_SESSION['profile_picture'] = $profile_picture;
            $_SESSION['banner_picture'] = $banner_picture;
            $_SESSION['vidas'] = $vidas;
            $_SESSION['gemas'] = $gemas;
            $_SESSION['racha'] = $racha;
            $_SESSION['clasificacion'] = $clasificacion;

            // Redirigir a la página bananasong.html
            header("Location: ../bananasong.php"); // Ajuste de ruta para redirigir a la carpeta principal
            exit();
        } else {
            echo "Error en el registro. Inténtalo de nuevo.";
        }
    }

    $stmt->close();
}
$conn->close();
?>

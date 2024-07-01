<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Consulta para obtener los datos del usuario almacenados en la base de datos
    $stmt = $conn->prepare("SELECT id, username, password, profile_picture, banner_picture, vidas, gemas, racha, clasificacion FROM users WHERE email = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->bind_result($id, $nombre, $stored_password, $profile_picture, $banner_picture, $vidas, $gemas, $racha, $clasificacion);
    $stmt->fetch();
    $stmt->close();

    // Verificamos si la contraseña proporcionada por el usuario coincide con la almacenada
    if ($password == $stored_password) {
        // Contraseña válida, guardar los datos del usuario en la sesión
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $nombre;
        $_SESSION['email'] = $correo;
        $_SESSION['profile_picture'] = $profile_picture;
        $_SESSION['banner_picture'] = $banner_picture;
        $_SESSION['vidas'] = $vidas;
        $_SESSION['gemas'] = $gemas;
        $_SESSION['racha'] = $racha;
        $_SESSION['clasificacion'] = $clasificacion;

        header("Location: ../BananaSong.html"); // Ajuste de ruta para redirigir a la carpeta principal
        exit();
    } else {
        // Contraseña inválida, mostrar mensaje de error
        header("Location: log_in.php?error=" . urlencode("Contraseña incorrecta."));
        exit();
    }
}
$conn->close();
?>

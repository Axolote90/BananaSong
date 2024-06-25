<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    // Consulta para obtener el nombre y la contraseña almacenada en la base de datos
    $stmt = $conn->prepare("SELECT username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $correo);
    $stmt->execute();
    $stmt->bind_result($nombre, $stored_password);
    $stmt->fetch();
    $stmt->close();

    // Verificamos si la contraseña proporcionada por el usuario coincide con la almacenada
    if ($password == $stored_password) {
        // Contraseña válida, guardar el correo y el nombre del usuario en la sesión
        $_SESSION['correo'] = $correo;
        $_SESSION['nombre'] = $nombre;
        
        header("Location: /BananaSongOficial/BananaSong.html");
        exit();
    } else {
        // Contraseña inválida, mostrar mensaje de error
        header("Location: log_in.php?error=" . urlencode("Contraseña incorrecta."));
        exit();
    }
}
$conn->close();
?>
<!-- Luis Manuel Reyes Condado -->
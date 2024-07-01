<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['profile_picture'])) {
    $profile_picture = file_get_contents($_FILES['profile_picture']['tmp_name']);

    // Actualizar la foto de perfil en la base de datos
    $stmt = $conn->prepare("UPDATE users SET profile_picture = ? WHERE id = ?");
    $stmt->bind_param("bi", $profile_picture, $_SESSION['id']);
    $stmt->send_long_data(0, $profile_picture);
    if ($stmt->execute()) {
        // Actualizar la sesión
        $_SESSION['profile_picture'] = $profile_picture;
        header("Location: profile.html");
    } else {
        echo "Error al actualizar la foto de perfil.";
    }

    $stmt->close();
}
$conn->close();
?>

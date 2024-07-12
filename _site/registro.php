<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $mail = $_POST['mail'];
    $message = $_POST['tema'];

    $sql = "INSERT INTO oradores (nombre, mail, tema) VALUES ('$nombre', '$mail', '$tema')";

    if ($conn->query($sql) === TRUE) {
        echo "Creado exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "M@th3r2$1@";
$dbname = "base_prueba";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cedula = $_POST['cedula'];
    $fecha_nacimiento = $_POST['fecha-nacimiento'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $instagram = $_POST['instagram'];

    $sql = "INSERT INTO usuarios (nombre, apellido, cedula, fecha_nacimiento, email, telefono, instagram) VALUES ('$nombre', '$apellido', '$cedula', '$fecha_nacimiento', '$email', '$telefono', '$instagram')";

    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
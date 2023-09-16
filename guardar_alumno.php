<?php

$host = "localhost";
$username = "root";  // Cambia a tu usuario de base de datos
$password = "posgrado123";      // Cambia a tu contraseña de base de datos
$dbname = "alumno";

// Establecer conexión con la base de datos
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Capturar datos del formulario
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];
$WhatsApp = $_POST['WhatsApp'];

// Insertar datos en la tabla
$sql = "INSERT INTO datos_personales (nombre, apellido_paterno, apellido_materno, fecha_de_nacimiento, WhatsApp) VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$fecha_de_nacimiento', '$WhatsApp')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

<?php

$host = "localhost";
$username = "root";  // Cambia a tu usuario de base de datos
$password = "posgrado123";      // Cambia a tu contraseña de base de datos
$dbname = "gakko_kanri";

// Establecer conexión con la base de datos
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Capturar datos del formulario
$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$apellido_paterno = $_POST['apellido_paterno'];
$apellido_materno = $_POST['apellido_materno'];
$grupo = $_POST['grupo'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$fecha_de_nacimiento = $_POST['fecha_de_nacimiento'];

// Insertar datos en la tabla
$sql = "INSERT INTO Alumnos (Matricula, Nombre, ApellidoPaterno, ApellidoMaterno, Grupo, Email, Celular, FechaNacimiento) VALUES ('$matricula', '$nombre', '$apellido_paterno', '$apellido_materno', '$grupo', '$email', '$celular', '$fecha_de_nacimiento')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

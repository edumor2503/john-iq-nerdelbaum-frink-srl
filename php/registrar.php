<<?php
$host = "localhost";
$db   = "codo_a_codo";
$user = "root";
$pass = "";

// Crear una nueva conexión a la base de datos MySQL
$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Crear la tabla si no existe
$createTableSql = "CREATE TABLE IF NOT EXISTS registro (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50),
    nombreApellido VARCHAR(100),
    email VARCHAR(150),
    empresa VARCHAR(50),
    cargo VARCHAR(50),
    contrasena VARCHAR(50),
    repetirContrasena VARCHAR(50),
    aceptoTerminos INT
)";

if ($conn->query($createTableSql) === FALSE) {
    die("Error creating table: " . $conn->error);
}

// Recoger los datos del formulario
$usuario = $_POST['usuario'];
$nombreApellido = $_POST['nombreApellido'];
$email = $_POST['email'];
$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
$contrasena = $_POST['contrasena'];
$repetirContrasena = $_POST['repetirContrasena'];
$aceptoTerminos = isset($_POST['rememberUser']) ? 1 : 0;

// Crear la consulta SQL
$sql = "INSERT INTO registro (usuario, nombreApellido, email, empresa, cargo, contrasena, repetirContrasena, aceptoTerminos)
VALUES ('$usuario', '$nombreApellido','$email', '$empresa', '$cargo', '$contrasena', '$repetirContrasena', '$aceptoTerminos')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Registro creado con éxito";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
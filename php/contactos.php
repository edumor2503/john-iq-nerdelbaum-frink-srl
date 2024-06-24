<?php
$servername = "localhost";
$username = "root";
$password = "";
// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Intentar seleccionar la base de datos
if (!mysqli_select_db($conn, 'contactos_db')) {
  // Si no se puede seleccionar, intentar crear la base de datos
  $sql = "CREATE DATABASE contactos_db";
  if ($conn->query($sql) === TRUE) {
    echo "Base de datos creada correctamente";
  } else {
    echo "Error al crear la base de datos: " . $conn->error;
  }
}

// Seleccionar la base de datos
mysqli_select_db($conn, 'contactos_db');

// Verificar si la tabla 'contactos' existe y crearla si no
$sql = "CREATE TABLE IF NOT EXISTS contactos (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(50) NOT NULL,
empresa VARCHAR(50),
cargo VARCHAR(50),
rubro VARCHAR(50),
email VARCHAR(50),
telefono VARCHAR(20),
mensaje TEXT,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Tabla 'contactos' creada correctamente";
} else {
  echo "Error al crear la tabla: " . $conn->error;
}

// Insertar datos del formulario en la tabla
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
$rubro = $_POST['rubro'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO contactos (nombre, empresa, cargo, rubro, email, telefono, mensaje)
VALUES ('$nombre', '$empresa', '$cargo', '$rubro', '$email', '$telefono', '$mensaje')";

if ($conn->query($sql) === TRUE) {
  echo "Nuevo contacto creado exitosamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


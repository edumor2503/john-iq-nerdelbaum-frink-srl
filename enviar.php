<?php
$destino= "eduardomoreno2593@gmail.com";
$nombre= $_POST["nombre"];
$empresa= $_POST["empresa"];
$cargo= $_POST["cargo"];
$rubro= $_POST["rubro"];
$correo= $_POST["correo"];
$telefono= $_POST["telefono"];
$mensaje= $_POST["mensaje"];

$contenido= "Nombre: " . $nombre . "\nEmpresa: " . $empresa . "\nCargo: " . $cargo ."\nRubro: " . $rubro ."\nCorreo: " . $correo ."\nTelefono: " .$telefono . "\nMensaje: " . $mensaje;

mail($destino, "Contacto", $contenido);

header("Location:index.html");
?>



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

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>John I.Q. Nerdelbaum Frink - Diseno paaginas web<S class="R L"></S></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="ext/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/keyframes.css">
  <link rel="stylesheet" href="css/banner.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/estilos_contactos.css">
  </head>
<body>
  

<section>

    <div id="contacto" class="container body_container">

        
    <form action="enviar.php" method="post">
      <br>
      <h2>Contáctese con nosotros</h2>
      
      <p class="intro">Agradecemos el interés por contactarse con nosotros, completando el siguiente formulario</p>
      
      <hr>
      
      <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
      
            
            <input type="text" name="nombre" placeholder="Nombre y Apellido" required>

            <input type="text" name="empresa" placeholder="Empresa" required>

            <input type="text" name="cargo" placeholder="Cargo" required>

            <input list="rubros" name="rubro" placeholder="Rubro de la Empresa" required>
                  <datalist id="rubros">
                      <option value="Agricultura">
                      <option value="Alimentos y Bebidas">
                      <option value="Automotriz">
                      <option value="Bienes Raíces">
                      <option value="Comercio">
                      <option value="Construcción">
                      <option value="Educación">
                      <option value="Energía">
                      <option value="Entretenimiento">
                      <option value="Otros">
                  </datalist>
            
            <input type="text" name="email" placeholder="Email" required>
            
            <input type="text" name="telefono" placeholder="Teléfono de contacto" required>
                            
            <textarea name="mensaje" placeholder="Escriba aquí su mensaje" required></textarea>
            <p></p>
              <input type="submit" value="Enviar" id="boton">
      </div>
          
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
              
          <br>		
            <p class="info"><strong>También puede ubicarnos</strong> </p>

            <p class="info">Dirección: Jean Jaures 747 Piso 2, CABA</p>
            <p class="info">Teléfono: 011 4321-1234 - lineas rotativas</p>
            
            <p class="info">Email: info@jhfrinksrl.com.ar</p>
            <div class="map" style="width: 85%; border: 1px solid #000;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.104396642153!2d-58.41039222494369!3d-34.601521557381055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca8db96bffff%3A0x9d08bab1f009e615!2sJean%20Jaures%20747%2C%20C1189%20Cdad.%20Aut%C3%B3noma%20de%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1715021916126!5m2!1ses-419!2sar" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
      </div>
      <div class="whatsapp-container">
        <span class="whatsapp-text align-with-icon">Contáctanos por WhatsApp</span>
        <a href="https://wa.me/1234567890" class="whatsapp-icon" target="_blank">
            <img src="img/whatsapp.jpg" alt="WhatsApp" width="30" height="30" class="align-right">
        </a>
    </div>
        
    </form>
    <br>
    <br>

    </div>
</section>
<!-- footer -->
<section>
    <footer class ="footer">
      <div class="container">
        <div class="row">
            <div class="col-md-2">
                <img src="img/logo J.I.Q. fondo azul.gif" alt="Logo" style="width: 100%;">
            </div>
            <div class="col-md-2">
                <p style="font-weight: bold;">Profesionales en sistemas de información, al servicio de su empresa para analizar y gestionar sus necesidades de software </p>
            </div>
            <div class="col-md-2">
                <ul style="list-style-type: none; padding: 0;">
                    <li><a href="#index.html" style="color: white; font-weight: bold;">Inicio</a></li>
                    <li><a href="#ecommerce" style="color: white; font-weight: bold;">Ecommerce</a></li>
                    <li><a href="#diseno" style="color: white; font-weight: bold;">Diseno Web</a></li>
                    <li><a href="#brandig" style="color: white; font-weight: bold;">Branding</a></li>
                    <li><a href="#contacto" style="color: white; font-weight: bold;">Contacto</a></li>
                </ul>
            </div>
           
            <div class="col-md-6">
              <form action="YOUR_SUBSCRIPTION_ENDPOINT" method="post" class="w-100" style="background-color: rgb(16, 44, 87); color: white; padding: 10px; border-radius: 5px;">
                  <h3 style="text-align: center;">suscribite a nuestro newsletter</h3>
                  <div class="form-group">
                      <label for="email">Correo Electrónico:</label>
                      <input type="email" id="email" name="email" class="form-control" required>
                  </div>
                  <div class="form-group d-flex justify-content-center mt-3">
                    <button type="submit" class="btn btn-light" style="width: 50%;">Subscribirse</button>
                </div>
              </form>
          </div>

        </div>
      </div>
  </footer>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="ext/bootstrap/js/jquery.js"></script>
<script src="ext/bootstrap/js/bootstrap.min.js"></script>
<script src="js/index.js"></script>

</body>

</html>
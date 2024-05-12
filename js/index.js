document.getElementById('boton').addEventListener('click', function(event) {
  event.preventDefault();

  var nombre = document.getElementsByName('nombre')[0].value;
  var empresa = document.getElementsByName('empresa')[0].value;
  var cargo = document.getElementsByName('cargo')[0].value;
  var rubro = document.getElementsByName('rubro')[0].value;
  var email = document.getElementsByName('email')[0].value;
  var telefono = document.getElementsByName('telefono')[0].value;
  var mensaje = document.getElementsByName('mensaje')[0].value;

  var data = {
      nombre: nombre,
      empresa: empresa,
      cargo: cargo,
      rubro: rubro,
      email: email,
      telefono: telefono,
      mensaje: mensaje
  };

  fetch('/send-email', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
      body: JSON.stringify(data),
  })
  .then((response) => response.json())
  .then((data) => {
      console.log('Success:', data);
  })
  .catch((error) => {
      console.error('Error:', error);
  });
});
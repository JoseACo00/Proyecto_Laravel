var form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  var nombre = document.getElementById('nombre').value;
  var localidad = document.getElementById('localidad').value;
  var direccion = document.getElementById('direccion').value;
  var precio = document.getElementById('precio').value;
  var foto = document.getElementById('foto').value;
  var disponibilidad = document.getElementById('disponibilidad').value;

  var errorMessages = [];

  // Validar el campo Nombre
  if (nombre.trim() === '' || /[0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(nombre)) {
    errorMessages.push('Por favor, ingresa un nombre válido sin números ni símbolos');
  }

  // Validar el campo Localidad
  if (localidad.trim() === '' || /[0-9!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/.test(localidad)) {
    errorMessages.push('Por favor, ingresa una localidad válida sin números ni símbolos');
  }

  // Validar el campo Dirección
  if (direccion.trim() === '') {
    errorMessages.push('Por favor, ingresa la dirección de la cancha');
  }

  // Validar el campo Precio
  if (precio.trim() === '' || isNaN(precio) || parseFloat(precio) < 0) {
    errorMessages.push('Por favor, ingresa un precio válido');
  }

  // Validar el campo Foto (opcional)
  if (foto.trim() !== '' && !(/\.(jpe?g|png|gif)$/i).test(foto)) {
    errorMessages.push('Por favor, selecciona un archivo de imagen válido');
  }

  // Validar el campo Disponibilidad
  if (disponibilidad.trim() === '') {
    errorMessages.push('Por favor, selecciona la disponibilidad de la cancha');
  }

  // Mostrar mensajes de error si los hay
  if (errorMessages.length > 0) {
    var errorContainer = document.getElementById('errorContainer');
    errorContainer.innerHTML = '';
    errorMessages.forEach(function(message) {
      var errorMessage = document.createElement('p');
      errorMessage.textContent = message;
      errorContainer.appendChild(errorMessage);
    });
  } else {
    // Enviar el formulario si no hay errores
    form.submit();
  }
});

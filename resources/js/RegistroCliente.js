// Espera a que se cargue el contenido del documento
document.addEventListener('DOMContentLoaded', function () {
    // Obtiene referencias a los elementos del formulario
    var tipoDocumentoSelect = document.getElementById('tipo_documento');
    var nombresLabel = document.getElementById('nombres_label');
    var apellidosLabel = document.getElementById('apellidos_label');
    var razonSocialLabel = document.getElementById('razon_social_label');
    var nombresInput = document.getElementById('nombres');
    var apellidosInput = document.getElementById('apellidos');
    var razonSocialInput = document.getElementById('razon_social');

    // Función para mostrar u ocultar campos según el tipo de documento
    function mostrarCampos() {
        // Obtiene el valor seleccionado en el campo tipo de documento
        var selectedValue = tipoDocumentoSelect.value;

        // Oculta todos los campos
        nombresLabel.style.display = 'none';
        apellidosLabel.style.display = 'none';
        razonSocialLabel.style.display = 'none';
        nombresInput.style.display = 'none';
        apellidosInput.style.display = 'none';
        razonSocialInput.style.display = 'none';

        // Muestra campos según la selección
        if (selectedValue === 'DNI' || selectedValue === 'CE' || selectedValue === 'Pasaporte') {
            nombresLabel.style.display = 'block';
            apellidosLabel.style.display = 'block';
            nombresInput.style.display = 'block';
            apellidosInput.style.display = 'block';
            razonSocialInput.removeAttribute("required");
            nombresInput.setAttribute("required", "");
            apellidosInput.setAttribute("required", "");
        } else if (selectedValue === 'RUC') {
            razonSocialLabel.style.display = 'block';
            razonSocialInput.style.display = 'block';
            razonSocialInput.setAttribute("required", "");
            nombresInput.removeAttribute("required");
            apellidosInput.removeAttribute("required");
        }
    }

    // Llama a la función para mostrar campos al cargar la página
    mostrarCampos();

    // Agrega un event listener para detectar cambios en el campo tipo de documento
    tipoDocumentoSelect.addEventListener('change', mostrarCampos);
});
document.addEventListener('DOMContentLoaded', function() {
    // Obtener referencias a los elementos del formulario y otros elementos relevantes
    var form1 = document.getElementById('formulariolanding');
    var form2 = document.getElementById('form2');
    var confirmation = document.getElementById('confirmation');
    var next1 = document.getElementById('next1');
    var back = document.getElementById('back');
    var complete = document.getElementById('complete');
    var confirmationMessage = document.getElementById('confirmationMessage');
    var instagramField = document.getElementById('form_nombre');
    var progressBar = document.getElementById('progress-bar');
    var instagramInput = document.getElementById('instagram');

    // Función para asegurarse de que el campo de entrada tenga un "@" al obtener el foco si el valor no comienza con él.
    function setInitialValue() {
        if (!instagramInput.value.startsWith('@')) {
            instagramInput.value = '@';
        }
    }

    // Función que se activa cada vez que el usuario escribe en el campo.
    function handleInputChange(e) {
        var input = e.target;
        if (!input.value.startsWith('@')) {
            input.value = '@' + input.value.replace(/^@*/, '');
        }
    }

    // Función que previene que el usuario borre el "@" al presionar la tecla de retroceso cuando el cursor está justo después del "@".
    function preventRemovalOfAt(e) {
        if (e.target.selectionStart === 1 && e.key === "Backspace") {
            e.preventDefault();
        }
    }

    // Agregar los event listeners al campo de entrada de Instagram
    instagramInput.addEventListener('focus', setInitialValue);
    instagramInput.addEventListener('input', handleInputChange);
    instagramInput.addEventListener('keydown', preventRemovalOfAt);

    next1.addEventListener('click', function(event) {
        event.preventDefault(); // Previene la recarga de la página
        if (form1.checkValidity() === false) {
            event.stopPropagation();
            form1.classList.add('was-validated');
        } else {
            form1.style.display = 'none';
            form2.style.display = 'block';
            // Actualizar la barra de progreso al 50%
            progressBar.style.width = '50%';
            progressBar.textContent = '';
        }
    });

    back.addEventListener('click', function(event) {
        event.preventDefault(); // Previene la recarga de la página
        form2.style.display = 'none';
        form1.style.display = 'block';
        progressBar.style.width = '0%';
        progressBar.textContent = '';
        next1.classList.add('active');
    });

    complete.addEventListener('click', function(event) {
        event.preventDefault(); // Previene la recarga de la página
        if (form2.checkValidity() === false) {
            event.stopPropagation();
            form2.classList.add('was-validated');
        } else {
            var instagramUser = instagramField.value;
            confirmationMessage.textContent = instagramUser;
            form2.style.display = 'none';
            confirmation.style.display = 'block';
            // Actualizar la barra de progreso al 100%
            progressBar.style.width = '100%';
            progressBar.textContent = '';
        }
    });
});

/*Funciòn de los botones*/
document.addEventListener('DOMContentLoaded', function() {
    // Obtener referencias a los elementos del formulario y otros elementos relevantes
    var form1 = document.getElementById('formulariolanding');
    var form2 = document.getElementById('form2');
    var confirmation = document.getElementById('confirmation');
    var next1 = document.getElementById('next1');
    var back = document.getElementById('back');
    var complete = document.getElementById('complete');
    var confirmationMessage = document.getElementById('confirmationMessage');
    var instagramField = document.getElementById('instagram');
    var progressBar = document.getElementById('progress-bar');

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
    });

    complete.addEventListener('click', function(event) {
        event.preventDefault(); // Previene la recarga de la página
        if (form2.checkValidity() === false) {
            event.stopPropagation();
            form2.classList.add('was-validated');
        } else {
            var instagramUser = instagramField.value;
            confirmationMessage.textContent = instagramUser + ", ¡ya estás por terminar!";
            form2.style.display = 'none';
            confirmation.style.display = 'block';
            // Actualizar la barra de progreso al 100%
            progressBar.style.width = '100%';
            progressBar.textContent = '';
        }
    });
});

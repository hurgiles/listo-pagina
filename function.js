/*Funciòn de los botones*/
document.addEventListener('DOMContentLoaded', function() {
    var form1 = document.getElementById('formulariolanding');
    var form2 = document.getElementById('form2');
    var confirmation = document.getElementById('confirmation');
    var next1 = document.getElementById('next1');
    var back = document.getElementById('back');
    var complete = document.getElementById('complete');
    var confirmationMessage = document.getElementById('confirmationMessage');
    var instagramField = document.getElementById('instagram');

    next1.addEventListener('click', function(event) {
        if (form1.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            form1.classList.add('was-validated');
        } else {
            form1.style.display = 'none';
            form2.style.display = 'block';
        }
    });

    back.addEventListener('click', function(event) {
        event.preventDefault();
        form2.style.display = 'none';
        form1.style.display = 'block';
    });

    complete.addEventListener('click', function(event) {
        if (form2.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            form2.classList.add('was-validated');
        } else {
            event.preventDefault();
            var instagramUser = instagramField.value;
            confirmationMessage.textContent = instagramUser + ", ya estás por terminar!";
            form2.style.display = 'none';
            confirmation.style.display = 'block';
        }
    });
});
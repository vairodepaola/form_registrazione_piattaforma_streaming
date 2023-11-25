var formIndex = document.getElementById("FormPerPassareEmail");
var inputEmail = document.getElementById("InputPerPassareEmail");
var isValid;
formIndex.addEventListener("submit", function (event) {
    isValid = validateEmail(inputEmail, event);
    if (isValid) {
        //
    }
    else {
        event.preventDefault();
    }
});
//Function
var validateEmail = function (inputEmail, event) {
    var email = inputEmail.value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var fieldMailIsValid = emailPattern.test(email);
    if (!fieldMailIsValid) {
        email = "";
        inputEmail.classList.add('is-invalid');
        var messageError = inputEmail.title;
        alert(messageError);
        event.preventDefault();
    }
    else {
        inputEmail.classList.remove('is-invalid');
    }
    return fieldMailIsValid;
};

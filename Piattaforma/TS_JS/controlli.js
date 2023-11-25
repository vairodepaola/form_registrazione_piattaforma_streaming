var form = document.getElementById("formId");
var controll = false;
var validation = function (event) {
    var isValidNome = verificaNomeCognome("InputName", 3, 20);
    var isValidCognome = verificaNomeCognome("InputSurname", 3, 20);
    var isValidRadioButton = verificaRadioButton();
    var isValidData = verificaData("dataInput");
    var isValidRegione = verificaRegioneProvincia("InputRegione", 3, 30);
    var isValidProvincia = verificaRegioneProvincia("InputProvincia", 3, 30);
    var isValidVia = verificaVia("InputVia", 3, 40);
    var isValidCAP = verificaCAP("InputCAP", 5, 5);
    var isValidPassword = robustezzaPassword("Password1", "passwordHelpBlock", 8, 20);
    var isSamePassword1e2 = verificaSecondaPasswordUguale("Password1", "Password2", isValidPassword);
    controll = isValidNome && isValidCognome && isValidRadioButton && isValidData && isValidRegione && isValidProvincia && isValidVia && isValidCAP && isValidPassword && isSamePassword1e2;
    if (!controll) {
        event.preventDefault();
    }
    else {
        window.location.href = "elenco.php";
    }
};
form === null || form === void 0 ? void 0 : form.addEventListener("submit", function (event) {
    validation(event);
});
//Function
function robustezzaPassword(idPassword, helpPassword, min, max) {
    var password = document.getElementById(idPassword);
    var messaggioPassword = document.getElementById(helpPassword);
    var contieneMinuscola = /[a-z]/.test(password.value);
    if (!contieneMinuscola) {
        console.log("La password deve contenere almeno una minuscola");
    }
    var contieneMaiuscola = /[A-Z]/.test(password.value);
    if (!contieneMaiuscola) {
        console.log("La password deve contenere almeno una maiuscola");
    }
    var contieneNumero = /\d/.test(password.value);
    if (!contieneNumero) {
        console.log("La password deve contenere almeno un numero");
    }
    var contieneSimbolo = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password.value);
    if (!contieneSimbolo) {
        console.log("La password deve contenere almeno un simbolo");
    }
    var nonContieneSpazi = !/\s/.test(password.value);
    if (!nonContieneSpazi) {
        console.log("La password non deve contenere spazi");
    }
    var lunghezzaValida = LengthField(idPassword, min, max);
    var robustezza = contieneMinuscola && contieneMaiuscola && contieneNumero && contieneSimbolo && nonContieneSpazi && lunghezzaValida;
    if (!robustezza) {
        password.value = "";
        password.classList.add('is-invalid');
        messaggioPassword.classList.add("errore");
        var messageError = password.title;
        alert(messageError);
    }
    else {
        password.classList.remove('is-invalid');
    }
    return robustezza;
}
function verificaNomeCognome(idInputNome, min, max) {
    var nome = document.getElementById(idInputNome);
    var pattern = /^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]+$/;
    var conforme = pattern.test(nome.value);
    if (!conforme) {
        //console.log("Il Nome non deve contenere solo lettere")
    }
    var lunghezzaValida = LengthField(idInputNome, min, max);
    var verifica = conforme && lunghezzaValida;
    if (!verifica) {
        nome.value = "";
        nome.classList.add('is-invalid');
        var messageError = nome.title;
        alert(messageError);
    }
    else {
        nome.classList.remove('is-invalid');
    }
    return verifica;
}
function verificaRegioneProvincia(idInputNome, min, max) {
    var regione = document.getElementById(idInputNome);
    var pattern = /^[a-zA-Zàáèéìíîòóùú\s]+$/;
    var conforme = pattern.test(regione.value);
    if (!conforme) {
        //console.log("La Regione non deve contenere solo lettere")
    }
    var lunghezzaValida = LengthField(idInputNome, min, max);
    var verifica = conforme && lunghezzaValida;
    if (!verifica) {
        regione.value = "";
        regione.classList.add('is-invalid');
        var messageError = regione.title;
        alert(messageError);
    }
    else {
        regione.classList.remove('is-invalid');
    }
    return verifica;
}
function verificaVia(idInputNome, min, max) {
    var via = document.getElementById(idInputNome);
    var pattern = /^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ0-9-\/\s]+$/;
    var conforme = pattern.test(via.value);
    if (!conforme) {
        //console.log("")
    }
    var lunghezzaValida = LengthField(idInputNome, min, max);
    var verifica = conforme && lunghezzaValida;
    if (!verifica) {
        via.value = "";
        via.classList.add('is-invalid');
        var messageError = via.title;
        alert(messageError);
    }
    else {
        via.classList.remove('is-invalid');
    }
    return verifica;
}
function verificaCAP(idInputNome, min, max) {
    var CAP = document.getElementById(idInputNome);
    var pattern = /^[0-9]+$/;
    var conforme = pattern.test(CAP.value);
    if (!conforme) {
        //console.log("")
    }
    var lunghezzaValida = LengthField(idInputNome, min, max);
    var verifica = conforme && lunghezzaValida;
    if (!verifica) {
        CAP.value = "";
        CAP.classList.add('is-invalid');
        var messageError = CAP.title;
        alert(messageError);
    }
    else {
        CAP.classList.remove('is-invalid');
    }
    return verifica;
}
function LengthField(idField, min, max) {
    var field = document.getElementById(idField);
    var fieldIsValid = field.value.trim().length >= min && field.value.trim().length <= max;
    if (!fieldIsValid) {
        field.classList.add('is-invalid');
        console.log(idField + " deve contenere tra " + min + " e " + max + " caratteri");
    }
    else {
        field.classList.remove('is-invalid');
    }
    return fieldIsValid;
}
function verificaRadioButton() {
    var maschio = document.getElementById("Maschio");
    var femmina = document.getElementById("Femmina");
    var maschioChecked = maschio.checked;
    if (maschioChecked) {
        console.log("Il sesso selezionato è maschio");
    }
    var femminaChecked = femmina.checked;
    if (femminaChecked) {
        console.log("Il sesso selezionato è femmina");
    }
    var verifica = maschioChecked || femminaChecked;
    if (!verifica) {
        maschio.classList.add("is-invalid");
        femmina.classList.add("is-invalid");
        alert("Devi selezionare il sesso.");
    }
    else {
        maschio.classList.remove("is-invalid");
        femmina.classList.remove("is-invalid");
    }
    return verifica;
}
function verificaSecondaPasswordUguale(idPassword1, idPassword2, verificaPassword) {
    var password1 = document.getElementById(idPassword1);
    var password2 = document.getElementById(idPassword2);
    var uguale = password2.value === password1.value;
    if (verificaPassword) {
        if (!uguale) {
            console.log("La Password 2 deve essere uguale alla password 1");
            password2.value = "";
            password2.classList.add('is-invalid');
            var messageError = password2.title;
            alert(messageError);
        }
        else {
            password2.classList.remove('is-invalid');
        }
    }
    return uguale;
}
function verificaData(idData) {
    var data = document.getElementById(idData);
    var verifica = data.value !== "";
    if (!verifica) {
        data.classList.add('is-invalid');
        var messageError = data.title;
        alert(messageError);
    }
    else {
        data.classList.remove('is-invalid');
    }
    return verifica;
}

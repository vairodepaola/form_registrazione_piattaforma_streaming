let form = document.getElementById("formId")

let controll:boolean = false

const validation = (event:Event):void => {
    let isValidNome:boolean = verificaNomeCognome("InputName", 3, 20)
    let isValidCognome:boolean = verificaNomeCognome("InputSurname", 3, 20)
    let isValidRadioButton:boolean = verificaRadioButton()
    let isValidData:boolean = verificaData("dataInput")
    let isValidRegione:boolean = verificaRegioneProvincia("InputRegione", 3, 30)
    let isValidProvincia:boolean = verificaRegioneProvincia("InputProvincia", 3, 30)
    let isValidVia:boolean = verificaVia("InputVia", 3, 40)
    let isValidCAP:boolean = verificaCAP("InputCAP", 5, 5)
    let isValidPassword:boolean = robustezzaPassword("Password1", "passwordHelpBlock", 8, 20)
    let isSamePassword1e2:boolean = verificaSecondaPasswordUguale("Password1", "Password2", isValidPassword)

    controll = isValidNome && isValidCognome && isValidRadioButton && isValidData && isValidRegione && isValidProvincia && isValidVia && isValidCAP && isValidPassword && isSamePassword1e2
    if(!controll){
        event.preventDefault()
    }else{
        window.location.href = "elenco.php"
    }
}

form?.addEventListener("submit", (event:Event) => {
    validation(event)
})

//Function
function robustezzaPassword(idPassword:string, helpPassword:string, min:number, max:number):boolean {
    let password:HTMLInputElement|null = document.getElementById(idPassword) as HTMLInputElement
    let messaggioPassword:HTMLParagraphElement|null = document.getElementById(helpPassword) as HTMLParagraphElement

    let contieneMinuscola:boolean = /[a-z]/.test(password.value)
    if(!contieneMinuscola){
        console.log("La password deve contenere almeno una minuscola")
    }
    
    let contieneMaiuscola:boolean = /[A-Z]/.test(password.value)
    if(!contieneMaiuscola){
        console.log("La password deve contenere almeno una maiuscola")
    }

    let contieneNumero:boolean = /\d/.test(password.value);
    if(!contieneNumero){
        console.log("La password deve contenere almeno un numero")
    }

    let contieneSimbolo:boolean = /[!@#$%^&*()_+{}\[\]:;<>,.?~\\/-]/.test(password.value);
    if(!contieneSimbolo){
        console.log("La password deve contenere almeno un simbolo")
    }

    let nonContieneSpazi:boolean = !/\s/.test(password.value);
    if(!nonContieneSpazi){
        console.log("La password non deve contenere spazi")
    }

    let lunghezzaValida:boolean = LengthField(idPassword, min, max)

    let robustezza:boolean = contieneMinuscola && contieneMaiuscola && contieneNumero && contieneSimbolo && nonContieneSpazi && lunghezzaValida;

    if(!robustezza){
        password.value = ""
        password.classList.add('is-invalid')
        messaggioPassword.classList.add("errore")

        let messageError:string = password.title
        alert(messageError)
    }else{
        password.classList.remove('is-invalid')
    }
    return robustezza
}
function verificaNomeCognome(idInputNome:string, min:number, max:number):boolean {
    let nome:HTMLInputElement|null = document.getElementById(idInputNome) as HTMLInputElement
    let pattern = /^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]+$/;

    let conforme:boolean = pattern.test(nome.value)
    if(!conforme){
        //console.log("Il Nome non deve contenere solo lettere")
    }

    let lunghezzaValida:boolean = LengthField(idInputNome, min, max)

    let verifica:boolean = conforme && lunghezzaValida

    if(!verifica){
        nome.value = ""
        nome.classList.add('is-invalid')

        let messageError:string = nome.title
        alert(messageError)
    }else{
        nome.classList.remove('is-invalid')
    }
    return verifica
}
function verificaRegioneProvincia(idInputNome:string, min:number, max:number):boolean {
    let regione:HTMLInputElement|null = document.getElementById(idInputNome) as HTMLInputElement
    let pattern = /^[a-zA-Zàáèéìíîòóùú\s]+$/;

    let conforme:boolean = pattern.test(regione.value)
    if(!conforme){
        //console.log("La Regione non deve contenere solo lettere")
    }

    let lunghezzaValida:boolean = LengthField(idInputNome, min, max)

    let verifica:boolean = conforme && lunghezzaValida

    if(!verifica){
        regione.value = ""
        regione.classList.add('is-invalid')

        let messageError:string = regione.title
        alert(messageError)
    }else{
        regione.classList.remove('is-invalid')
    }
    return verifica
}
function verificaVia(idInputNome:string, min:number, max:number):boolean {
    let via:HTMLInputElement|null = document.getElementById(idInputNome) as HTMLInputElement
    let pattern = /^[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ0-9-\/\s]+$/;

    let conforme:boolean = pattern.test(via.value)
    if(!conforme){
        //console.log("")
    }

    let lunghezzaValida:boolean = LengthField(idInputNome, min, max)

    let verifica:boolean = conforme && lunghezzaValida

    if(!verifica){
        via.value = ""
        via.classList.add('is-invalid')

        let messageError:string = via.title
        alert(messageError)
    }else{
        via.classList.remove('is-invalid')
    }
    return verifica
}
function verificaCAP(idInputNome:string, min:number, max:number):boolean {
    let CAP:HTMLInputElement|null = document.getElementById(idInputNome) as HTMLInputElement
    let pattern = /^[0-9]+$/;

    let conforme:boolean = pattern.test(CAP.value)
    if(!conforme){
        //console.log("")
    }

    let lunghezzaValida:boolean = LengthField(idInputNome, min, max)

    let verifica:boolean = conforme && lunghezzaValida

    if(!verifica){
        CAP.value = ""
        CAP.classList.add('is-invalid')

        let messageError:string = CAP.title
        alert(messageError)
    }else{
        CAP.classList.remove('is-invalid')
    }
    return verifica
}
function LengthField(idField:string, min:number, max:number):boolean{
    let field:HTMLInputElement|null = document.getElementById(idField) as HTMLInputElement

    let fieldIsValid:boolean = field.value.trim().length >= min && field.value.trim().length <= max;
    if(!fieldIsValid){
        field.classList.add('is-invalid')
        console.log(idField + " deve contenere tra " + min + " e " + max + " caratteri");
        
    } else {
        field.classList.remove('is-invalid')
    }
    return fieldIsValid;
}
function verificaRadioButton():boolean{
    let maschio:HTMLInputElement|null = document.getElementById("Maschio") as HTMLInputElement
    let femmina:HTMLInputElement|null = document.getElementById("Femmina") as HTMLInputElement

    let maschioChecked:boolean = maschio.checked
    if(maschioChecked){
        console.log("Il sesso selezionato è maschio")
    }

    let femminaChecked:boolean = femmina.checked
    if(femminaChecked){
        console.log("Il sesso selezionato è femmina")
    }

    let verifica:boolean = maschioChecked || femminaChecked
    if(!verifica){
        maschio.classList.add("is-invalid")
        femmina.classList.add("is-invalid")
        alert("Devi selezionare il sesso.")
    }else{
        maschio.classList.remove("is-invalid")
        femmina.classList.remove("is-invalid")
    }
    return verifica
}
function verificaSecondaPasswordUguale(idPassword1:string, idPassword2:string, verificaPassword:boolean):boolean{
    let password1:HTMLInputElement|null = document.getElementById(idPassword1) as HTMLInputElement
    let password2:HTMLInputElement|null = document.getElementById(idPassword2) as HTMLInputElement

    let uguale:boolean = password2.value === password1.value

    if(verificaPassword){
        if(!uguale){
            console.log("La Password 2 deve essere uguale alla password 1")

            password2.value = ""
            password2.classList.add('is-invalid')
    
            let messageError:string = password2.title
            alert(messageError)
        }else{
            password2.classList.remove('is-invalid')
        }
    }
    return uguale
}
function verificaData(idData:string):boolean{
    let data:HTMLInputElement|null = document.getElementById(idData) as HTMLInputElement

    let verifica:boolean = data.value !== ""

    if(!verifica){
        data.classList.add('is-invalid')
    
        let messageError:string = data.title
        alert(messageError)
    }else{
        data.classList.remove('is-invalid')
    }
    return verifica
}

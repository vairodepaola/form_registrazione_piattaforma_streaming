let formIndex:HTMLFormElement|null = document.getElementById("FormPerPassareEmail") as HTMLFormElement

const inputEmail:HTMLInputElement|null = document.getElementById("InputPerPassareEmail") as HTMLInputElement

let isValid:boolean

formIndex.addEventListener("submit", (event:Event) => {
    isValid = validateEmail(inputEmail, event)
    if(isValid){
        //
    }else{
        event.preventDefault()
    }
})

//Function
const validateEmail = (inputEmail:HTMLInputElement, event:Event) => {
    let email:string = inputEmail.value
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    let fieldMailIsValid = emailPattern.test(email)

    if(!fieldMailIsValid){
        email = "";
        inputEmail.classList.add('is-invalid')

        let messageError:string = inputEmail.title
        alert(messageError)
        
        event.preventDefault();
    }else{
        inputEmail.classList.remove('is-invalid')
    }

    return fieldMailIsValid
}


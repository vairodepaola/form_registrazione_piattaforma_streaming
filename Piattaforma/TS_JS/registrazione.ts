import * as CryptoJS from 'crypto-js';
//Interface
interface IUtente{
    idUtente?:number;
    nome:string;
    cognome:string;
    sesso:number;
    nascita:Date;
    regione:string;
    provincia:string;
    via:string;
    cap:string;
    username:string;
    secretJWT:string;
    password:string;
    sale:string;
    token:string;
    monete:number;
}
//Classi
class CUtente implements IUtente{
    nome:string = ""
    cognome:string = ""
    sesso:number = 0
    nascita:Date = new Date('0000-00-00')
    regione:string = ""
    provincia:string = ""
    via:string = ""
    cap:string = ""
    username:string = ""
    secretJWT:string = ""
    password:string = ""
    sale:string = ""
    token:string = ""
    monete:number = 0

    constructor(
        nome:string,
        cognome:string,
        sesso:number,
        nascita:Date,
        regione:string,
        provincia:string,
        via:string,
        cap:string,
        username:string,
        password:string,
        ruolo?:string
    ){
        this.nome = nome
        console.log("nome " + this.nome)
        this.cognome = cognome
        console.log("cognome " + this.cognome)
        this.sesso = sesso
        console.log("sesso " + this.sesso)
        this.nascita = nascita
        console.log("nascita " + this.nascita)
        this.regione = regione
        console.log("regione " + this.regione)
        this.provincia = provincia
        console.log("provincia " + this.provincia)
        this.via = via
        console.log("via " + this.via)
        this.cap = cap
        console.log("cap " + this.cap)
        this.username = cifraStringa(username)
        console.log("username " + this.username)
        this.password = cifraStringa(password)
        console.log("password " + this.password)
        if(ruolo !== null){
            console.log("Utente inserito come amministratore")
        }else{
            console.log("Utente inserito come cliente")
        }
    }
    modificaUtente(
        nome?:string,
        cognome?:string,
        sesso?:number,
        nascita?:Date,
        regione?:string,
        provincia?:string,
        via?:string,
        cap?:string,
        username?:string,
        password?:string
    ):void{
        if(nome !== undefined){
            this.nome = nome
            console.log("Nuovo nome " + this.nome)
        }
        if(cognome !== undefined){
            this.cognome = cognome
            console.log("Nuovo cognome " + this.cognome)
        }
        if(sesso !== undefined){
            this.sesso = sesso
            console.log("Nuovo sesso " + this.sesso)
        }
        if(nascita !== undefined){
            this.nascita = nascita
            console.log("Nuova nascita " + this.nascita)
        }
        if(regione !== undefined){
            this.regione = regione
            console.log("Nuova regione " + this.regione)
        }
        if(provincia !== undefined){
            this.provincia = provincia
            console.log("Nuova provincia " + this.provincia)
        }
        if(via !== undefined){
            this.via = via
            console.log("Nuova via " + this.via)
        }
        if(cap !== undefined){
            this.cap = cap
            console.log("Nuovo cap " + this.cap)
        }
        if(username !== undefined){
            this.username = cifraStringa(username)
            console.log("Nuovo username " + this.username)
        }
        if(password !== undefined){
            this.password = cifraStringa(password)
            console.log("Nuova password " + this.password)
        }
    }
    aggiungiMonete(numeroMonete:number):void{
        this.monete += numeroMonete
        console.log("Monete aggiunte")
    }
    rimuoviMonete(numeroMonete:number):void{
        this.monete -= numeroMonete
        if(this.monete <= 0){
            this.monete += numeroMonete
            console.log("Operazione non riuscita")
        }
        console.log("Operazione riuscita")
    }
    leggiDato(dato:keyof CUtente):void{
        console.log(this[dato])
    }
}
//Funzioni
function cifraStringa(stringa:string):string{
    const hash = CryptoJS.SHA512(stringa);
    return hash.toString(CryptoJS.enc.Hex);
}
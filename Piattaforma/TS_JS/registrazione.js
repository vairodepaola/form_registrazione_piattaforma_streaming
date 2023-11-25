"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var CryptoJS = require("crypto-js");
//Classi
var CUtente = /** @class */ (function () {
    function CUtente(nome, cognome, sesso, nascita, regione, provincia, via, cap, username, password, ruolo) {
        this.nome = "";
        this.cognome = "";
        this.sesso = 0;
        this.nascita = new Date('0000-00-00');
        this.regione = "";
        this.provincia = "";
        this.via = "";
        this.cap = "";
        this.username = "";
        this.secretJWT = "";
        this.password = "";
        this.sale = "";
        this.token = "";
        this.monete = 0;
        this.nome = nome;
        console.log("nome " + this.nome);
        this.cognome = cognome;
        console.log("cognome " + this.cognome);
        this.sesso = sesso;
        console.log("sesso " + this.sesso);
        this.nascita = nascita;
        console.log("nascita " + this.nascita);
        this.regione = regione;
        console.log("regione " + this.regione);
        this.provincia = provincia;
        console.log("provincia " + this.provincia);
        this.via = via;
        console.log("via " + this.via);
        this.cap = cap;
        console.log("cap " + this.cap);
        this.username = cifraStringa(username);
        console.log("username " + this.username);
        this.password = cifraStringa(password);
        console.log("password " + this.password);
        if (ruolo !== null) {
            console.log("Utente inserito come amministratore");
        }
        else {
            console.log("Utente inserito come cliente");
        }
    }
    CUtente.prototype.modificaUtente = function (nome, cognome, sesso, nascita, regione, provincia, via, cap, username, password) {
        if (nome !== undefined) {
            this.nome = nome;
            console.log("Nuovo nome " + this.nome);
        }
        if (cognome !== undefined) {
            this.cognome = cognome;
            console.log("Nuovo cognome " + this.cognome);
        }
        if (sesso !== undefined) {
            this.sesso = sesso;
            console.log("Nuovo sesso " + this.sesso);
        }
        if (nascita !== undefined) {
            this.nascita = nascita;
            console.log("Nuova nascita " + this.nascita);
        }
        if (regione !== undefined) {
            this.regione = regione;
            console.log("Nuova regione " + this.regione);
        }
        if (provincia !== undefined) {
            this.provincia = provincia;
            console.log("Nuova provincia " + this.provincia);
        }
        if (via !== undefined) {
            this.via = via;
            console.log("Nuova via " + this.via);
        }
        if (cap !== undefined) {
            this.cap = cap;
            console.log("Nuovo cap " + this.cap);
        }
        if (username !== undefined) {
            this.username = cifraStringa(username);
            console.log("Nuovo username " + this.username);
        }
        if (password !== undefined) {
            this.password = cifraStringa(password);
            console.log("Nuova password " + this.password);
        }
    };
    CUtente.prototype.aggiungiMonete = function (numeroMonete) {
        this.monete += numeroMonete;
        console.log("Monete aggiunte");
    };
    CUtente.prototype.rimuoviMonete = function (numeroMonete) {
        this.monete -= numeroMonete;
        if (this.monete <= 0) {
            this.monete += numeroMonete;
            console.log("Operazione non riuscita");
        }
        console.log("Operazione riuscita");
    };
    CUtente.prototype.leggiDato = function (dato) {
        console.log(this[dato]);
    };
    return CUtente;
}());
//Funzioni
function cifraStringa(stringa) {
    var hash = CryptoJS.SHA512(stringa);
    return hash.toString(CryptoJS.enc.Hex);
}

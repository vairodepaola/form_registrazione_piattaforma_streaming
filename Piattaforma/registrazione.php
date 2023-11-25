<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['InputPerPassareEmail'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/style_registrazione.min.css" rel="stylesheet">
    
    <title>Elenco</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</head>
<body class="bg-black">
    <header class="bg-dark">
        <nav class="navbar navbar-expand-lg bg-body-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" title="Mio Logo"><img width="130" src="imm/image_1.png" id="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
                    <span class="navbar-toggler-icon" data-bs-target="#offcanvasNavbar"></span>
                </button>
                <div class="offcanvas offcanvas-start" data-bs-hideresize="true" id="navbarOffcanvas">
                    <div class="offcanvas-header bg-danger">
                        <h5 class="offcanvas-title text-white" id="offcanvasLabel">Menù</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body bg-dark">
                        <ul class="navbar-nav justify-content-end me-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <span class="p-3"></span>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-danger align-self-end border-0" data-bs-dismiss="offcanvas">Accedi</button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="col-12 d-flex flex-row justify-content-around align-items-center">
        <form id="formId" class="row col-12 d-flex flex-row justify-content-around text-white" action = "elenco.php" method = "POST" novalidate>
            <div class="col-11 col-md-5">
                <div class="mt-4">
                    <label for="staticEmail" class="col-form-label p-0 mb-2">Email</label>
                    <div class="">
                        <input type="text" readonly class="form-control-plaintext text-white-50" id="staticEmail" value="<?php echo $email ?>">
                    </div>
                </div>
                <div class="mt-3">
                    <label for="InputName" class="form-label">Nome</label>
                    <input type="text" class="form-control form-control-sm" id="InputName" title="Inserisci un Nome valido senza numeri o caratteri speciali." minlength="3" maxlength="30" pattern="[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]{3,30}" required>
                </div>
                <div class="mt-3">
                    <label for="InputSurname" class="form-label">Cognome</label>
                    <input type="text" class="form-control form-control-sm" id="InputSurname" title="Inserisci un Cognome valido senza numeri o caratteri speciali." minlength="3" maxlength="30" pattern="[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\s]{3,30}" required>
                </div>
                <div class="mt-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Maschio" value="0">
                        <label class="form-check-label" for="Maschio">Maschio</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="Femmina" value="1">
                        <label class="form-check-label" for="Femmina">Femmina</label>
                    </div>
                </div>
                <div class="mt-4">
                    <label for="dataInput" class="form-label">Data di nascita</label>
                    <input type="date" class="form-control form-control-sm" id="dataInput" title="Inserisci la Data di nascita." name="dataInput" required>
                </div>
            </div>
            <div class="col-11 col-md-5">
                <div class="mt-4">
                    <label for="InputRegione" class="form-label">Regione di residenza</label>
                    <input type="text" class="form-control form-control-sm" id="InputRegione" title="Inserisci una Regione di residenza valida senza numeri o caratteri speciali." minlength="3" maxlength="30" pattern="[a-zA-Zàáèéìíîòóùú\s]{3,30}" required>
                </div>
                <div class="mt-3">
                    <label for="InputProvincia" class="form-label">Provincia di residenza</label>
                    <input type="text" class="form-control form-control-sm" id="InputProvincia" title="Inserisci una Provincia di residenza valida senza numeri o caratteri speciali." minlength="3" maxlength="30" pattern="[a-zA-Zàáèéìíòóùú\s]{3,30}" required>
                </div>
                <div class="mt-3">
                    <label for="InputVia" class="form-label">Via di residenza</label>
                    <input type="text" class="form-control form-control-sm" id="InputVia" title="Inserisci una Via di residenza valida." minlength="3" maxlength="40" pattern="[a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ0-9-\/\s]{3,40}" required>
                </div>
                <div class="mt-3">
                    <label for="InputCAP" class="form-label">CAP</label>
                    <input type="text" class="form-control form-control-sm" id="InputCAP" title="Inserisci un CAP valido di 5 numeri." minlength="5" maxlength="5" pattern="[0-9]{5}" required>
                </div>
                <div class="mt-5">
                    <label for="Password1" class="form-label">Scegli una password</label>
                    <input type="password" class="form-control form-control-sm" title="Inserisci una password valida." id="Password1" aria-describedby="passwordHelpBlock">
                    <div>
                        <p id="passwordHelpBlock" class="form-text text-white-50">
                            La password deve contenere tra gli 8 e i 20 caratteri con almeno una maiuscola, una minuscola, un carattere speciale ed un numero.
                        </p>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="Password2" class="form-label">Ripeti la password</label>
                    <input type="password" class="form-control form-control-sm" title="La Password da ripetere deve essere uguale a quella scelta." id="Password2">
                </div>
                <div class="bottoni">
                    <button id="submitButton" type="submit" class="btn btn-danger mt-3">Registrati</button>
                    <button type="reset" class="btn btn-secondary mt-3">Cancella</button>
                </div>
            </div>
            <script src="TS_JS/controlli.js"></script>
        </form>
    </main>
    <footer class="row bg-dark w-100 m-0 mt-5 p-0 pt-3 pb-3">
        <div class="container-fluid d-flex flex-row justify-content-center">
            <table class="text-white-50 align-self-center p-0">
                <tr>
                    <td class="px-5">F.A.Q</td>
                    <td class="px-5">F.A.Q</td>
                    <td class="px-5">F.A.Q</td>
                </tr>
                <tr>
                    <td class="px-5">Privacy</td>
                    <td class="px-5">Link 1</td>
                    <td class="px-5">Link 2</td>
                </tr>
                <tr>
                    <td class="px-5">Informativa sui cookies</td>
                    <td class="px-5">Link 1</td>
                    <td class="px-5">Link 2</td>
                </tr>
                <tr>
                    <td class="px-5">Crediti</td>
                </tr>
            </table>
        </div>
        <div class="d-flex flex-row align-items-center justify-content-center align-self-center">
            <p class="text-white-50 m-0">Copyright & copy 2021 -</p>
            <img class="ms-2" src="imm/image_1.png" title="logo" style="width: 40px; height: 20px;">
        </div>
    </footer>
</body>
</html>
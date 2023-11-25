<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="css/style_index.min.css" rel="stylesheet">
    
    <title>Home</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <style>
        body{
            background-image: url(imm/sfondo.png);
        }
    </style>

</head>
<body>
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
                                <a class="nav-link active" href="index.php">Home</a>
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
    <main class="col-10 col-md-7 position-relative start-50 translate-middle-x p-3 border border-top-0 border-bottom-0 mt-4">
        <div>
            <div class="bg-dark p-4 bg-opacity-75 pb-5">
                <h1 class="text-white text-center mt-3">Un mondo di intrattenimento con un semplice click</h1>
                <div class="d-flex flex-row align-items-center justify-content-center align-self-center">
                    <p class="text-white m-0">Inserisci qui la tua e-mail ed iscriviti a</p>
                    <img class="ms-2" src="imm/image_1.png" title="logo" style="width: 80px; height: 40px;">
                </div>
                <form id="FormPerPassareEmail" name="FormPerPassareEmail" action="registrazione.php" class="d-flex flex-row g-3 justify-content-center align-items-center pt-2 mt-1 mb-3 border-0" method="POST">
                    <input id="InputPerPassareEmail" name="InputPerPassareEmail" class="form-control form-control-sm bg-black border-black rounded text-white" type="email" placeholder="E-Mail" title="Inserisci una E-mail valida.">
                    <button id="ButtonPerPassareEmail" type="submit" class="btn btn-sm btn-danger border-0 px-4 ms-3">Registrati</button>
                </form>
                <script src="TS_JS/passaggio_email.js"></script>
            </div>
        </div>
    </main>
    <footer class="row bg-dark w-100 m-0 mt-3 p-0 pt-3 pb-3">
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
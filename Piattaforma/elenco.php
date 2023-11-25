<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Elenco</title>
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    
    <style>
        body{
            height: 100%;
        }
        ul.navbar-nav{
            height: fit-content;
        }
        li.nav-item{
            height: fit-content !important;
        }
        li.nav-item.dropdown{
            height: fit-content !important;
        }
        input::placeholder{
            color: rgb(155, 155, 155) !important;
        }
        .text-danger{
            color: red;
        }
        div.container-fluid div div.col-xxl-2{
            width: 230px !important;
            height: 150px !important;
        }
        div.container-fluid div div.col-xxl-2 img{
            height: 100% !important;
        }
        footer{
            height: fit-content;
        }
        footer p{
            font-size: 12px;
        }
        table{
            font-size: 12px;
        }
        @media (max-width: 1100px){
            div.container-fluid div div.col-xxl-2{
                width: 220px !important;
                height: 150px !important;
            }
        }
        @media (max-width: 768px){
            #search{
                padding: 5px 0;
                padding-top: 15px;
            }
            main.col-10.col-md-7.position-relative.start-50.translate-middle-x.p-3.border.border-top-0.border-bottom-0.mt-4{
                margin-top: 10px !important;
            }
            div.flex-row{
                flex-direction: column !important;
            }
            div.titoli{
                flex-direction: row !important;
                padding-left: 5% !important;
                padding-right: 5% !important;
            }
            p.text-white.m-0{
                text-align: center;
                margin: 10px 0 !important;
            }
            img.ms-2{
                margin: 0 !important;
            }
            div.container-fluid div div.col-xxl-2{
                width: 150px !important;
                height: 100px !important;
            }
            footer{
                height: fit-content;
                position: relative;
                bottom: 0%;
            }
            td.px-5{
                padding: 0 10px !important;
            }
        }
        @media (max-width: 370px){
            div.container-fluid div div.col-xxl-2{
                width: 120px !important;
                height: 80px !important;
            }
        }
    </style>

</head>
<body class="bg-black">
    <header class="bg-dark">
        <nav class="navbar navbar-expand-lg bg-body-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="elenco.php" title="Mio Logo"><img width="130" src="imm/image_1.png" id="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas">
                    <span class="navbar-toggler-icon" data-bs-target="#offcanvasNavbar"></span>
                </button>
                <div class="offcanvas offcanvas-start" data-bs-hideresize="true" id="navbarOffcanvas">
                    <div class="offcanvas-header bg-danger">
                        <h5 class="offcanvas-title text-white" id="offcanvasLabel">Menù</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                    </div>
                    <div class="offcanvas-body bg-dark">
                        <ul class="navbar-nav align-self-center justify-content-end me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="elenco.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" title="Tipologia">Tipologia</a>
                                        <ul class="dropdown-menu dropdown-menu-dark">
                                            <li>
                                                <a class="dropdown-item" href="#" title="Vai alla tipologia films">Film</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#" title="Vai alla tipologia series">Serie TV</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <form id="search" class="d-flex" role="search">
                            <input class="form-control form-control-sm align-self-center bg-black m-0 border-0" type="search" placeholder="Search" style="height: 30px;">
                            <button class="btn border-0 py-0 ps-2 pe-4" type="submit">
                                <img src="imm/search_icon.png" title="search" style="width: 15px;">
                            </button>
                        </form>
                        <ul class="align-self-center navbar-nav">
                            <li class="nav-item dropdown">
                                <div class="input-group">
                                    <label class="input-group-text bg-dark px-0 border-0" for="#dropdown">
                                        <img src="imm/user_icon.png" title="user" style="width: 20px;">
                                    </label>
                                    <a class="nav-link dropdown-toggle p-2" id="dropdown" href="#" role="button" data-bs-toggle="dropdown" title="Utente Admin">Utente</a>
                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark">
                                        <li>
                                            <a class="dropdown-item" href="#" title="Vai alla pagina dei dati personali">Dati personali</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#" title="Vai alla pagina per modificare la password">Modifica password</a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li>
                                            <a class="dropdown-item" href="#" title="Vai alla pagina dei crediti">Crediti</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="index.php" title="Vai alla pagina di registrazione">Esci</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main class="col-12 d-flex flex-column align-items-center">
        <div id="carousel_1" class="carousel slide col-11 align-self-center mt-0 mb-2" data-bs-ride="carousel" data-bs-interval="2500">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carousel_1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carousel_1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carousel_1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carousel_1" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="imm/image_1.png" class="d-block w-100" alt="Immagine 1">
                </div>
                <div class="carousel-item">
                    <img src="imm/image_2.png" class="d-block w-100" alt="Immagine 2">
                </div>
                <div class="carousel-item">
                    <img src="imm/image_3.png" class="d-block w-100"  alt="Immagine 3">
                </div>
                <div class="carousel-item">
                    <img src="imm/image_2.png" class="d-block w-100" alt="Immagine 4">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carousel_1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carousel_1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container-fluid">
            <div class="titoli d-flex flex-row p-xxl-5 pb-xxl-0 ps-sm-4 p-4 pb-0 ms-sm-1 ms-0">
                <h5 class="text-danger mb-3">Film</h5>
                <p class="text-white ps-1 mb-3">/ Novità</p>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-5 col-xxl-2 col-md-4 p-0 mx-xxl-3 mx-lg-2 mx-md-2 mx-2 ms-0">
                    <img src="imm/image_1.png" alt="Image 1" class="img-fluid">
                </div>
                <div class="col-5 col-xxl-2 col-md-4 p-0 mx-xxl-3 mx-lg-2 mx-md-2 mx-2">
                    <img src="imm/image_2.png" alt="Image 2" class="img-fluid">
                </div>
                <div class="col-xxl-2 col-md-4 d-xl-block d-md-block d-none p-0 mx-xxl-3 mx-lg-2 mx-md-2 mx-1">
                    <img src="imm/image_3.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-xxl-2 col-md-4 d-xl-block d-md-block d-none p-0 mx-xxl-3 mx-lg-2 mx-md-2 mx-1">
                    <img src="imm/image_1.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-xxl-2 d-xl-block d-none p-0 mx-xxl-3 mx-1 me-0">
                    <img src="imm/image_2.png" alt="Image 5" class="img-fluid">
                </div>
            </div>
        </div>
        <div class="container-fluid mb-3">
            <div class="titoli d-flex flex-row align-items-end p-xxl-5 pb-xxl-0 ps-sm-4 p-4 pb-0 ms-sm-1 ms-0">
                <h5 class="text-danger mb-3">Serie TV </h5>
                <p class="text-white ps-1 mb-3"> / Novità</p>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-5 col-xxl-2 col-md-4 p-0 mx-xxl-3 mx-lg-2 mx-md-2 mx-2 ms-0">
                    <img src="imm/image_1.png" alt="Image 1" class="img-fluid">
                </div>
                <div class="col-5 col-xxl-2 col-md-4 p-0 mx-xxl-3 mx-lg-2 mx-md-2 mx-2">
                    <img src="imm/image_2.png" alt="Image 2" class="img-fluid">
                </div>
                <div class="col-xxl-2 col-md-4 d-xl-block d-md-block d-none p-0 mx-xxl-3 mx-lg-2 mx-md-2 mx-1">
                    <img src="imm/image_3.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-xxl-2 col-md-4 d-xl-block d-md-block d-none p-0 mx-xxl-3 mx-lg-2 mx-md-2 mx-1">
                    <img src="imm/image_1.png" alt="Image 3" class="img-fluid">
                </div>
                <div class="col-xxl-2 d-xl-block d-none p-0 mx-xxl-3 mx-1 me-0">
                    <img src="imm/image_2.png" alt="Image 5" class="img-fluid">
                </div>
            </div>
        </div>
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
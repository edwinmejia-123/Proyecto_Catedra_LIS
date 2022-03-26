<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/album.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo_index.css">
    <link rel="stylesheet" href="css/style-slider.css">
    <link rel="stylesheet" href="css/fonts.css">
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-icon.js"></script>
    <title>RestaurantTravel | Envio de token</title>
    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>
    <link href="css/album.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo_index.css" />
    <link rel="stylesheet" href="css/style-slider.css" />
    <link rel="stylesheet" href="css/fonts.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- LOGO -->
        <!-- Se muestra solo en pantallas pequeÃ±as a la izquierda del menu -->
        <div class="d-block d-sm-none d-sm-block d-md-block d-lg-none">
            <img src="img/clothing-store-logo5.png" class="d-inline-block align-top" alt="logo" width="75px" />
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" id="nav-principal">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Lista_restaurantes.html"><i class="fas fa-hard-hat"></i> Lista
                        restaurantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="favoritos.html"><i class="far fa-heart"></i> Favoritos</a>
                </li>
            </ul>
            <!-- LOGO -->
            <!-- Se muestra en pantallas grandes al centro del menu -->
            <div class="d-none d-lg-block">
                <a class="navbar-brand" href="index.html">
                    <img src="img/clothing-store-logo5.png" class="d-inline-block align-top" alt="logo" width="75px" />
                </a>
            </div>
            <ul class="navbar-nav ml-auto" id="nav-principal">
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.html"><i class="fas fa-book"></i> Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.html"><i class="fas fa-envelope"></i> Contacto</a>
                </li>
                <?php
                if ($_SESSION['inicio']==true) {
                ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                        <?php echo $_SESSION['usuario'];?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="login.php?c=destroy_session">cerrar sesion</a>
                    </div>
                </li>
                <?php
                }else{
                    ?>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="login.php?c=login"><i class="fas  fa-user-circle"></i>
                        login
                    </a>
                </li>
                <?php
                }?>
            </ul>

            <!-- BUSCADOR -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" />
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <hr>
    <!-- Formulario de registro de información general -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Ingreso de código</h3>
                        <form class="mt-4" action="" method="post">
                            <div class="form-group row my-2">
                                <div class="col-md-2"></div>

                                <div class="col-md-8">
                                    <label class="sr-only" for="token">Ingrese el código que se le envió al
                                        correo</label>
                                    <div class="input-group mb-2 mt-4">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="token" name="token"
                                            placeholder="Ingrese el código" />
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>


                            <div class="form-group row my-4">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Continuar
                                    </button>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
    <!-- Fin formulario -->


</body>

</html>
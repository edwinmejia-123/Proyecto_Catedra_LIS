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
    <title>RestaurantTravel | Nueva Contraseña</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="login.html"><i class="fas fa-user-circle"></i> Login</a>
                </li>
            </ul>

            <!-- BUSCADOR -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" />
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>
    <hr>

    <!-- Formulario de recuperación usuario y contraseña -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3">
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Escriba su nueva contraseña</h3>
                        <form action="" method="post" class="py-4">
                            <div class="form-group">
                                <label for="emailUsuario">Nueva contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">
                                            <li class="fa fab-solid fa-asterisk"></li>
                                        </span>
                                    </div>
                                    <input type="password" name="nuevaContra" id="nuevaContra" class="form-control"
                                        placeholder="Contraseña" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="emailUsuario">Re-Nueva contraseña</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">
                                            <li class="fa fab-solid fa-asterisk"></li>
                                        </span>
                                    </div>
                                    <input type="password" name="reNuevaContra" id="reNuevaContra" class="form-control"
                                        placeholder="Repetir contraseña" required>
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-center btn-lg">
                                <input type="submit" name="btnContinuar" id="btnContinuar"
                                    class="btn btn-primary btn-lg" value="Continuar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
            </div>
        </div>
    </div>
    <!-- Fin formulario -->

    <!-- FOOTER -->
    <!-- Page Content -->
    <section class="py-5 footer">
        <!-- <hr> -->
        <div class="container">
            <!-- Footer Text -->
            <div class="container-fluid text-center text-md-left">
                <!-- Grid row -->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-6 mt-md-0 mt-3">
                        <!-- Content -->
                        <img src="img/clothing-store-logo5.png" alt="logo" width="120px" />
                    </div>
                    <!-- Grid column -->
                    <hr class="clearfix w-100 d-md-none pb-3" />
                    <!-- Grid column -->
                    <div class="col-md-6 mb-md-0 mb-3">
                        <!-- Content -->
                        <nav class="navbar navbar-expand-lg justify-content-center" id="footer-nav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="productos.html">Lista restaurantes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="nosotros.html">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto.html">Contacto</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contacto.html">FAQ</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
            <!-- Footer Text -->
            <hr class="clearfix w-100 d-md-none pb-3" />
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">
                © 2022 Copyright | <span class="footer-text">Clothing Store</span>
            </div>
        </div>
    </section>


</body>

</html>
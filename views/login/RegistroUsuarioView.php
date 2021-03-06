<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/imagen.css" />
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-icon.js"></script>
    <title>RestaurantTravel | Crear Cuenta</title>
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
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- LOGO -->
        <!-- Se muestra solo en pantallas pequeñas a la izquierda del menu -->
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
                    <a class="nav-link" href="productos.html"><i class="fas fa-hard-hat"></i> Lista restaurantes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="carrito-detalle.html"><i class="far fa-heart"></i> Favoritos</a>
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
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
                    Buscar
                </button>
            </form>
        </div>
    </nav>
    <!-- FIN MENU -->
    <hr />
    <!-- Contenido -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center my-5"><b>Crear Cuenta</b></h5>
                        <form action="registro.php?c=Registrar" method="post">
                            <div class="form-group row my-2">
                                <div class="col-md-2"></div>

                                <div class="col-md-8">
                                    <label class="sr-only" for="user">Username</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-user-alt"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="user" name="user"
                                            placeholder="Username" />
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <!-- Contraseña -->
                            <div class="form-group row my-2">
                                <div class="col-md-2"></div>

                                <div class="col-md-8">
                                    <label class="sr-only" for="contra">Contraseña</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" id="contra" name="contra"
                                            placeholder="Password" />
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <!-- Fin contraseña -->
                            <div class="form-group row my-2">
                                <div class="col-md-2"></div>

                                <div class="col-md-8">
                                    <label class="sr-only" for="re-contra">Re-Contraseña</label>
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </div>
                                        </div>
                                        <input type="password" class="form-control" id="re-contra" name="re-contra"
                                            placeholder="Re-Password" />
                                    </div>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                            <div class="form-group row my-4">
                                <div class="col-md-2"></div>
                                <div class="col-md-8 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                                        Registrar
                                    </button>
                                </div>
                                <div class="col-md-2"></div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-5">
                                <hr />
                            </div>
                            <div class="col-md-2 text-center">Ó</div>
                            <div class="col-md-5">
                                <hr />
                            </div>
                        </div>
                        <br />
                        <div class="col-md-12 text-center">
                            <button type="button" class="btn btn-outline-dark btn-lg">
                                <div class="row text-center">
                                    <div class="col-md-2">
                                        <i class="fab fa-google col-md-2"></i>
                                    </div>

                                    <div class="col-md-10">
                                        <small>Continuar con Google</small>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <br /><br />
                        <div class="col-md-12 text-center">
                            <small>¿Ya tiene una cuenta? <a href="login.php?c=login">inicie sesión</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
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
                <div class="footer-copyright text-center py-3">
                    <!-- Inicio Licencia -->
                    <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">
                        <img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" />
                    </a>
                    <br />
                    <br>
                    <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">RestaurantTravel</span> por <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Edwin Mejía | Víctor Rodríguez | David Martínez | Willian Grande | Rodrigo Rivas</span>
                    <br> se distribuye bajo una <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Licencia Creative Commons Atribución-NoComercial-SinDerivadas 4.0 Internacional</a>
                    <!-- Fin Licencia -->
                </div>
            </div>
        </div>
    </section>
</body>

</html>
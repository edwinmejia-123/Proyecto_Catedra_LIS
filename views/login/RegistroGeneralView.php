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
    <title>RestaurantTravel | Registro General</title>
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
                    <a class="nav-link" href="login.php?c=login"><i class="fas fa-user-circle"></i>
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

    <!-- FIN MENU -->
    <hr>
    <!-- Formulario de registro de información general -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Información General</h3>
                        <form action="registro.php?c=Registro_General" method="post" enctype="multipart/form-data"
                            class="py-4">
                            <div class="form-row form-group">
                                <div class="col">
                                    <label for="Nombres">Nombres</label>
                                    <input type="text" name="nombresUsuario" id="nombresUsuario" class="form-control"
                                        placeholder="Nombres" required>
                                </div>
                                <div class="col">
                                    <label for="Apellidos">Apellidos</label>
                                    <input type="text" name="apellidosUsuario" id="apellidosUsuario"
                                        class="form-control" placeholder="Apellidos" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    </div>
                                    <input type="text" name="emailUsuario" id="emailUsuario" class="form-control"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="Telefono">Telefono:</label>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="foto">Foto:</label>
                                    </div>

                                    <!-- <div class="col-md-3 mb-3">
                                        <select class="custom-select" name="selectorExtension" id="selectorExtension"
                                            required>
                                            <option selected value="">+503</option>
                                            <option value="">+504</option>
                                            <option value="">+506</option>
                                            <option>...</option>
                                        </select>
                                    </div> -->

                                    <div class="col-md-6 mb-6">
                                        <input type="text" name="telefonoUsuario" id="telefonoUsuario"
                                            class="form-control col-md-8" placeholder="Telefono" required>
                                    </div>

                                    <div class="col-md-6 mb-6">
                                        <div class="form-group">

                                            <input type="file" class="form-control-file" id="foto" name='foto'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-center">
                                <input type="submit" name="btnContinuar" id="btnContinuar"
                                    class="btn btn-primary btn-lg" value="Continuar">
                            </div>
                        </form>
                        <p class="justify-content-center text-center">
                            Se le enviará un correo de confirmación al correo ingresado
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

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
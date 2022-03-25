<?php
require 'conexion2.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="css/album.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilo_index.css" />
    <link rel="stylesheet" href="css/style-slider.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/font-icon.js"></script>
    <title>Clothing Store | Contacto</title>
  </head>
  <body>
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!-- LOGO -->
      <!-- Se muestra solo en pantallas pequeñas a la izquierda del menu -->
      <div class="d-block d-sm-none d-sm-block d-md-block d-lg-none">
        <img
          src="img/clothing-store-logo5.png"
          class="d-inline-block align-top"
          alt="logo"
          width="75px"
        />
      </div>

      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" id="nav-principal">
          <li class="nav-item active">
            <a class="nav-link" href="index.html"
              ><i class="fas fa-home"></i> Inicio</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Lista_restaurantes.html"
              ><i class="fas fa-hard-hat"></i> Lista restaurantes</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="carrito-detalle.html"
              ><i class="far fa-heart"></i> Favoritos</a
            >
          </li>
        </ul>
        <!-- LOGO -->
        <!-- Se muestra en pantallas grandes al centro del menu -->
        <div class="d-none d-lg-block">
          <a class="navbar-brand" href="index.html">
            <img
              src="img/clothing-store-logo5.png"
              class="d-inline-block align-top"
              alt="logo"
              width="75px"
            />
          </a>
        </div>
        <ul class="navbar-nav ml-auto" id="nav-principal">
          <li class="nav-item">
            <a class="nav-link" href="nosotros.html"
              ><i class="fas fa-book"></i> Nosotros</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.html"
              ><i class="fas fa-envelope"></i> Contacto</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html"
              ><i class="fas fa-user-circle"></i> Login</a
            >
          </li>
        </ul>

        <!-- BUSCADOR -->
        <form class="form-inline my-2 my-lg-0">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Buscar"
            aria-label="Search"
          />
          <button class="btn btn-outline-info my-2 my-sm-0" type="submit">
            Buscar
          </button>
        </form>
      </div>
    </nav>
    <!-- FIN MENU -->
    <div class="img-carta">
      <div class="d-flex justify-content-center">
        <h2 class="titulo-contact">Mis favoritos</h2>
      </div>
    </div>
    <!-- MODAL -->
    <div
      class="modal fade bd-example-modal-xl"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle"></h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row row-cols-2">
              <div class="col">
                <div id="modal-img" class="text-center"></div>
              </div>
              <div class="col">
                <b><div class="h5" id="titulo"></div></b>
                <b><div class="h6" id="precio"></div></b>

                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Deleniti amet debitis eos ipsam optio? Modi sit distinctio
                  consequatur perferendis libero vitae mollitia cumque iste
                  dolores, minima tempora at perspiciatis ea.
                </p>
                <br />
                <div class="container">
                  <form>
                    <div class="form-group row">
                      <label
                        for="talla"
                        class="col-sm-2 col-form-label col-form-label"
                        >Talla</label
                      >

                      <div class="col-sm-10">
                        <select class="form-control form-control" id="talla">
                          <option>Seleccione talla</option>
                          <option>Size S</option>
                          <option>Size M</option>
                          <option>Size L</option>
                          <option>Size XL</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label
                        for="color"
                        class="col-sm-2 col-form-label col-form-label"
                        >Color</label
                      >

                      <div class="col-sm-10">
                        <select class="form-control form-control" id="color">
                          <option>Seleccione color</option>
                          <option>Red</option>
                          <option>Blue</option>
                          <option>White</option>
                          <option>Grey</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="row align-items-center">
                        <div class="col">
                          <label
                            for="Cantidad"
                            class="col-sm-2 col-form-label col-form-label"
                            >Cantidad</label
                          >
                        </div>
                        <div class="col">
                          <input
                            type="number"
                            class="form-control"
                            id="Cantidad"
                            min="1"
                          />
                        </div>
                        <div class="col">
                          <button type="button" class="btn btn-primary">
                            Agregar al carro
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- FIN MODAL -->
    <!-- Contenido de la pagina -->
    <div class="container py-5">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb separador">
          <li class="breadcrumb-item"><a href="index.html">Inicio</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Favoritos
          </li>
        </ol>
      </nav>
      <br /><br />
      <!-- INICIO ROW -->
      <div class="row">
        <div class="col-md-1"></div>
        <!-- INICIO COLUMNA DE 10 -->
        <div class="col-md-10">
          <!-- INICIO DE CARD -->
                    <?php  
                $query = "SELECT t2.nombre_restaurante,t2.descripcion,t3.foto, t1.id_restaurante, round(AVG(puntaje),2) AS puntos from comentarios t1 INNER JOIN restaurante t2 ON t1.id_restaurante = t2.id_restaurante INNER JOIN foto_restaurante t3 ON t1.id_restaurante = t3.id_restaurante GROUP BY id_restaurante ORDER BY AVG(puntaje) DESC LIMIT 5";  
                $result = mysqli_query($conexion, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
          <div class="card mb-3" style="max-width: 1500px">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img
                  src="<?php echo $row["foto"] ?>"
                  class="card-img"
                  alt="..."
                  height="210px"
                />
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-10">
                      <h5 class="card-title mb-0"><?php echo $row["nombre_restaurante"]; ?></h5>
                      <div class="text-muted"><small><?php echo $row["puntos"]; ?></small></div>
                    </div>
                    </div>
                  </div>
                  <br />
                  <p class="card-text"><?php echo $row["descripcion"]; ?>
                  </p>
                  <div class="row">
                      <div class="col-md-10"></div>
                      <div class="col-md-2">
                        <button
                        type="button"
                        class="btn btn-outline-warning btn-sm enlace"
                        value="1"
                        data-toggle="modal"
                        data-target=".bd-example-modal-xl"
                      >
                        View
                      </button>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN DE CARD -->

          <?php  
                     }  
                }  
            ?>
        </div>
        <!-- FIN DE COLUMNA DE 10 -->
        <div class="col-md-1"></div>
      </div>
      <!-- FIN ROW -->
    </div>
    <!-- Fin del contenido de la pagina -->
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
              <img
                src="img/clothing-store-logo5.png"
                alt="logo"
                width="120px"
              />
            </div>
            <!-- Grid column -->
            <hr class="clearfix w-100 d-md-none pb-3" />
            <!-- Grid column -->
            <div class="col-md-6 mb-md-0 mb-3">
              <!-- Content -->
              <nav
                class="navbar navbar-expand-lg justify-content-center"
                id="footer-nav"
              >
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.html">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="productos.html"
                      >Lista restaurantes</a
                    >
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
          © 2020 Copyright | <span class="footer-text">Clothing Store</span>
        </div>
      </div>
    </section>
    <!-- Validacion de formulario -->
    <script src="js/validationform.js"></script>
  </body>
</html>

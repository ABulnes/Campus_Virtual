<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Campus Virtual</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome-all.css">
</head>

<body>

 
    <?php
       include("header.php");
     ?>

  <main role="main" style="margin-bottom: 3rem;">
    <!--Panel del curso-->
    <div class="container mt-4">
      <div class="row">
        <!--Seccion de navegacion-->
        <div class="col-md-2 contenedor ">
          <div class="row">
            <div class="col-12 item-center mb-4">
              <div class="profile-pic">
                <img class="img-fluid item-center" src="img/usuario.png">
              </div>
            </div>
            <div class="col-12 mt-3 bar-cur">
              <a class="d-block cur-link " href="#">
                <i class="fas fa-pencil-alt fa-lg mr-2"></i>Materiales
              </a>
            </div>
            <div class="col-12 mt-3  bar-cur">
              <a class="d-block cur-link " href="#s">
                <i class="fas fa-clock fa-lg mr-2"></i>Actualizaciones
              </a>
            </div>
            <div class="col-12 mt-3  bar-cur">
              <a class="d-block cur-link " href="#">
                <i class="fa fa-chart-bar fa-lg mr-2"></i>Calificaciones
              </a>
            </div>
            <div class="col-12 mt-3 bar-cur">
              <a class="d-block cur-link " href="#">
                <i class="fa fa-users fa-lg mr-2"></i> Miembros
              </a>
            </div>
          </div>
        </div>
        <!--Seccion de Recursos-->
        <div class="col-md-7">
          <div class="contenedor">
            <div class="row">
              <div class="col-12">
                <h5 id="txt-ncurso"> Nombre del curso </h5>
                <h6 id="txt-ninstituto">Nombre del instituto </h6>
                <hr class="hr-encabezado">
              </div>
              <div class="col-12 p-2">
                <div class="row">
                  <div class="col-3 item-center" id="div-icono">
                    <i class="fa fa-folder fa-2x"></i>
                  </div>
                  <div class="col-9" id="div-info-publicacion">
                    Descripcion del recurso
                  </div>
                </div>
                <hr>
              </div>
              <div class="col-12 p-2">
                <div class="row">
                  <div class="col-3 item-center" id="div-icono">
                    <i class="fa fa-file-word fa-2x"></i>
                  </div>
                  <div class="col-9" id="div-info-publicacion">
                    Descripcion del recurso
                  </div>
                </div>
                <hr>
              </div>
              <div class="col-12 p-2">
                <div class="row">
                  <div class="col-3 item-center" id="div-icono">
                    <i class="fa fa-file fa-2x"></i>
                  </div>
                  <div class="col-9" id="div-info-publicacion">
                    Descripcion del recurso
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <h5 class="titulo-home">Eventos Proximos</h5>
          <div class="contenedor" id="div-eventos">
            <div class="row">
              <div class="col-md-2">
                <i class="fas fa-file-alt fa-2x text-center"></i>
              </div>
              <div class="col-md-10">
                <p class="mb-0 font-weight-bold">Tarea o Examen</p>
                <p class="mb-0 small">Fecha</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-2">
                <i class="fas fa-file-pdf fa-2x text-center"></i>
              </div>
              <div class="col-md-10">
                <p class="mb-0 font-weight-bold">Tarea o Examen</p>
                <p class="mb-0 small">Fecha</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-2">
                <i class="fas fa-comment fa-2x text-center"></i>
              </div>
              <div class="col-md-10">
                <p class="mb-0 font-weight-bold">Tarea o Examen</p>
                <p class="mb-0 small">Fecha</p>
              </div>
            </div>

          </div>

        </div>

      </div>



    </div>

  </main>

  <footer class=" navbar navbar-expand footer text-white fixed-bottom">
    <p>&copy; BD 2018</p>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
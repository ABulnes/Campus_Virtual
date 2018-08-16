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

  <!--Barra de Navegacion-->
  
  <?php
    include("header.php");
  ?>

  <main role="main" style="margin-bottom: 3rem;">

    <div class="container mt-4 mb-4">


      <h3 class="titulo-home">Cursos</h3>
      <div class="row">
        <div class="col-md-8 contenedor" >
          <div class="row mb-2 mt-2" id="div-cursos">
            <div class="col-md-6 mt-2 mb-2 item-center">
              <a class="d-block cur-link " href="#">
                <div class="card p-2" style="width: 18rem;">
                  <img src="img/curso-icon.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center" id="txt-nombre_curso">Nombre del curso</h5>
                    <p class="card-text text-center" id="txt-nombre_instituto">Institucion</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-2 mb-2 item-center">
              <a class="d-block cur-link" href="#">
                <div class="card  p-2" style="width: 18rem;">
                  <img src="img/curso-icon.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center" id="txt-nombre_curso">Nombre del curso</h5>
                    <p class="card-text text-center" id="txt-nombre_instituto">Institucion</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-2 mb-2 item-center">
              <a class="d-block cur-link" href="#">
                <div class="card p-2" style="width: 18rem;">
                  <img src="img/curso-icon.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center" id="txt-nombre_curso">Nombre del curso</h5>
                    <p class="card-text text-center" id="txt-nombre_instituto">Institucion</p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 mt-2 mb-2 item-center">
              <a class="d-block cur-link" href="#">
                <div class="card p-2" style="width: 18rem;">
                  <img src="img/curso-icon.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center" id="txt-nombre_curso">Nombre del curso</h5>
                    <p class="card-text text-center" id="txt-nombre_instituto">Institucion</p>
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row d-none" id="div-btn-docente">
            <div class="col-12 mt-4">
              <button class="btn btn-outline-primary btn-lg float-right " type="button" id="btn-crear-curso">Crear curso</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <h3 class="titulo-home">Eventos Proximos</h3>
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

  <footer class=" navbar navbar-expand footer text-white fixed-bottom ">
    <p>&copy; BD 2018</p>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
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
    echo "<p id='flag' class='d-none'>".$_SESSION["flag"]."</p>"
  ?>
 
  <main role="main" style="margin-bottom: 3rem;">

    <div class="container mt-4 mb-4">


      <h3 class="titulo-home">Cursos</h3>
      <div class="row">
        <div class="col-md-8 contenedor" >
          <div class="row mb-2 mt-2 item-center" id="div-cursos">
            
          </div>
          <div class="row d-none" id="div-btn-docente">
            <div class="col-12 mt-4">
              <button class="btn btn-outline-primary btn-lg float-right " type="button" id="btn-crear-curso" onclick="location.href='form-curso.php'">Crear curso</button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <h3 class="titulo-home">Eventos Proximos</h3>
          <div class="contenedor" id="div-eventos">
            

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
  <script src="js/ver_curso.js"></script>
</body>

</html>
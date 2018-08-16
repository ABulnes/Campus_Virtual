<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Campus Virtual</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome-all.css">
</head>

<body>

  
  <?php
    include("header.php");
  ?>

  <main role="main" style="margin-bottom: 3rem;">
    <!--Informacion del usuario-->
    <div class="container mt-4">
      <div class="row">
        <!--Seccion de Nombre-->
        <div class="col-md-3 contenedor ">
          <div class="row">
            <div class="col-12 item-center">
              <div class="profile-pic">
                <img class="img-fluid item-center" src="img/usuario.png">
              </div>
            </div>
            <div class="col-12 mt-3 item-center">
              <button type="button" class="btn btn-block btn-outline-primary ">
                Cambiar foto
              </button>
            </div>
            <div class="col-12 item-center mt-3">
              <h4 id="h-uname" class="text-center"></h4>
            </div>
            <div class="col-12 item-center mt-3">
              <h5 id="h-name"></h5>
            </div>
            <div class="col-12 item-center mt-3">
              <h6 id="h-tusuario"></h6>
            </div>
          </div>
        </div>
        <!--Seccion de Biografia-->
        <div class="col-md-9">

          <div class="contenedor">
            <div class="row">
              <div class="col-12">
                <h5> Acerca de mi </h5>
                <hr class="hr-encabezado">
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-3">
                    Biografia
                  </div>
                  <div class="col-9" id="div-biografia">
                    
                  </div>
                </div>
                <hr>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-3">
                    Cumpleaños
                  </div>
                  <div class="col-9" id="div-nac">
                   
                  </div>
                </div>
                <hr>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-3">
                    Intereses/Actividades
                  </div>
                  <div class="col-9" id="div-intereses">
                    
                  </div>
                </div>
                <hr>
              </div>
              <div class="col-12">
                <h5> Contacto </h5>
                <hr class="hr-encabezado">
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-3">
                    Correos
                  </div>
                  <div class="col-9" id="div-correo">
                    
                  </div>
                </div>
                <hr>
              </div>
              <div class="col-12">
                <div class="row">
                  <div class="col-3">
                    Telefonos
                  </div>
                  <div class="col-9" id="div-telefono">
                   
                  </div>
                </div>
                <hr>
              </div>
            </div>
          </div>

        </div>
        <div class="offset-3 col-md-9 mt-4">
          <div class="contenedor">
            <div class="row" id="div-cursos">
              <div class="col-12">
                <h5> Cursos </h5>
                <hr class="hr-encabezado">
              </div>
            </div>
          </div>

        </div>
      </div>



    </div>

  </main>

  <footer class=" navbar navbar-expand footer text-white">
    <p>&copy; BD 2018</p>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/perfil.js"></script>
</body>

</html>
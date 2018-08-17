<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
      
  <title>Campus Virtual - Matricula</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome-all.css">
</head>

<body>
   
    <?php
      include("header.php");
    ?>
        

  <main style="margin-bottom: 3rem;" role="main" class="mt-4">

    <div class="container">
      <h3 class="titulo-matricula">Matricula</h3>
      <div class="row">
        <div class="col-md-7 contenedor" id="div-Matricula">
          <div class="row">
            <div class="col-md-4">
                <h4>Facultad</h4>
              <select name="Facultad" class="form-control" id="slc-facultad" size="10" multiple>
                  <option value="0">Facultad</option>
                  <option value="1">Facultad 1</option>
                  <option value="2">Facultad 2</option>
                  <option value="3">Facultad 3</option>
                  <option value="4">Facultad 4</option>
                  <option value="5">Facultad 5</option>
                  <option value="6">Facultad 6</option>
              </select>
              <div class="invalid-feedback">Debe Seleccionar una facultad</div>
            </div>
            <div class="col-md-4">
                <h4>Clase</h4>
                <select name="Clase" class="form-control" id="slc-clase" size="10" multiple>
                    <option value="0">Clase</option>
                    <option value="1">Clase 1</option>
                    <option value="2">Clase 2</option>
                    <option value="3">Clase 3</option>
                    <option value="4">Clase 4</option>
                    <option value="5">Clase 5</option>
                    <option value="6">Clase 6</option>
                </select>
                <div class="invalid-feedback">Debe Seleccionar una clase</div>
            </div>
            <div class="col-md-4">
              <h4>Seccion</h4>
                <select name="Seccion" class="form-control" id="slc-seccion" size="10" multiple>
                    <option value="0">Seccion</option>
                    <option value="1">Seccion 1</option>
                    <option value="2">Seccion 2</option>
                    <option value="3">Seccion 3</option>
                    <option value="4">Seccion 4</option>
                    <option value="5">Seccion 5</option>
                    <option value="6">Seccion 6</option>
                </select>
                <div class="invalid-feedback">Debe Seleccionar una seccion</div>
            </div>
          </div>
          <div class="row">  .</div>
          <div class="row justify-content-center">
              <button class="btn btn-outline-primary " id="btn-matricular">Matricular</button>
          </div>

        </div>
        
          
        
        <div class="col-md-5">
          <h3 class="titulo-clasesmatriculadas">Clases Matriculadas Actualmente</h3>
          <div class="container contenedor" id="div-clasesmatriculadas">
            <div class="row">
              <div class="col-md-12">
                  <p class="mb-0 font-weight-bold">Nombre Clase</p>
                  <p class="mb-0 small">Hora inicio-Hora Fin</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <p class="mb-0 font-weight-bold">Nombre Clase</p>
                <p class="mb-0 small">Hora inicio-Hora Fin</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <p class="mb-0 font-weight-bold">Nombre Clase</p>
                <p class="mb-0 small">Hora inicio-Hora Fin</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <p class="mb-0 font-weight-bold">Nombre Clase</p>
                <p class="mb-0 small">Hora inicio-Hora Fin</p>
              </div>
            </div>
            <hr>
  

            
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
  <script src="js/matricula.js"></script>

</body>

</html>
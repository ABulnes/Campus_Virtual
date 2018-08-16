<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Campus Virtual - Crear curso</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
</head>

<body>
  
    <?php
        include("header.php");
      ?>
  <main style="margin-bottom: 3rem;" role="main" class="mt-4">
    <div class="contenedor container " style="width: 60%">
      <div class="row" style="width: 100%">
        <div class="col-12">
          <h4>Crear curso</h4>
          <hr class="hr-encabezado">
        </div>
        <div class="col-12">
          <div class="row">
            <div class="offset-2 col-3 mt-2 mb-2">
              Seccion
            </div>
            <div class="col-4 mt-2 mb-2 form-group">
              <select class="form-control custom-select" id="slc-secciones">
                <option value="Seleccione seccion">Seleccione seccion</option>
                <option value="1">Bases de Datos -0700</option>
              </select>
              <div class="invalid-feedback">Debe seleccionar una seccion</div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class=" offset-2 col-3  mt-2 mb-2">
              Nombre del Curso
            </div>
            <div class="col-4  mt-2 mb-2">
              <input type="text" class="form-control" id="txt-ncurso">
              <div class="invalid-feedback">Campo Obligatorio</div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="offset-2 col-3 mt-2 mb-2">
              Descripcion 
            </div>
            <div class=" col-4  mt-2 mb-2">
              <textarea class="form-control" id="txt-descripcion"></textarea>
              <div class="invalid-feedback">Campo Obligatorio</div>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-end">
        <button class="btn btn-outline-primary  mr-4" id="btn-crear">Crear curso</button>
      </div>
    </div>
  </main>

  <footer class=" navbar navbar-expand footer fixed-bottom text-white">
    <p>&copy; BD 2018</p>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/curso.js"></script>
</body>

</html>
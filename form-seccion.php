<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Campus Virtual - Crear seccion</title>
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
      <div class="row">
        <div class="col-12">
          <h4>Crear seccion</h4>
          <hr class="hr-encabezado">
        </div>
        <div class="col-12">
          <div class="row">
            <div class="offset-1 col-3 mt-2 mb-2">
              Clase
            </div>
            <div class="col-4 mt-2 mb-2 form-group">
              <select class="custom-select" id="slc-clase">
                <option value="Seleccione clase">Seleccione clase</option>
                <option>Base de datos</option>
                <option>Redes de datos</option>
              </select>
              <div class="invalid-feedback">Debe seleccionar una clase</div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="offset-1 col-3 mt-2 mb-2">
              Aula
            </div>
            <div class="col-4 mt-2 mb-2 form-group">
              <select class="custom-select" id="slc-aula">
                <option value="Seleccione aula">Seleccione aula</option>
                <option>101</option>
                <option>102</option>
                <option>103</option>
              </select>
              <div class="invalid-feedback">Debe seleccionar un aula</div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="offset-1 col-3 mt-2 mb-2">
              Edificio
            </div>
            <div class="col-4 mt-2 mb-2 form-group">
              <select class="custom-select" id="slc-edificio">
                <option value="Seleccione edificio">Seleccione edificio</option>
                <option>A1</option>
                <option>B1</option>
                <option>B2</option>
              </select>
              <div class="invalid-feedback">Debe seleccionar un edificio</div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="offset-1 col-3  mt-2 mb-2">
              Hora inicio
            </div>
            <div class="col-4  mt-2 mb-2">
              <input type="time" class="form-control" id="txt-horai">
              <div class="invalid-feedback">Debe seleccionar una hora</div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="offset-1 col-3  mt-2 mb-2">
              Hora fin
            </div>
            <div class="col-4  mt-2 mb-2">
              <input type="time" class="form-control" id="txt-horaf" disabled name="chk-uv">
              <div class="invalid-feedback">Debe seleccionar una hora</div>
            </div>
            <div class="col-4 mt-2 mb-2">
              <div class="small" id="div-condicion"></div>
            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="row">
            <div class="offset-1 col-3  mt-2 mb-2">
              Dias
            </div>
            <div class="col-6  mt-2 mb-2">
              <form class="form-inline">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input mr-1" name="chk-uv" id="chk-Lu">
                  <label class="custom-control-label mr-1" for="chk-Lu">Lu</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input mr-1" name="chk-uv" id="chk-Ma">
                  <label class="custom-control-label mr-1" for="chk-Ma">Ma</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input mr-1" name="chk-uv" id="chk-Mi">
                  <label class="custom-control-label mr-1" for="chk-Mi">Mi</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input mr-1" name="chk-uv" id="chk-Ju">
                  <label class="custom-control-label mr-1" for="chk-Ju">Ju</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input mr-1" name="chk-uv" id="chk-Vi">
                  <label class="custom-control-label mr-1" for="chk-Vi">Vi</label>
                </div>
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input mr-1" name="chk-uv" id="chk-Sa">
                  <label class="custom-control-label mr-1" for="chk-Sa">Sa</label>
                  <div class="invalid-feedback small">Debe seleccionar 5 dias</div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row justify-content-end">
        <button class="btn btn-outline-primary  mr-4" id="btn-crear">Crear seccion</button>
      </div>
    </div>
  </main>

  <footer class=" navbar navbar-expand footer fixed-bottom text-white">
    <p>&copy; BD 2018</p>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/seccion.js"></script>
</body>

</html>
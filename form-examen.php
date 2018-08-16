<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Campus Virtual - ExamenX</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
</head>

<body>
 
    <?php
        include("header.php");
      ?>
  <main style="margin-bottom: 3rem;" role="main" class="mt-4">
    <h4 class="item-center" id="t-examen">Examen Teorico</h4>
    <hr class="hr-encabezado">
    <div class="container" id="div-preguntas">
      <div class="contenedor container mb-3 " style="width: 60%">
        <div class="row">
          <div class="offset-1 col-10 mt-2 mb-2">
            Pregunta tipo Verdadero o falso
          </div>
          <div class="offset-1 col-10 mt-2 mb-2">
            <input type="radio" class="custom-radio" name="rbt-vf" value="1"> Verdadero
            <br>
            <input type="radio" class="custom-radio" name="rbt-vf" value="0"> Falso
          </div>
        </div>
      </div>
      <div class="contenedor container mb-3 " style="width: 60%">
        <div class="row">
          <div class="offset-1 col-10 mt-2 mb-2">
            Pregunta tipo Respuesta breve
          </div>
          <div class="offset-1 col-10 mt-2 mb-2">
            <input type="text" class="form-control" id="txt-respuestabv">
          </div>
        </div>
      </div>
      <div class="contenedor container mb-3 " style="width: 60%">
        <div class="row">
          <div class="offset-1 col-10 mt-2 mb-2">
            Pregunta tipo Seleccion multiple
          </div>
          <div class="offset-1 col-10 mt-2 mb-2">
            <input type="checkbox" name="chk-prg1" value="1"> Opcion 1
            <br>
            <input type="checkbox" name="chk-prg1" value="2"> Opcion 2
            <br>
            <input type="checkbox" name="chk-prg1" value="3"> Opcion 3
            <br>
            <input type="checkbox" name="chk-prg1" value="4"> Opcion 4
            <br>
          </div>
        </div>
      </div>
      <div class="contenedor container mb-3 " style="width: 60%">
        <div class="row">
          <div class="offset-1 col-10 mt-2 mb-2">
            Pregunta tipo completacion _______
          </div>
          <div class="offset-1 col-10 mt-2 mb-2">
            <input type="text" class="form-control" id="txt-respuestabv">
          </div>
        </div>
      </div>
      <div class="row justify-content-end">
          <button class="btn btn-outline-primary btn-lg mr-4" id="btn-finalizar">Finalizar</button>
      </div>
    </div>
  </main>

  <footer class=" navbar navbar-expand footer text-white">
    <p>&copy; BD 2018</p>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>

</html>
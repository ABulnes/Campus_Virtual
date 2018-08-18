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
    echo "<p class='d-none' id='flag'>" . $_SESSION["flag"] . "</p>"
    ?>
        

 <main style="margin-bottom: 3rem;" role="main" class="mt-4">

<div class="container">
    <h3 class="titulo-matricula">Matricula</h3>
    <div class="row">
        <div class="col-8 contenedor d-none" id="div-MatriculaAlumno">
            <div class="row">
                <div class="col-md-6">
                    <h4>Clase</h4>
                    <select name="Clase" class="form-control" id="slc-claseMatricular" size="10">
                
                    </select>
                    <div class="invalid-feedback">Debe Seleccionar una clase</div>
                </div>
                <div class="col-md-6">
                    <h4>Seccion</h4>
                    <select name="Seccion" class="form-control" id="slc-seccion" size="10">
                       
                    </select>
                    <div class="invalid-feedback">Debe Seleccionar una seccion</div>
                </div>
            </div>
            <div class="row"> .</div>
            <div class="row justify-content-center">
                <button class="btn btn-outline-primary " id="btn-matricular">Matricular</button>
            </div>

        </div>
        <div class="col-7 contenedor d-none " style="width: 60%" id="div-MatriculaDocente">
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
                               
                            </select>
                            <div class="invalid-feedback">Debe seleccionar un edificio</div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="offset-1 col-3  mt-2 mb-2">
                            Periodo
                        </div>
                        <div class="col-4  mt-2 mb-2">
                            <input type="text" class="form-control" id="txt-periodo" disabled>
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
                            <input type="time" class="form-control" id="txt-horaf" disabled>
                            <div class="invalid-feedback">Debe seleccionar una hora</div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="offset-1 col-3  mt-2 mb-2">
                            Cupos Maximos
                        </div>
                        <div class="col-4  mt-2 mb-2">
                            <input type="text" class="form-control" id="txt-cupos-max">
                            <div class="invalid-feedback">Debe ingresar una cantidad maxima de cupos</div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row justify-content-end">
                <button class="btn btn-outline-primary  mr-4" id="btn-crear">Crear seccion</button>
            </div>
            <div class="row justify-content-center d-none " id="div-editar">
                <button class="btn btn-outline-primary  mr-4" id="btn-editar">Editar seccion</button>
            </div>
            <p class="d-none" id="id_seccion"></p>
           

        </div>
        <div class="col-md-4 d-none " id="div-clasesAlumno">
            <h4 class="titulo-clasesmatriculadas">Clases Matriculadas</h4>
            <div class="container contenedor" id="div-clases">
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
        <div class="col-md-5 d-none" id="div-seccionesDocente">
            <h3 class="titulo-clasesmatriculadas">Secciones Impartidas</h3>
            <div class="container contenedor" id="div-secciones">
                
                
            </div>
        </div>
    </div>
</div>
</main>
  
  <footer class="mt-4 navbar navbar-expand footer text-white ">
    <p>&copy; BD 2018</p>
  </footer>




  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/matricula.js"></script>

</body>

</html>
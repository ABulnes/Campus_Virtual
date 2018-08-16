<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">

  <title>Campus Virtual-Crear Publicacion</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="css/fontawesome-all.css">
   

</head>

<body>
   
        <?php
          include("header.php");
        ?>


    <main style="margin-bottom: 3rem;" role="main" class="mt-4">
        <div class="container mt-4">
            <h3>Crear Publicacion</h3>
            <div class="row">
                <div class="col-md-4 contenedor">
                    <div class="row">
                        <div class="col-md-2">Tipo</div>
                        <div class="col-md-10">
                            <select name="tipoPublicacion" class="form-control" id="slc-tipoPublicacion">
                                <option value="0">Tipo de Publicacion</option>
                                <option value="1">Tarea</option>
                                <option value="2">Examen</option>
                                <option value="3">Archivo</option>
                                <option value="4">Anuncio</option>
                            </select>
                            
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-2">Titulo:</div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" id="txt-titulo" >
                            <div class="invalid-feedback">Campo Necesario</div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-3">Description:</div>
                        <div class="col-md-9">
                            <textarea class="form-control" id="txt-descripcion" rows="3" ></textarea>
                            <div class="invalid-feedback">Campo Necesario</div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <button type="button" class="btn btn-block btn-outline-primary" id="btn-crear">Crear</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                            <div class="col-md-6 contenedor">
                                    <h4>Tarea</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>Fecha de Entrega:</h6>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <select class="form-control " id="slc-dia">
                                                        <option value="0">Dia</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                      
                                            </select>
                                            <div class="invalid-feedback">Campo Necesario</div>
                                        </div>
                                        <div class="col-md-4">
                                                <select class="form-control" id="slc-mes">
                                                        <option value="0">Mes</option>
                                                        <option value="1">Enero</option>
                                                        <option value="2">Febrero</option>
                                                        <option value="3">Marzo</option>
                                                        <option value="4">Abril</option>
                                                        <option value="5">Mayo</option>
                                                        <option value="6">Junio</option>
                                                        <option value="7">Julio</option>
                                                        <option value="8">Agosto</option>
                                                        <option value="9">Septiembre</option>
                                                        <option value="10">Octubre</option>
                                                        <option value="11">Noviembre</option>
                                                        <option value="12">Diciembre</option>
                                                      </select>
                                                      <div class="invalid-feedback">Campo Necesario</div>
                                        </div>
                                        <div class="col-md-4">
                                                <select class="form-control" id="slc-anio">
                                                        <option value="0">Año</option>
                                                        <option value="1">1990</option>
                                                        <option value="2">1991</option>
                                                        <option value="3">1992</option>
                                                        <option value="4">1993</option>
                                                        <option value="5">1994</option>
                                                        <option value="6">1995</option>
                                                        <option value="7">1996</option>
                                                        <option value="8">1997</option>
                                                        <option value="9">1998</option>
                                                        <option value="10">1999</option>
                                                        <option value="11">2000</option>
                                                        <option value="12">2001</option>
                                                        <option value="13">2002</option>
                                                        <option value="14">2003</option>
                                                        <option value="15">2004</option>
                                                        <option value="16">2005</option>
                                                        <option value="17">2006</option>
                                                        <option value="18">2007</option>
                                                        <option value="19">2009</option>
                                                        <option value="20">2010</option>
                                                        <option value="21">2011</option>
                                                        <option value="22">2012</option>
                                                        <option value="23">2013</option>
                                                        <option value="24">2014</option>
                                                        <option value="25">2015</option>
                                                        <option value="26">2016</option>
                                                        <option value="27">2017</option>
                                                        <option value="28">2018</option>
                                                      </select>
                                                      <div class="invalid-feedback">Campo Necesario</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 contenedor">
                                    <h4>Archivo</h4>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <button type="button" class="btn btn-block btn-outline-primary ">Subir Archivo</button>
                                        </div>
                                    </div>

                                </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 contenedor">
                            <h4>Examen</h4>
                            <br>
                            <div class="col-md-12">
                                <h5>Selecciones las preguntas(Mantenga presionado Ctrl 
                                    y seleccione las preguntas que desee)</h5>
                            <br>
                            <div class="col-md-12">
                                <select multiple id="preguntas" class="col-md-10 offset-md-1" size="8" name="preguntas[]">
                                    <option value="1">Pregunta 1....</option>
                                    <option value="2">Pregunta 2....</option>
                                    <option value="3">Pregunta 3....</option>
                                    <option value="4">Pregunta 4....</option>
                                    <option value="5">Pregunta 5....</option>
                                    <option value="6">Pregunta 6....</option>
                                </select>
                                <div class="invalid-feedback">Selecciones preguntas</div>
                            </div>
                                
                            </div>

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
    <script src="js/crearPublicacion.js"></script>
    


</body>
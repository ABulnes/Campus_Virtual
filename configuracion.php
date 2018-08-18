<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Campus Virtual - Configuracion</title>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
</head>

<body>
 
    <?php
       include("header.php");
      ?>
  <main style="margin-bottom: 3rem;" role="main" class="mt-4">
    <div class="container">
      <!--Menu de configuracion-->
      <div class="row">
        <div class="col-12 mb-3">
          <div class="nav nav-tabs" role="group">
            <li class="nav-item">
              <button class="nav-link active bg-transparent" id="link-cuenta" type="button" onclick="Navegacion('info_cuenta','cuenta')">Cuenta</button>
            </li>
            <li class="nav-item">
              <button class="nav-link bg-transparent" id="link-not" type="button" onclick="Navegacion('info_not','notificacion')">Notificaciones</button>
            </li>
            <li class="nav-item">
              <button class="nav-link bg-transparent" id="link-msj" type="button" onclick="Navegacion('info_msj','mensaje')">Mensajes</button>
            </li>
            <li class="nav-item">
              <button class="nav-link bg-transparent" id="link-amg" type="button" onclick="Navegacion('info_amg','amigos')">Amigos</button>
            </li>
          </div>
        </div>
      </div>
      <!--Informacion de la cuenta-->
      <div class="contenedor container " id="div-info">
        <div class="row">
          <div class="col-12">
            <h4>Informacion de la cuenta</h4>
            <hr class="hr-encabezado">
            <div class="row">
              <div class="col-4 mt-2 mb-2">
                Primer nombre
              </div>
              <div class="col-4 mt-2 mb-2">
                <input type="text" class="form-control" id="txt-pnombre">
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class=" col-4  mt-2 mb-2">
                Segundo Nombre
              </div>
              <div class="col-4  mt-2 mb-2">
                <input type="text" class="form-control" id="txt-snombre">
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class=" col-4  mt-2 mb-2">
                Primer Apellido
              </div>
              <div class=" col-4  mt-2 mb-2">
                <input type="text" class="form-control" id="txt-papellido">
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class=" col-4  mt-2 mb-2">
                Segundo Apellido
              </div>
              <div class="col-4  mt-2 mb-2">
                <input type="text" class="form-control" id="txt-sapellido">
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class=" col-4  mt-2 mb-2">
                Nombre de Usuario
              </div>
              <div class="col-4  mt-2 mb-2">
                <input type="text" class="form-control" id="txt-nusuario">
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class=" col-4  mt-2 mb-2">
                Biografia
              </div>
              <div class="col-4  mt-2 mb-2">
                <textarea class="form-control" id="txt-biografia"></textarea>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class=" col-4  mt-2 mb-2">
                Intereses
              </div>
              <div class="col-4  mt-2 mb-2">
                <input type="text" class="form-control" id="txt-interes">
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class=" col-4  mt-2 mb-2">
                Correo
              </div>
              <div class="col-4  mt-2 mb-2">
                <input type="text" class="form-control" id="txt-correo">
              </div>
              <div class="col-2 mt-2 mb-2">
                <a role="button" class="text-primary">Agregar otro Correo</a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class=" col-4  mt-2 mb-2">
                Telefono
              </div>
              <div class="col-4  mt-2 mb-2">
                <input type="text" class="form-control" id="txt-telefono">
              </div>
              <div class="col-3 mt-2 mb-2">
                <a role="button" class="text-primary">Agregar otro telefono</a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <h4>Contraseña</h4>
                <hr class="hr-encabezado">
              </div>
              <div class="col-4 mt-2 mb-2">
                Contraseña
              </div>
              <div class="col-4 mt-2 mb-2">
                <button type="button" class="text-primary btn btn-link" id="btn-cambiar">Cambiar Contraseña</button>
              </div>
            </div>
          </div>
          <div class="col-12 d-none" id="div-contrasena">
             <div class="row">
                <div class="col-4 mt-2 mb-2">
                   Contraseña vieja
                </div>
                <div class="col-4 mt-2 mb-2">
                   <input type="password" class="form-control" id="txt-vcontrasenia">
                </div>
              </div>
              <div class="row">
                <div class="col-4 mt-2 mb-2">
                   Contraseña nueva
                </div>
                <div class="col-4 mt-2 mb-2">
                   <input type="password" class="form-control" id="txt-ncontrasenia">
                </div>
              </div>
              <div class="row">
                <div class="col-4 mt-2 mb-2">
                   Confirmar contraseña
                </div>
                <div class="col-4 mt-2 mb-2">
                   <input type="password" class="form-control" id="txt-confirmar">
                </div>
             </div> 
          </div>
        </div>
        <div class="row justify-content-end">
          <button class="btn btn-outline-primary  mr-4" id="btn-guardar">Guardar Cambios</button>
        </div>
      </div>

      <!--Informacion de las notificaciones-->
      <div class="contenedor container d-none " id="div-notificaciones">
        <div class="row">
          <div class="col-12">
            <h4>Configuracion de las notificaciones</h4>
            <hr class="hr-encabezado">
            <div class="row">
              <div class="col-4 mt-2 mb-2">
                Permitir notificaciones de acceso al curso
              </div>
              <div class="col-4 mt-2 mb-2">
                <select class="form-control" id="slc-acceso">
                  <option value="A">Activado</option>
                  <option value="I">Desactivado</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-4 mt-2 mb-2">
                Permitir notificaciones de publicaciones
              </div>
              <div class="col-4 mt-2 mb-2">
                <select class="form-control" id="slc-not-pub">
                  <option value="A">Activado</option>
                  <option value="I">Desactivado</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-end">
          <button class="btn btn-outline-primary  mr-4" id="btn-guardar">Guardar Cambios</button>
        </div>
      </div>

      <!--Informacion de los Mensajes-->
      <div class="contenedor container d-none" id="div-mensajes">
        <div class="row">
          <div class="col-12">
            <h4>Configuracion de mensajes</h4>
            <hr class="hr-encabezado">
            <div class="row">
              <div class="col-4 mt-2 mb-2">
                ¿Quien puede enviarme mensajes?
              </div>
              <div class="col-4 mt-2 mb-2">
                <select class="form-control" id="slc-mensaje">
                  <option value="T">Todos</option>
                  <option value="A">Amigos</option>
                  <option value="N">Nadie</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-4 mt-2 mb-2">
                Notifiacciones de mensaje al correo
              </div>
              <div class="col-4 mt-2 mb-2">
                <select class="form-control" id="slc-not-msj">
                  <option value="A">Activado</option>
                  <option value="I">Desactivado</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-end">
          <button class="btn btn-outline-primary  mr-4" id="btn-guardar">Guardar Cambios</button>
        </div>
      </div>
      <!--Informacion de los amigos-->
      <div class="contenedor container d-none" id="div-amigos">
        <div class="row">
          <div class="col-12">
            <h4>Configuracion de Amigos</h4>
            <hr class="hr-encabezado">
            <div class="row">
              <div class="col-4 mt-2 mb-2">
                ¿Quien puede ser mi amigo?
              </div>
              <div class="col-4 mt-2 mb-2">
                <select class="form-control" id="slc-amigos">
                  <option value="T">Todos</option>
                  <option value="A">Amigos de mis amigos</option>
                  <option value="N">Nadie</option>
                </select>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="row">
              <div class="col-4 mt-2 mb-2">
                Notifiacciones de solicitudes de amistad
              </div>
              <div class="col-4 mt-2 mb-2">
                <select class="form-control" id="slc-not-amg">
                  <option value="A">Activado</option>
                  <option value="I">Desactivado</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-end">
          <button class="btn btn-outline-primary  mr-4" id="btn-guardar">Guardar Cambios</button>
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
  <script src="js/configuracion.js"></script>
</body>

</html>
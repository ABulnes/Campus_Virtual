  <?php session_start(); 
        if(!(isset($_SESSION["id_usuario"]) && isset($_SESSION["nombre_usuario"]))){
           header('Location: index.html');
        }
  ?>
  <nav class="navbar navbar-expand-md header fixed-top">
    <a class="navbar-brand" href="home.php">Campus Virtual</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="cursos.php">Cursos
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Matricula</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn bg-transparent text-white mn-btn my-2 my-sm-0 ml-2" type="button" id="btn-amigos" onclick="location.href='amigos.php'">
          <i class="fas fa-user fa-lg"></i>
        </button>
        <button class="btn bg-transparent text-white mn-btn my-2 my-sm-0 ml-2" type="button" id="btn-mensajes" onclick="location.href='mensajes.php'">
          <i class="fas fa-comment-alt fa-lg"></i>
        </button>
        <div class="dropdown">
          <button class="btn bg-transparent text-white mn-btn my-2 my-sm-0 ml-2 mr-4 mn-btn " data-toggle="dropdown"
            type="button" aria-haspopup="true" aria-expanded="false" id="btn-notificaciones">
            <i class="fas fa-bell fa-lg"></i>
          </button>
          <div class="dropdown-menu p-2" aria-labelledby="btn-notificaciones" id="div-noti">
           
          </div>
        </div>
        <div class="user-pic">
          <label for="btn-usuario">
            <img class="img-fluid" src="img/usuario.png">
          </label>
        </div>
        <div class="dropdown">
          <button class="btn bg-transparent text-white mn-btn dropdown-toggle" type="button" id="btn-usuario" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <?php echo  $_SESSION["nombre_usuario"]?>
          </button>
          <div class="dropdown-menu dropdown-menu-right  mn-drop" aria-labelledby="btn-usuario">
            <a class="dropdown-item text-white" href="perfil.php">Perfil</a>
            <a class="dropdown-item text-white" href="configuracion.php">Configuracion</a>
            <div class="dropdown-divider"></div>
            <button class="dropdown-item text-white" type="button" id="btn-cerrar">Cerrar Sesion &nbsp;
              <i class="fas fa-sign-out-alt fa-lg"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </nav>

 
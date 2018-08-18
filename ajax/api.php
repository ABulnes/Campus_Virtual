<?php
include("../class/class-conexion.php");
include("../class/class-usuario.php");
include("../class/class-publicacion.php");
include("../class/class-curso.php");
include("../class/class-seccion.php");
$conexion = new Conexion();
switch ($_GET["accion"]) {
    case "'obtenerPerfil'":
        session_start();
        echo Usuario::getPerfil($conexion, $_SESSION["id_usuario"], $_SESSION["flag"], $_GET["cflag"]);
        break;
    case "'obtenerPublicacion'":
        session_start();
        echo Publicacion::getPublicacion($conexion, $_SESSION["flag"], $_SESSION["id_usuario"]);
        break;

    case "'agregarUsuario'":
        echo Usuario::agregarUsuario(
            $_GET["pnombre"],
            $_GET["snombre"],
            $_GET["papellido"],
            $_GET["sapellido"],
            $_GET["id"],
            $_GET["correo"],
            $_GET["telefono"],
            $_GET["direccion"],
            $_GET["genero"],
            $_GET["fecha_nac"],
            $_GET["tusuario"],
            $_GET["nusuario"],
            $_GET["contrasenia"],
            $_GET["cargo"],
            $_GET["facultad"],
            $conexion
        );
        break;
    case "'Log-out'":
        session_start();
        if (session_destroy()) {
            echo 1;
        } else {
            echo 0;
        }
        break;
    case "'iniciarSesion'":
        echo Usuario::iniciarSesion($conexion, $_GET["correo"], $_GET["contraseña"]);
        break;
    case "'obtenerEventos'":
        session_start();
        echo Publicacion::getEventos($conexion, $_SESSION["id_usuario"], $_SESSION["flag"]);
        break;
    case "'obtenerCurso'":
        session_start();
        echo Curso::getCurso($conexion, $_SESSION["id_usuario"], $_SESSION["flag"]);
        break;
    case "'obtenerInfoSeccion'":
        echo Seccion::getInfoSeccion($conexion);
        break;
    case "'obtenerSeccion'":
        session_start();
        echo Seccion::getSeccion($conexion, $_SESSION["id_tusuario"]);
        break;
    case "'obtenerCargo_Facultad'":
        echo Usuario::getInfoDocente($conexion);
        break;
    case "'actualizarUsuario'":
        session_start();
        echo Usuario::actualizarUsuario(
            $conexion,
            $_SESSION["id_usuario"],
            $_GET["pnombre"],
            $_GET["snombre"],
            $_GET["papellido"],
            $_GET["sapellido"],
            $_GET["correo"],
            $_GET["telefono"],
            $_GET["nusuario"],
            $_GET["biografia"],
            $_GET["interes"],
            $_GET["direccion"]
        );
        break;
    case "'actualizarContrasenia'":
        session_start();
        echo Usuario::actualizarContrasenia($conexion, $_SESSION["id_usuario"], $_GET["contrasena"]);
        break;
    case "'crearSeccion'":
        session_start();
        echo Seccion::crearSeccion(
            $conexion,
            $_SESSION["id_tusuario"],
            $_GET["clase"],
            $_GET["aula"],
            $_GET["edificio"],
            $_GET["horai"],
            $_GET["horaf"],
            $_GET["periodo"],
            $_GET["cupos"]
        );
        break;
}



$conexion->cerrarConexion();


?>
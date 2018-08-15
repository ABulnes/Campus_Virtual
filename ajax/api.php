<?php
    include("../class/class-conexion.php");
    include("../class/class-usuario.php");
    include("../class/class-publicacion.php");

    $conexion = new Conexion();
    switch($_GET["accion"]){
        case "'obtenerPerfil'":
            echo Usuario::getPerfil($conexion,$_GET["id_usuario"],$_GET["flag"],$_GET["cflag"]);
        break;
        case "'obtenerPublicacion'":
            echo Publicacion::getPublicacion($conexion,$_GET["flag"],$_GET["id_usuario"]);
        break;
    }



    $conexion->cerrarConexion();


?>
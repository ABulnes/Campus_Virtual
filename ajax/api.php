<?php
    include("../class/class-conexion.php");
    include("../class/class-usuario.php");


    $conexion = new Conexion();
    switch($_GET["accion"]){
        case "'obtenerPerfil'":
            echo Usuario::getPerfil($conexion,$_GET["id_usuario"],$_GET["flag"],$_GET["cflag"]);
        break;
    }



?>
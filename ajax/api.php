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
        
        case "'agregarUsuario'":
            echo Usuario::agregarUsuario($_GET["pnombre"],
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
                                         $conexion   
                                        );
        break;
    }



    $conexion->cerrarConexion();


?>
<?php
    include("../class/class-conexion.php");
    include("../class/class-usuario.php");
    include("../class/class-publicacion.php");

    $conexion = new Conexion();
    switch($_GET["accion"]){
        case "'obtenerPerfil'":
            session_start();
            echo Usuario::getPerfil($conexion,$_SESSION["id_usuario"],$_GET["flag"],$_GET["cflag"]);
        break;
        case "'obtenerPublicacion'":
            session_start();
            echo Publicacion::getPublicacion($conexion,$_GET["flag"],$_SESSION["id_usuario"]);
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
        case "'Login'":
                session_start();
                if((isset($_SESSION["id_usuario"]) && isset($_SESSION["nombre_usuario"]))){
                    echo 1;
                }else{
                    echo 0;
                }
        break;
        case "'Log-out'":
                if(session_destroy()){
                    echo 1;
                }else{
                    echo 0;
                }
        break;
        case "'iniciarSesion'":
               echo Usuario::iniciarSesion($conexion,$_GET["correo"],$_GET["contraseña"]);                        
        break;
    }



    $conexion->cerrarConexion();


?>
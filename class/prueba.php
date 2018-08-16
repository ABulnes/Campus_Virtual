<?php
            include("../class/class-conexion.php");
            $conexion = new Conexion();
            $pcMensaje = '';
			$pbOcurreError = 1;
			$mensaje = array();
			$ts_sql = "{CALL [dbo].[SP_GESTION_USUARIO](?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
			$params = array(
					array('A',SQLSRV_PARAM_IN),
					array('A',SQLSRV_PARAM_IN),
					array('A',SQLSRV_PARAM_IN),
					array('A',SQLSRV_PARAM_IN),
					array('A',SQLSRV_PARAM_IN),
					array('A',SQLSRV_PARAM_IN),
					array('A',SQLSRV_PARAM_IN),
					array('A',SQLSRV_PARAM_IN),
					array('M',SQLSRV_PARAM_IN),
					array('1997-05-15',SQLSRV_PARAM_IN),
					array('0',SQLSRV_PARAM_IN),
					array('jyyyy',SQLSRV_PARAM_IN),
                    array('asd.456',SQLSRV_PARAM_IN),
                    array("AGREGAR",SQLSRV_PARAM_IN),
					array($pcMensaje,SQLSRV_PARAM_OUT),
					array($pbOcurreError,SQLSRV_PARAM_OUT)
			);
			$result = $conexion->ejectuarSP($ts_sql,$params);
			if($result==false){
				echo "Ocurrio un error";
				die(print_r(sqlsrv_errors(),true));
			}
			while($fila = $conexion->obtenerParametros($result)){
			}
			sqlsrv_next_result($result);
			echo "Mensaje de error:".$pcMensaje;
            echo "Codigo de error:".$pbOcurreError;
            
?>
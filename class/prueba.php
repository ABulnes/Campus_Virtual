<?php
            include("../class/class-conexion.php");
            $conexion = new Conexion();
			$pcMensaje = str_repeat("\0",2000);
			$pnIDUsuario = 0;
			$pcNombreUsuario = str_repeat("\0",200);
			$pbOcurreError = 1;
			$ts_sql = "{CALL [dbo].[SP_LOGIN](?,?,?,?,?,?)}";
			$params = array(
							 array('angel_bulnes16@yahoo.com',SQLSRV_PARAM_IN),
							 array('asd.456',SQLSRV_PARAM_IN),
							 array($pcMensaje,SQLSRV_PARAM_OUT),
							 array($pnIDUsuario,SQLSRV_PARAM_OUT),
							 array($pcNombreUsuario,SQLSRV_PARAM_OUT),
							 array($pbOcurreError,SQLSRV_PARAM_OUT)
							);
			$result = $conexion->ejectuarSP($ts_sql,$params);
			if($result==false){
				echo "Ocurrio un error";
				die(print_r(sqlsrv_errors(),true));
			}
			

			$mensaje[0]=$pcMensaje;
			$mensaje[1] = $pnIDUsuario;
			$mensaje[2] = $pcNombreUsuario;
			$mensaje[3] = $pbOcurreError;
			var_dump($mensaje);

		
			
			
?>
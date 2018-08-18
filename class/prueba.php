<?php
            include("../class/class-conexion.php");
            $conexion = new Conexion();
			$pcMensaje = str_repeat("\0",2000);
			$pbOcurreError = 1;
			$update = array();
			$ts_sql = "{CALL [dbo].[SP_CAMBIO_CONTRASENIA](?,?,?,?)}";
			$params = array(
			array(32, SQLSRV_PARAM_IN),
			array('hola_mundo1', SQLSRV_PARAM_IN),
			array($pcMensaje, SQLSRV_PARAM_OUT),
			array($pbOcurreError, SQLSRV_PARAM_OUT)
		);
		$result = $conexion->ejectuarSP($ts_sql, $params);
		if ($result) {
			while ($conexion->obtenerParametros($result)) {
			};
			$update[]["mensaje"] = $pcMensaje;
			$update[]["codigo_error"] = $pbOcurreError;
		} else {
			die(print_r(sqlsrv_errors(), true));
		}
		var_dump($update);
		echo $ts_sql;

		
			
			
?>
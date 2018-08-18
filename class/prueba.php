<?php
include("../class/class-conexion.php");
$conexion = new Conexion();

$pbOcurreError = 1;
$mensaje = array();
$pcMensaje = str_repeat("\0", 2000);
$pbOcurreError = 1;
$pnIdSeccion = 0;
$ts_sql = "{CALL [dbo].[SP_AGREGAR_SECCION](?,?,?,?,?,?,?,?,?,?,?,?)}";
$params = array(
	array(11, SQLSRV_PARAM_IN),
	array(3, SQLSRV_PARAM_IN),
	array(4, SQLSRV_PARAM_IN),
	array(4, SQLSRV_PARAM_IN),
	array(11, SQLSRV_PARAM_IN),
	array('10:00', SQLSRV_PARAM_IN),
	array('11:00', SQLSRV_PARAM_IN),
	array(50, SQLSRV_PARAM_IN),
	array("AGREGAR", SQLSRV_PARAM_IN),
	array($pcMensaje, SQLSRV_PARAM_OUT),
	array($pbOcurreError, SQLSRV_PARAM_OUT),
	array($pnIdSeccion, SQLSRV_PARAM_OUT)

);
$result = $conexion->ejectuarSP($ts_sql, $params);
if ($result) {
	while ($conexion->obtenerParametros($result)) {
	};
	$mensaje[]["mensaje"] = $pcMensaje;
	$mensaje[]["codigo_error"] = $pbOcurreError;
	sqlsrv_free_stmt($result);
	$sql = "SELECT s.id_seccion,c.nombre_clase,s.hora_inicio,s.hora_fin FROM Seccion s
					INNER JOIN Clase c ON c.id_clase = s.id_clase
					INNER JOIN Docente d ON d.id_docente = s.id_docente WHERE d.id_docente =" . 11 .
		" AND s.id_seccion=" . $pnIdSeccion;
	$result2 = $conexion->ejecutarConsulta($sql);
	$mensaje[]["seccion"] = $conexion->obtenerFila($result2);
} else {
	die(print_r(sqlsrv_errors(), true));
}

var_dump($mensaje);
echo $sql;



?>
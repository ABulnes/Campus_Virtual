<?php

class Usuario
{

	private $nombre;
	private $nombre_usuario;
	private $flag_tusuario;
	private $biografia;
	private $cumpleaños;
	private $intereses;
	private $correo;
	private $telefono;
	private $curso;

	public function __construct(
		$nombre,
		$nombre_usuario,
		$flag_tusuario,
		$biografia,
		$cumpleaños,
		$intereses,
		$correo,
		$telefono,
		$curso
	) {
		$this->nombre = $nombre;
		$this->nombre_usuario = $nombre_usuario;
		$this->flag_tusuario = $flag_tusuario;
		$this->biografia = $biografia;
		$this->cumpleaños = $cumpleaños;
		$this->intereses = $intereses;
		$this->correo = $correo;
		$this->telefono = $telefono;
		$this->curso = $curso;
	}
	public function getNombre()
	{
		return $this->nombre;
	}
	public function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	public function getNombre_usuario()
	{
		return $this->nombre_usuario;
	}
	public function setNombre_usuario($nombre_usuario)
	{
		$this->nombre_usuario = $nombre_usuario;
	}
	public function getFlag_tusuario()
	{
		return $this->flag_tusuario;
	}
	public function setFlag_tusuario($flag_tusuario)
	{
		$this->flag_tusuario = $flag_tusuario;
	}
	public function getBiografia()
	{
		return $this->biografia;
	}
	public function setBiografia($biografia)
	{
		$this->biografia = $biografia;
	}
	public function getCumpleaños()
	{
		return $this->cumpleaños;
	}
	public function setCumpleaños($cumpleaños)
	{
		$this->cumpleaños = $cumpleaños;
	}
	public function getIntereses()
	{
		return $this->intereses;
	}
	public function setIntereses($intereses)
	{
		$this->intereses = $intereses;
	}
	public function getCorreo()
	{
		return $this->correo;
	}
	public function setCorreo($correo)
	{
		$this->correo = $correo;
	}
	public function getTelefono()
	{
		return $this->telefono;
	}
	public function setTelefono($telefono)
	{
		$this->telefono = $telefono;
	}
	public function getCurso()
	{
		return $this->curso;
	}
	public function setCurso($curso)
	{
		$this->curso = $curso;
	}
        //Funcion que ingresa el usuario
	public static function agregarUsuario(
		$pnombre,
		$snombre,
		$papellido,
		$sapellido,
		$num_id,
		$correo,
		$telefono,
		$direccion,
		$genero,
		$fecha_nac,
		$tusuario,
		$nusaurio,
		$contrasenia,
		$cargo,
		$facultad,
		$conexion
	) {
		$pcMensaje = str_repeat("\0", 2000);
		$pbOcurreError = 1;
		$mensaje = array();
		$ts_sql = "{CALL [dbo].[SP_GESTION_USUARIO](?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params = array(
			array($pnombre, SQLSRV_PARAM_IN),
			array($snombre, SQLSRV_PARAM_IN),
			array($papellido, SQLSRV_PARAM_IN),
			array($sapellido, SQLSRV_PARAM_IN),
			array($num_id, SQLSRV_PARAM_IN),
			array($correo, SQLSRV_PARAM_IN),
			array($telefono, SQLSRV_PARAM_IN),
			array($direccion, SQLSRV_PARAM_IN),
			array($genero, SQLSRV_PARAM_IN),
			array($fecha_nac, SQLSRV_PARAM_IN),
			array($tusuario, SQLSRV_PARAM_IN),
			array($nusaurio, SQLSRV_PARAM_IN),
			array($contrasenia, SQLSRV_PARAM_IN),
			array($cargo, SQLSRV_PARAM_IN),
			array($facultad, SQLSRV_PARAM_IN),
			array("AGREGAR", SQLSRV_PARAM_IN),
			array($pcMensaje, SQLSRV_PARAM_OUT),
			array($pbOcurreError, SQLSRV_PARAM_OUT)
		);
		$result = $conexion->ejectuarSP($ts_sql, $params);
		if ($result) {
			while ($conexion->obtenerParametros($result)) {
			};
			$mensaje[]["mensaje"] = $pcMensaje;
			$mensaje[]["codigo_error"] = $pbOcurreError;

		} else {
			die(print_r(sqlsrv_errors(), true));
		}

		return json_encode($mensaje);
	}
	/**Funcion que obtiene el perfil de un usuario */
	public static function getPerfil($conexion, $idUsuario, $flag, $cflag)
	{
		$perfil = array();
		if ($flag == 0) {
			$sql = "SELECT p_nombre,s_nombre,p_apellido,s_apellido, nombre_usuario, biografia, fecha_nacimiento, intereses, correo, telefono,direccion FROM vw_PerfilAlumno
                        WHERE id_usuario = " . $idUsuario;
		} else {
			if ($flag == 1) {
				$sql = "SELECT p_nombre,s_nombre,p_apellido,s_apellido, nombre_usuario, biografia, fecha_nacimiento, intereses, correo, telefono,direccion FROM vw_PerfilDocente
                    WHERE id_usuario = " . $idUsuario;
			}
		}

		$result = $conexion->ejecutarConsulta($sql);
		while ($fila = $conexion->obtenerFila($result)) {
			$perfil[] = $fila;
		}
		   //echo $sql;
		if ($cflag == 0) {
			$perfil[]["cursos"] = self::getCursosUsuario($conexion, $idUsuario, $flag);
		} else {
			if ($cflag == 1) {
				$perfil[]["config"] = self::getConfiguracionUsuario($conexion, $idUsuario);
			}
		}

		$perfil[]["flag"] = $_SESSION["flag"];
		return json_encode($perfil);
	}

	/**Funcion que retorna los cursos del usuario especifico */
	public static function getCursosUsuario($conexion, $idUsuario, $flag)
	{
		$cursos = array();
		if ($flag == 0) {
			$sql = "SELECT  cur.nombre_curso FROM Curso cur
                        WHERE cur.id_seccion IN (SELECT m.id_seccion FROM Matricula m INNER JOIN Alumno a  ON a.id_alumno = m.id_alumno
												 INNER JOIN Seccion s ON s.id_seccion = m.id_seccion
												 INNER JOIN Periodo p ON p.id_periodo = s.id_periodo								
                        						WHERE a.id_usuario=" . $idUsuario . "AND GETDATE() BETWEEN p.fecha_inicio AND p.fecha_fin AND cur.estado='A')";
		} else {
			if ($flag == 1) {
				$sql = "SELECT cur.nombre_curso FROM Curso cur 
                            WHERE cur.id_seccion IN(
                                                    SELECT id_seccion FROM Seccion s
                                                    INNER JOIN Docente d ON d.id_docente= s.id_docente
													INNER JOIN Periodo p ON p.id_periodo = s.id_periodo
                                                    WHERE d.id_usuario = " . $idUsuario . " AND GETDATE() BETWEEN p.fecha_inicio AND p.fecha_fin
                                                    AND cur.estado = 'A')";
			}
		}
            //echo $sql;
		$result = $conexion->ejecutarConsulta($sql);
		while ($fila = $conexion->obtenerFila($result)) {
			$cursos[] = $fila;
		}
		return $cursos;
	}
		//Funcion que retorna la configuracion del usuario
	public static function getConfiguracionUsuario($conexion, $idUsuario)
	{
		$config = array();
		$sql = "SELECT config_amigos,notifiacion_curso,notificacion_de_envio,notificacion_publicacion,envio_mensaje,notificacion_solicitud FROM Configuracion
					WHERE id_usuario =" . $idUsuario;

		$result = $conexion->ejecutarConsulta($sql);
		$config = $conexion->obtenerFila($result);

		return $config;
	}

		//Funcion que verifica el inicio de sesion del usuario
	public static function iniciarSesion($conexion, $correo, $contrasenia)
	{
		$pcMensaje = str_repeat("\0", 2000);
		$pnIDTusuario = 0;
		$login = array();
		$pnIDUsuario = 0;
		$pcNombreUsuario = str_repeat("\0", 200);
		$pbOcurreError = 1;
		$pnflag = -1;
		$ts_sql = "{CALL [dbo].[SP_LOGIN](?,?,?,?,?,?,?,?)}";
		$params = array(
			array($correo, SQLSRV_PARAM_IN),
			array($contrasenia, SQLSRV_PARAM_IN),
			array($pcMensaje, SQLSRV_PARAM_OUT),
			array($pnIDUsuario, SQLSRV_PARAM_OUT),
			array($pcNombreUsuario, SQLSRV_PARAM_OUT),
			array($pbOcurreError, SQLSRV_PARAM_OUT),
			array($pnflag, SQLSRV_PARAM_OUT),
			array($pnIDTusuario, SQLSRV_PARAM_OUT)
		);
		$result = $conexion->ejectuarSP($ts_sql, $params);
		if ($result) {
			while ($conexion->obtenerParametros($result)) {
			};
			session_start();
			$_SESSION["id_usuario"] = $pnIDUsuario;
			$_SESSION["nombre_usuario"] = $pcNombreUsuario;
			$_SESSION["flag"] = $pnflag;
			$_SESSION["id_tusuario"] = $pnIDTusuario;
			$login[]["mensaje"] = $pcMensaje;
			$login[]["codigo_error"] = $pbOcurreError;
		} else {
			die(print_r(sqlsrv_errors(), true));
		}

		return json_encode($login);

	}

	public static function getInfoDocente($conexion)
	{
		$info = array();
		$info[]["cargo"] = self::getCargo($conexion);
		$info[]["facultad"] = self::getFacultad($conexion);
		return json_encode($info);
	}

	public static function getCargo($conexion)
	{
		$cargo = array();
		$sql = "SELECT id_cargo, descripcion FROM Cargo";
		$result = $conexion->ejecutarConsulta($sql);
		while ($fila = $conexion->obtenerFila($result)) {
			$cargo[] = $fila;
		}
		return $cargo;
	}

	public static function getFacultad($conexion)
	{
		$facultad = array();
		$sql = "SELECT id_facultad, nombre_facultad FROM Facultad";
		$result = $conexion->ejecutarConsulta($sql);
		while ($fila = $conexion->obtenerFila($result)) {
			$facultad[] = $fila;
		}
		return $facultad;
	}

	public static function actualizarUsuario(
		$conexion,
		$id_usuario,
		$pnombre,
		$snombre,
		$papellido,
		$sapellido,
		$correo,
		$telefono,
		$nusuario,
		$biografia,
		$interes,
		$direccion
	) {
		$pcMensaje = str_repeat("\0", 2000);
		$pbOcurreError = 1;
		$ts_sql = "{CALL [dbo].[SP_MODIFICAR_USUARIO](?,?,?,?,?,?,?,?,?,?,?,?,?)}";
		$params = array(
			array($id_usuario, SQLSRV_PARAM_IN),
			array($pnombre, SQLSRV_PARAM_IN),
			array($snombre, SQLSRV_PARAM_IN),
			array($papellido, SQLSRV_PARAM_IN),
			array($sapellido, SQLSRV_PARAM_IN),
			array($correo, SQLSRV_PARAM_IN),
			array($telefono, SQLSRV_PARAM_IN),
			array($direccion, SQLSRV_PARAM_IN),
			array($nusuario, SQLSRV_PARAM_IN),
			array($biografia, SQLSRV_PARAM_IN),
			array($interes, SQLSRV_PARAM_IN),
			array($pcMensaje, SQLSRV_PARAM_OUT),
			array($pbOcurreError, SQLSRV_PARAM_OUT),
		);
		$update = array();
		$result = $conexion->ejectuarSP($ts_sql, $params);
		if ($result) {
			while ($conexion->obtenerParametros($result)) {
			};
			$update[]["mensaje"] = $pcMensaje;
			$update[]["codigo_error"] = $pbOcurreError;

		} else {
			die(print_r(sqlsrv_errors(), true));
		}

		return json_encode($update);
	}

	public static function actualizarContrasenia($conexion, $id_usuario, $contrasena)
	{
		$updateC = array();
		$pcMensaje = str_repeat("\0", 1000);
		$pbOcurreError = 1;
		$ts_sql = "{CALL [dbo].[SP_CAMBIO_CONTRASENIA](?,?,?,?)}";
		$params = array(
			array($id_usuario, SQLSRV_PARAM_IN),
			array($contrasena, SQLSRV_PARAM_IN),
			array($pcMensaje, SQLSRV_PARAM_OUT),
			array($pbOcurreError, SQLSRV_PARAM_OUT)
		);
		$result = $conexion->ejectuarSP($ts_sql, $params);
		if ($result) {
			while ($conexion->obtenerParametros($result)) {
			};
			$updateC[]["mensaje"] = $pcMensaje;
			$updateC[]["codigo_error"] = $pbOcurreError;
		} else {
			die(print_r(sqlsrv_errors(), true));
		}
		
		return json_encode($updateC);
	}

}
?>
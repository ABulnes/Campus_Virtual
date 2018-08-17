<?php

	class Publicacion{

		private $id_publicacion;
		private $id_curso;
		private $tipo_entrada;
		private $fecha_creacion;
		private $descripcion;
		private $titulo;
		private $estado;

		public function __construct($id_publicacion,
					$id_curso,
					$tipo_entrada,
					$fecha_creacion,
					$descripcion,
					$titulo,
					$estado){
			$this->id_publicacion = $id_publicacion;
			$this->id_curso = $id_curso;
			$this->tipo_entrada = $tipo_entrada;
			$this->fecha_creacion = $fecha_creacion;
			$this->descripcion = $descripcion;
			$this->titulo = $titulo;
			$this->estado = $estado;
		}
		public function getId_publicacion(){
			return $this->id_publicacion;
		}
		public function setId_publicacion($id_publicacion){
			$this->id_publicacion = $id_publicacion;
		}
		public function getId_curso(){
			return $this->id_curso;
		}
		public function setId_curso($id_curso){
			$this->id_curso = $id_curso;
		}
		public function getTipo_entrada(){
			return $this->tipo_entrada;
		}
		public function setTipo_entrada($tipo_entrada){
			$this->tipo_entrada = $tipo_entrada;
		}
		public function getFecha_creacion(){
			return $this->fecha_creacion;
		}
		public function setFecha_creacion($fecha_creacion){
			$this->fecha_creacion = $fecha_creacion;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getTitulo(){
			return $this->titulo;
		}
		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
        }
        
        //Funcion que trae las publicaciones del inicio y los eventos proximos
        public static function getPublicacion($conexion,$flag,$idUsuario){
            $inicio = array();
            $publicacion = array();
			$eventos = array();
			if($flag ==0){
				$sql = "SELECT id_publicacion,nombre_curso,tipo_entrada,descripcion,titulo,fecha_creacion
				FROM vw_PublicacionesRecientes WHERE id_usuario=".$idUsuario;
			}else{
				$sql = "SELECT id_publicacion,nombre_curso,tipo_entrada,descripcion,titulo,fecha_creacion
				FROM vw_PublicacionesRecientesDocente WHERE id_usuario=".$idUsuario;
			}
           
            $result = $conexion->ejecutarConsulta($sql);
            while($fila = $conexion->obtenerFila($result)){
                $publicacion[] = $fila;
			}
			if($flag==0){
				$sql = "SELECT id_publicacion,titulo,fecha_maxima,Flag FROM vw_ProximosEventos WHERE id_usuario=".$idUsuario;
			}else{
				$sql = "SELECT id_publicacion,titulo,fecha_maxima,Flag FROM vw_ProximosEventosDocente WHERE id_usuario=".$idUsuario;
			}
            $result = $conexion->ejecutarConsulta($sql);
            while($fila = $conexion->obtenerfila($result)){
                $eventos[] = $fila;
            }

            $inicio[]["publicacion"] = $publicacion;
            $inicio[]["eventos"] = $eventos;
			
            return json_encode($inicio);
		}
		//Funcion que retorna los eventos
		public static function getEventos($conexion,$idUsuario,$flag){
			$eventos = array();
			if($flag==0){
				$sql = "SELECT id_publicacion,titulo,fecha_maxima,Flag FROM vw_ProximosEventos WHERE id_usuario=".$idUsuario;
			}else{
				$sql = "SELECT id_publicacion,titulo,fecha_maxima,Flag FROM vw_ProximosEventosDocente WHERE id_usuario=".$idUsuario;
			}
			//echo $sql;
            $result = $conexion->ejecutarConsulta($sql);
            while($fila = $conexion->obtenerfila($result)){
                $eventos[] = $fila;
			}
			return json_encode($eventos);	
		}

	};
?>
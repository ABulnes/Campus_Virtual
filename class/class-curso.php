<?php

	class Curso{

		private $id_curso;
		private $id_seccion;
		private $nombre_curso;
		private $descripcion;
		private $fecha_creacion;
		private $estado;

		public function __construct($id_curso,
					$id_seccion,
					$nombre_curso,
					$descripcion,
					$fecha_creacion,
					$estado){
			$this->id_curso = $id_curso;
			$this->id_seccion = $id_seccion;
			$this->nombre_curso = $nombre_curso;
			$this->descripcion = $descripcion;
			$this->fecha_creacion = $fecha_creacion;
			$this->estado = $estado;
		}
		public function getId_curso(){
			return $this->id_curso;
		}
		public function setId_curso($id_curso){
			$this->id_curso = $id_curso;
		}
		public function getId_seccion(){
			return $this->id_seccion;
		}
		public function setId_seccion($id_seccion){
			$this->id_seccion = $id_seccion;
		}
		public function getNombre_curso(){
			return $this->nombre_curso;
		}
		public function setNombre_curso($nombre_curso){
			$this->nombre_curso = $nombre_curso;
		}
		public function getDescripcion(){
			return $this->descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}
		public function getFecha_creacion(){
			return $this->fecha_creacion;
		}
		public function setFecha_creacion($fecha_creacion){
			$this->fecha_creacion = $fecha_creacion;
		}
		public function getEstado(){
			return $this->estado;
		}
		public function setEstado($estado){
			$this->estado = $estado;
        }
        //Funcion que retorna los cursos actuales 
        public static function getCurso($conexion,$idUsuario,$flag){
            $cursos = array();
            if($flag==0){
                $sql = "SELECT nombre_curso, nombre_institucion, id_curso FROM vw_CursosAlumno 
                        WHERE id_usuario=".$idUsuario;
            }else{
                if($flag == 1){
                    $sql = "SELECT nombre_curso, nombre_institucion, id_curso FROM vw_CursosDocente 
                    WHERE id_usuario=".$idUsuario;
                }
            }
            $result = $conexion->ejecutarConsulta($sql);
            while($fila = $conexion->obtenerFila($result)){
                $cursos[] = $fila;
            }

            return json_encode($cursos);
        }

	}
?>
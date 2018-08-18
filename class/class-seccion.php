<?php

	class Seccion{

		private $id_seccion;
		private $id_docente;
		private $id_clase;
		private $id_aula;
		private $id_edificio;
		private $hora_inicio;
		private $hora_fin;
		private $max_cupos;

		public function __construct($id_seccion,
					$id_docente,
					$id_clase,
					$id_aula,
					$id_edificio,
					$hora_inicio,
					$hora_fin,
					$max_cupos){
			$this->id_seccion = $id_seccion;
			$this->id_docente = $id_docente;
			$this->id_clase = $id_clase;
			$this->id_aula = $id_aula;
			$this->id_edificio = $id_edificio;
			$this->hora_inicio = $hora_inicio;
			$this->hora_fin = $hora_fin;
			$this->max_cupos = $max_cupos;
		}
		public function getId_seccion(){
			return $this->id_seccion;
		}
		public function setId_seccion($id_seccion){
			$this->id_seccion = $id_seccion;
		}
		public function getId_docente(){
			return $this->id_docente;
		}
		public function setId_docente($id_docente){
			$this->id_docente = $id_docente;
		}
		public function getId_clase(){
			return $this->id_clase;
		}
		public function setId_clase($id_clase){
			$this->id_clase = $id_clase;
		}
		public function getId_aula(){
			return $this->id_aula;
		}
		public function setId_aula($id_aula){
			$this->id_aula = $id_aula;
		}
		public function getId_edificio(){
			return $this->id_edificio;
		}
		public function setId_edificio($id_edificio){
			$this->id_edificio = $id_edificio;
		}
		public function getHora_inicio(){
			return $this->hora_inicio;
		}
		public function setHora_inicio($hora_inicio){
			$this->hora_inicio = $hora_inicio;
		}
		public function getHora_fin(){
			return $this->hora_fin;
		}
		public function setHora_fin($hora_fin){
			$this->hora_fin = $hora_fin;
		}
		public function getMax_cupos(){
			return $this->max_cupos;
		}
		public function setMax_cupos($max_cupos){
			$this->max_cupos = $max_cupos;
        }
        
        public static function getInfoSeccion($conexion){
            $info = array();
            $info[]["clases"] = self::getClase($conexion);
            $info[]["aula"] = self::getAula($conexion);
			$info[]["edificio"] = self::getEdificio($conexion);
			$info[]["periodo"] = self::getPeriodo($conexion);
            return json_encode($info);
        }
        public static function getClase($conexion){
            $clases = array();
            $sql = "SELECT id_clase, nombre_clase FROM Clase";
            $result = $conexion->ejecutarConsulta($sql);
            while($fila = $conexion->obtenerFila($result)){
                $clases[] = $fila;
            }
            return $clases;
        }
        
        public static function getEdificio($conexion){
            $edificio = array();
            $sql = "SELECT id_edificio, nombre_edificio FROM Edificio";
            $result = $conexion->ejecutarConsulta($sql);
            while($fila = $conexion->obtenerFila($result)){
                $edificio[] = $fila;
            }
            return $edificio;
        }
        public static function getAula($conexion){
            $aula = array();
            $sql = "SELECT id_aula, nombre_aula FROM Aula";
            $result = $conexion->ejecutarConsulta($sql);
            while($fila = $conexion->obtenerFila($result)){
                $aula[] = $fila;
            }
            return $aula;
		}
		
		public static function getPeriodo($conexion){
			$periodo = array();
			$sql = "SELECT id_periodo,descripcion FROM Periodo WHERE GETDATE() BETWEEN fecha_inicio AND fecha_fin";
			$result = $conexion->ejecutarConsulta($sql);
			$periodo = $conexion->obtenerFila($result);
			return $periodo;

		}

		public static function getSeccion($conexion,$idDocente){
			$seccion = array();
			$sql = "SELECT s.id_seccion,c.nombre_clase,s.hora_inicio,s.hora_fin FROM Seccion s
					INNER JOIN Clase c ON c.id_clase = s.id_clase
					INNER JOIN Docente d ON d.id_docente = s.id_docente WHERE d.id_docente =".$idDocente;
			$result = $conexion->ejecutarConsulta($sql);		
			while($fila = $conexion->obtenerFila($result)){
				$seccion[] = $fila;
			}

			return json_encode($seccion);
		}

	}
?>
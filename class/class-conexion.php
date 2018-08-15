<?php
    class Conexion{
        private $serverName = "localhost";
        private $connectionInfo = array("Database"=>"bd_campus","UID"=>"admin","PWD"=>"asd.456");
        private $link;

        public function __construct(){
            $this->link = sqlsrv_connect(
                $this->serverName,
                $this->connectionInfo
            );
            if(!$this->link){
                die(print_r(sqlsrv_errors(),true));
            }
        }

        public function ejecutarConsulta($sql){
            return sqlsrv_query($this->link,$sql);
        }

        public function obtenerFila($resultado){
            return sqlsrv_fetch_array($resultado);
        }

        public function cerrarConexion(){
            sqlsrv_close($this->link);
        }

        public function getLink(){
            return $this->link;
        }

        public function cantidadRegistros($resultado){
            return sqlsrv_num_rows($resultado);
        }
    };

?>
<?php
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
 
    class Conex{
        private $conexion;
        private $usuario='root';
        private $clave='';
        private $server='localhost';
        private $db='prueba';

       
        
        public function conectar(){
         //   echo "holiiiis"; 
            $this->conexion = new mysqli($this->server,$this->usuario,$this->clave,$this->db);
           //var_dump( $this->conexion); 
            if($this->conexion->connect_errno) echo'Falla al conectar con MySQL: '.$this->conexion->connect_error;
        }
        
        public function query($consulta, $activarutf8 = true){
            if($activarutf8 == true) $this->conexion->set_charset("utf8");
            if($activarutf8 == false) $this->conexion->set_charset("utf8mb4");
            return $this->conexion->query($consulta);
        }

        public function queryRegistro($consulta){
     
                $this->conexion->set_charset("utf8");
                $this->conexion->query($consulta);
              
                return $this->conexion->insert_id;
      
        }
        
    
        public function cerrar(){
            $this->conexion->close();
        }
        
        public function salvar($des){
            $string = $this->conexion->real_escape_string($des);
            return $string;
        }

        public function consultaTodo($consulta){
            //$this->conexion->set_charset("utf8");
            $result = $this->conexion->query($consulta);
            $results_array = [];
        
                while ($row = $result->fetch_assoc()) {
                    $results_array[] = $row;
                  }
        
           
            return $results_array;
        }
    
    }
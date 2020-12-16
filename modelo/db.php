<?php
	/**
	 * Clase para realizar la conexion con la
	 * base de datos 
	 */
	class Conexion{
	
		private $host="localhost";
        private $usuario="alejandro";//Usuario para la base de datos
        private $clave="123456";//contraseña de tu usuario
        private $db="api";//Nombre de tu base de datos
        private $conexion; // Guardar la cadena de conexión que se genera a la base de datos

		public function conectar(){//Funcion para verificar la conexion a la base de datos
            $this->conexion= mysqli_connect($this->host,$this->usuario,$this->clave,$this->db);//cadena para la conexion
            if(!($this->conexion)){//condicion para la conexion.
                die("Fallo en la conexión: " . mysqli_connect_error());
            }
            $this->conexion->set_charset("utf8");
        }

        public function getConexion(){//Funcion "Conexion" la cual guarda la cadena para conectarse a la base de datos
            return $this->conexion;
        }
    }
    
?>
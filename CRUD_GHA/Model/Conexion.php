<?php

    class conexiondb{

        public $server = "localhost";
        public $user = "root";
        public $password = "";
        public $database = "ghadb";
        public $connect;

        public function conndb(){

            //conexion a la db
            $connect = mysqli_connect($this->server, $this->user, $this->password, $this->database);

            if(!$connect){
                die("Fallo la conexion a la base de datos" . mysqli_connect_error());
            }

            return $connect;
        }

    }

?>
<?php 
    class Conexion {
        public function conectar(){
            $host = "127.0.0.1";
            $usuario = "backend";//root
            $password = "backend2025";
            $base = "bryan_agenda";
            $conexion = mysqli_connect(
                $host, $usuario, $password, $base
            );
            return $conexion;
        }
    }

   

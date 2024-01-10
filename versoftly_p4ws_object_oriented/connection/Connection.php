<?php

    class Connection {

        public static function connecto ($server,$dbname,$user,$password) {

            try {

                $conn = new PDO("mysql:host=$server;dbname=$dbname",$user,$password);

            } catch(PDOException $e) {

                echo "error ".$e->getMessage();

            }
            
            if (!$conn) {

                die("Error de conexion con la basededatos");

            } else {

                return $conn;
                
            }

        }

    }

?>
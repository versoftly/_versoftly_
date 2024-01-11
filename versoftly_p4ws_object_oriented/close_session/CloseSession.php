<?php

    class CloseSession {

        public static function now ($location) {

            session_start();

            session_destroy();
            
            $_SESSION = [];
            
            header ("Location: $location");

        }

    }

?>
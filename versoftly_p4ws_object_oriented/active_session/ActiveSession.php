<?php

    class ActiveSession {

        public static function ifIsActive ($location) {

            session_start();

            if (isset($_SESSION['usuario'])) {

                header("Location: $location");

            }

        }

        public static function ifIsNotActive ($location) {

            session_start();

            if (!isset($_SESSION['usuario'])) {

                header ("Location: $location");

            }

        }

    }

?>
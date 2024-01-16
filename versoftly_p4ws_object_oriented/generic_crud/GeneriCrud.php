<?php

    class GeneriCrud {

        // dinamic table names
        // dinamic table fields
        // dinamic table fields placeholders
        // dinamic operations

        /**
         * Important the values array and the fieldnames array
         * have to match in the same array index to insert the information
         * in the right fileld in the data base to avoid wrong information
         * in the wrong field of the table.
         */

        private string $operation;

        public function __construct ($operation) {
            $this->operation = strtouppercase($operation);
        }

        public function executeThisOperation ($tableName,array $fieldNames,$values,$redirec) {

            $operation = $this->operation;

            if ( $peration === "SELECT" ) {

            } else if ( $operation === "UPDATE" ) {

                $placeholders = [];

                for ($i=0; $i < count($fieldNames); $i++) { 
                    $placeholders[$i] = ":".$fieldNames[$i];
                }

                $data = [];

                for ($i=0; $i < count($values); $i++) { 
                    array_push($data,[$placeholders[$i] => $values[$i]]);
                }

                /**
                 * Debe de haber una secuencia de ingreso 
                 * de datos para poder definir el id en este
                 * caso especificamente 
                 * 
                 * [
                 *  "campo identificador"=>":placeholder especifico",
                 *  "campo random"=>":otherplaceholder random"
                 * ]
                 * 
                 */

                for ($i=0; $i < count($fieldNames); $i++) { 
                    
                }

                $sql = "UPDATE $tableName SET titulo=:titulo, contenido=:texto WHERE id=:id";
                $stmt= $conn->prepare($sql);
                $stmt->execute($data);
                
                header("Location: $redirec");

            } else if ( $operation === "INSERT" ) {

                
                $fieldString = implode(",",$fieldNames);

                $placeholders = [];

                for ($i=0; $i < count($fieldNames); $i++) { 
                    $placeholders[$i] = ":".$fieldNames[$i];
                }

                $placeholderString = implode(",",$placeholders); 

                $stmt = $conn->prepare(
                        "INSERT INTO $tableName ($fieldString) 
                        VALUES ($placeholderString)
                    "
                );

                $data = [];

                for ($i=0; $i < count($values); $i++) { 
                    array_push($data,[$placeholders[$i] => $values[$i]]);
                }
                
                $stmt->execute($data);
                
                header("Location: $redirec");

            } else if ( $operation === "DELETE" ) {

            } else {
                return "SQL OPERATION NOT FOUND 404.";
            }

        }


    }

?>
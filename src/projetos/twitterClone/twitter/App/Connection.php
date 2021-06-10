<?php
    namespace App;

    class Connection{

        public static function getDb(){

            try{
                $conn = new \PDO (
                    "mysql:host=localhost;dbname=mvc;charset=utf8",
                    "root",
                    "160819"
                );
                return $conn;
            }catch(\PDOException $e){
                // tratar error
                echo '<strong>Error Code : </strong>'.$e->getCode();
                echo '<br>';
                echo '<strong>Mensagem : </strong>'.$e->getMessage();
            }

        } # [/getDb()]

    } # [/Connection]

?>
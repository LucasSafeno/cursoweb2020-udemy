<?php
    namespace MF\Model;

    use App\Connection;

    class Container{

        public static function getModel($model){

            //Instancia Model
            $class  = "\\App\\Models\\".ucfirst($model);

            $conn = Connection::getDb();    

            return new $class($conn);

        }# [getModel()]

    }# [/Container]

?>
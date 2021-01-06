<?php


    try{
        echo '<h3>*** Try *** </h3>';


      //  $sql = 'SELECT * FROM clientes';
      //  mysql_query($sql);

       if(!file_exists('require_arquivo.php')){
            throw new Exception('O Arquivo em questão deveria estar disponivel as '. date('d/m/Y H:i:s') .' horas, mas não estava. Vamos seguir mesmo assim');
       }
        
    } catch(Error $e){

        echo '<h3>*** CATCH ERROR *** </h3>';
        echo '<p style="color: red">'. $e . '</p>';

    } catch(Exception $e) {
        echo '<h3>*** CATCH EXCEPTION *** </h3>';
        echo '<p style="color: red">'. $e . '</p>';
     
    }


?>
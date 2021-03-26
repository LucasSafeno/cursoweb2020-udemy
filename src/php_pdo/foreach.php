<?php

    # PARAMETROS MYSQL
    $dsn        =   'mysql:host=localhost;dbname=php_pdo';
    $usuario    =   'root';
    $senha      =   '';

    # Conexão
    try{
        # Instancia PDO
        $conexao = new PDO($dsn, $usuario, $senha);


        # Query Selecionar registro
        $query  = '
            SELECT *
            FROM tb_usuarios';

        # PDOStatement
        $stmt = $conexao->query($query);

        foreach($conexao->query($query) as $key => $value){
            echo '<pre>';
            echo $value['senha'];
            echo '</pre>';
        }
       
       // $lista_usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);


       // echo '<pre>';
       // print_r($lista_usuarios);
       // echo '</pre>';

       /*
        foreach($lista_usuarios as $key => $value){
            echo $value['nome'];
            echo '<hr>';
        }
        */


    }catch(PDOException $e){

        echo '<strong> Código Erro :</strong> '. $e->getCode();
        echo '<br>';
        echo '<strong>Mensagem : </strong>'. $e->getMessage();

    }

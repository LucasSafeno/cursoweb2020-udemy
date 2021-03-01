<?php


    # Parametros acesso MySQL

    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $usuario = 'root';
    $senha = '';

    # Conexão

    try{

        # Instancia PDO para conexão
        $conexao = new PDO($dsn, $usuario, $senha);

    

    }catch(PDOException $e){
        echo '<strong>Error Code : </strong>'.$e->getCode();
        echo '<br>';
        echo '<strong>Mensagem : </strong>'.$e->getMessage();
    }
<?php

    // Parametros acesso MySQL

    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $usuario = 'root';
    $senha = '';

    try{
         // Criar instancia do PDO com informações de acesso MySQL
        $conexao = new PDO($dsn, $usuario, $senha);

    }catch(PDOException $e){
        echo 'Erro : '.$e->getCode().' <br>Mensagem : '.$e->getMessage();
        //registrar erro

    }

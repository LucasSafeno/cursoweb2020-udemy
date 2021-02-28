<?php

    // Parametros acesso MySQL

    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $usuario = 'root';
    $senha = '';

    try{
         // Criar instancia do PDO com informações de acesso MySQL
        $conexao = new PDO($dsn, $usuario, $senha);

        /* Executar instruções SQL (exc)
        $query = '
            create table tb_usuarios(
                id int not null primary key auto_increment,
                nome varchar(50) not null,
                email varchar(100) not null,
                senha varchar(32) not null
            )
            ';

       $retorno =  $conexao->exec($query);
       echo $retorno;
                */

       $query = '
            delete from tb_usuarios
       ';

       $retorno = $conexao->exec($query);
       echo $retorno;



    }catch(PDOException $e){
        echo 'Erro : '.$e->getCode().' <br>Mensagem : '.$e->getMessage();
        //registrar erro

    }

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
                

       $query = '
           insert into tb_usuarios(
               nome, email, senha)
               values(
                   "Lucas Tenorio", "lugnorio@gmail.com", "123456"
                   )
                ';

        $conexao->exec($query);

                ##########################

        $query = '
        insert into tb_usuarios(
            nome, email, senha)
            values(
                "Thauanna Santos ", "ethauanna@gmail.com", "456789"
                )
                ';

         $conexao->exec($query);

                ##########################

     $query = '
     insert into tb_usuarios(
         nome, email, senha)
         values(
             "Daniel Tenório", "dg.cavalcanti@gmail.com", "654321"
             )
            ';

    $conexao->exec($query);
       
    */

    $query =  '
            select * from tb_usuarios
    ';

    $stmt = $conexao->query($query);

    $lista = $stmt->fetchAll();

    echo '<pre>';
    print_r($lista);
    echo '</pre>';


    }catch(PDOException $e){
        echo 'Erro : '.$e->getCode().' <br>Mensagem : '.$e->getMessage();
        //registrar erro

    }

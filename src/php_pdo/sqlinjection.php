<?php

    if(!empty($_POST['usuario']) && !empty($_POST['senha'])){

        # parametros mysql
    $dsn = 'mysql:host=localhost;dbname=php_pdo';
    $usuario = 'root';
    $senha = '';

        # Conexão
    try{

        # Instancia PDO
        $conexao = new PDO($dsn, $usuario, $senha);


        # Query

        $query = "
            SELECT *
            FROM tb_usuarios
            WHERE
        ";
        $query .= "email = '{$_POST['usuario']}' ";
        $query .= " AND senha  = '{$_POST['senha']}' ";
        
        echo $query;

       # $stmt = $conexao->query($query);
       # $usuario = $stmt->fetch();
        echo '<hr>';

        echo '<pre>';
        # print_r($usuario);
        echo '</pre>';

    }catch(PDOException $e){
        echo 'Error Code : '.$e->getCode();
        echo '<br>';
        echo 'Message : '.$e->getMessage();

    }

    }

?>
<html>
    <head>
        <title> SQLInjection </title>
        <meta charset="UTF-8">
    </head>
    <body>

    <form method="post" action="">

        <input type="text" placeholder="usuario" name="usuario">
        <br>
        <input type="password" placeholder="senha" name="senha">
        <br>

        <button type="submit">Entrar</button>
    </form><!-- //form !-->

    </body>
</html>
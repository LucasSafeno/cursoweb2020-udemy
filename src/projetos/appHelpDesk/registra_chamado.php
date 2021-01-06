<?php
    session_start();



    // Montagem do arquivo
   $titulo = str_replace('#', '-', $_POST['titulo']);
   $categoria = str_replace('#', '-', $_POST['categoria']);
   $descricao = str_replace('#', '-', $_POST['descricao']);

   $texto = $_SESSION[id] . '#' . $titulo . '#' .$categoria . '#' . $descricao . PHP_EOL;

    // Abertura do arquivo
   $arquivo = fopen('arquivo.hd', 'a');

    // Escrevendo no arquivop

    fwrite($arquivo, $texto);

    // Fechando o Arquivo

    fclose($arquivo);


    header("Location: abrir_chamado.php");
    

?>
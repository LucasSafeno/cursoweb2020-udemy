<?php
    session_start();
/*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';


    // Remover indices
    // unset();


    unset($_SESSION['x']);

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    // destruir a variavel sessão
    session_destroy();
    // forçar redirecionamento

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
    
*/

    session_destroy();
    header("Location: index.php");


?>
<?php
    namespace App\Controllers;

    //Recursos do Framework
    use MF\Controller\Action;
    use MF\Model\Container;

    class AuthController extends Action{

        # Autenticar
        public function autenticar(){
           
            # Cria Instancia Modelo Usuario para seta valores
            $usuario = Container::getModel('Usuario');
            $usuario->__set('email', $_POST['email']);
            $usuario->__set('senha', md5($_POST['senha']));

            # Metodo para chegar no BD se o usario Existe
            $usuario->autenticar();

            if($usuario->__get('id') != '' && $usuario->__get('nome') != ''){
            
                    session_start();

                    $_SESSION['id'] = $usuario->__get('id');
                    $_SESSION['nome'] = $usuario->__get('nome');

                    header('Location: /timeline');

            }else {
                header('Location: /?login=erro');
            }
          
        }# [/Autenticar()]

        public function sair(){
            session_start();

            session_destroy();

            header('Location: /');

        }# [/sair()]


    } # [/AuthController]

?>
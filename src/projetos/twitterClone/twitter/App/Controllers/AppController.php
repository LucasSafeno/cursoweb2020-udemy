<?php

namespace App\Controllers;

//Recursos MiniFramework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action{

    public function timeline(){
  
        $this->validaAutenticacao();

                #recuperar tweets
                $tweet = Container::getModel('Tweet');

                $tweet->__set('id_usuario', $_SESSION['id'] );

                $tweets = $tweet->getAll();
                $this->view->tweets = $tweets;
            
            $this->render('timeline');
     

    } # [/timeline()]

    public function tweet(){

        $this->validaAutenticacao();

                $tweet = Container::getModel('Tweet');

                $tweet->__set('tweet', $_POST['tweet']);
                $tweet->__set('id_usuario', $_SESSION['id']);

                $tweet->salvar();

                header('Location: /timeline');


    }# [/#tweet()]

    
    public function validaAutenticacao(){

        session_start();

        if(!isset($_SESSION['id']) || $_SESSION['id'] == '' || !isset($_SESSION['id']) || $_SESSION['id'] ==  ''){
            header('Location: /timeline');
        }

    } # [validaAutenticacao()]


} # [/AppController]
?>
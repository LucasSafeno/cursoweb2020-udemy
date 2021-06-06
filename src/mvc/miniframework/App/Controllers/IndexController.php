<?php

    namespace App\Controllers;

    # [IndexController]
    class IndexController {


        private $view;

        public function __construct(){

            $this->view = new \stdClass();

        } # [/construct()]

        public function index(){

            $this->view->dados = array('Sofá', 'Cadeira', 'Cama');
            $this->render('index');

        } # [index()]

        public function sobreNos(){

            $this->view->dados = array('Notebook', 'Smartphone');
            $this->render('sobreNos');

        }# [/sobreNos]


        public function render($view){
            $classeAtual =  get_class($this);

            $classeAtual =  str_replace('App\\Controllers\\', '', $classeAtual);
            
            $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));


            require_once "../App/Views/".$classeAtual."/".$view.".phtml";
        } # [/render()]

    } # [/IndexController]



?>
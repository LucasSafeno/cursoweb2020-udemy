<?php

namespace App\Controllers;

//Recursos MiniFramework
use MF\Controller\Action;
use MF\Model\Container;

//


class IndexController extends Action {

	public function index() {

		$this->view->login = isset($_GET['login']) ? $_GET['login'] : '';
		$this->render('index');
		
	} # [/index()]

	public function inscreverse(){


		$this->view->usuario = array (
			'nome'	=> '',
			'email'	=> '', 
			'senha'	=> '',
		);


		$this->view->erroCadastro = false;

		$this->render('inscreverse');

	} # [/inscreverse()]

	public function registrar(){

		//receber dados
		$usuario = Container::getModel('Usuario');
		
		$usuario->__set('nome', $_POST['nome']);
		$usuario->__set('email', $_POST['email']);
		$usuario->__set('senha', $_POST['senha']);

		if($usuario->validarCadastro() && count($usuario->getUsuarioPorEmail()) == 0){
	
				$usuario->salvar();

				$this->render('cadastro');

		}else{
			$this->view->usuario = array (
				'nome'	=> $_POST['nome'],
				'email' => $_POST['email'], 
				'senha' => $_POST['senha'],
			);

			$this->view->erroCadastro = true;

			$this->render('inscreverse');
		}
		
		// Sucesso


		// Error


	} # [/registrar[]]


} # [/IndexController]


?>
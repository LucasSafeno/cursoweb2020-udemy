<?php

namespace App\Controllers;

//Recursos MiniFramework
use MF\Controller\Action;
use MF\Model\Container;
//Models
use App\Models\Produto;
use App\Models\Info;


class IndexController extends Action {

	public function index() {

		//$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

		$produto = Container::getModel('Produto');

		$produtos = $produto->getProdutos();

		$this->view->dados = $produtos;

		$this->render('index', 'layout1');
	}

	public function sobreNos() {
		
		$info = Container::getModel('Info');

		$informacoes =  $info->getInfo();

		$this->view->dados = $informacoes;
		//$this->view->dados = array('Notebook', 'Smartphone');
		$this->render('sobreNos', 'layout1');
	}

}


?>
<?php

namespace App\Controllers;

//Recursos MiniFramework
use MF\Controller\Action;
use MF\Model\Container;


class IndexController extends Action {

	public function index() {

		$this->render('index');
		
	} # [/index()]

	public function inscreverse(){

		$this->render('inscreverse');

	} # [/inscreverse()]


} # [/IndexController]


?>
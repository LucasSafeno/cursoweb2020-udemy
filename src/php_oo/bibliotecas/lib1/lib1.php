<?php

namespace A;

class Cliente implements CadastroInterface{

    public $nome = 'Lucas';
    
    public function __construct(){
        echo '<pre>';
        print_r(get_class_methods($this));
        echo '</pre>';
    }

    public function __get($attr){
        return $this->$attr;  
    }

    public function remover(){
        echo 'Remover';
    }

    public function salvar(){
        echo 'Salvar';
    }


} // class Cliente B

interface CadastroInterface{
    public function remover();
}


?>
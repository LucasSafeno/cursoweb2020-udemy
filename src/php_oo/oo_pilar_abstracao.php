<?php
    
    // modelo
    class Funcionario{
        
        // atributos
            public $nome = null;
            public $telefone = null;
            public $numFilhos = null;
            public $cargo = null;
            public $salario = null;


        // getters e setters (overloading / sobrecarga)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }


        /* getters e setters
        function setNome($nome){
            $this->nome = $nome;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }
        

        function getNome(){
            return $this->nome;
        }

        function getNumfilhos(){
            return $this->numFilhos;
        }
        */

        // metodos
            function resumidCadFunc(){
                return $this->__get('nome') ." possui ". $this->__get('numFilhos'). " filho(s)"; 
            }

            function modificarNumFilhos($numFilhos){
                // Afetar um atributo do objeto
                $this->numFilhos = $numFilhos;
            }

    } // fim classe Funcionario


    $y = new Funcionario();
    $y->__set('nome', 'Lucas');
    $y->__set('numFilhos', '5');
    $y->__set('telefone', '81979028685');
    $y->__set('cargo', 'Programador');
    $y->__set('salario', 35000);
    echo $y->resumidCadFunc();


    //echo 'Funciońario ' . $y->__get('nome') .' têm ' . $y->__get('numFilhos') . ' filho(s),
     //número para contato :  ' . $y->__get('telefone') . ', cargo : ' . $y->__get('cargo') . 
     //' com salário de : ' . $y->__get('salario');
      

    echo '<br>';

    $x = new Funcionario();
    $x->__set('nome', 'Thauanna');
    $x->__set('numFilhos', '3');
    $x->__set('telefone', '81997803781');
    $x->__set('cargo', 'CEO');
    $x->__set('salario', 10000);
    echo $x->resumidCadFunc();


    //echo 'Funciońario ' . $x->__get('nome') .' têm ' . $x->__get('numFilhos') . ' filho(s),
     //número para contato :  ' . $x->__get('telefone') . ', cargo : ' . $x->__get('cargo') . 
     //' com salário de : ' . $x->__get('salario');

?>
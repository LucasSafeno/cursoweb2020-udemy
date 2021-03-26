<?php
    class Carro extends Veiculo{
     
        public $tetoSolar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição volante';
        }
    } // class Carro


    class Moto extends Veiculo{

        public $contraPesoGuidao =  true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinar';
        }


        function trocarMarcha(){
            echo 'Desengatar embreagem com o mão  e engartar a marcha com a pé';
        }

    } // class Moto

    class Caminhao extends Veiculo{

    } // class caminhao


    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }

        function frear(){
            echo 'Frear';
        }

        function trocarMarcha(){
            echo 'Desengatar embreagem com o pé e engartar a marcha com a mão';
        }

    }// class veiculo

    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF4567', 'Preto');
    $caminhao = new Caminhao();

    echo '<br>';
    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';
    $caminhao->trocarMarcha();

    


?>
<?php

    class Pai{
        private $nome = 'Lucas';
        protected $sobrenome = 'Tenório';
        public $humor = 'Feliz';

        /*
        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }
        */
      
        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){
            $x = rand(1,10);

            if($x >= 1 && $x >= 8){
                $this->responder();
            }else {
                $this->executarMania();
            }
            
           
        }


    } // class Pai

    class Filho extends Pai{
        public function getAtributo($attr){
            return $this->$attr;
        }

        public function setAtributo($attr, $value){
            $this->$attr = $value;
        }

    } // clas filho

    $filho = new Filho();
    echo '<pre>';
    print_r($filho);
    echo '</pre';

    echo '<br>';
    
    echo $filho->setAtributo('nome', 'thauanna');
    echo '<br>';    
    $filho->setAtributo('humor', 'Triste');
    echo $filho->getAtributo('nome');


    echo '<pre>';
    print_r($filho);
    echo '</pre';

    /*
    $pai = new Pai();
    echo $pai->executarAcao();
    */



?>
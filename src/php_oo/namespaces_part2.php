<?php

#Importando lib
require "bibliotecas/lib1/lib1.php";
require "bibliotecas/lib2/lib2.php";

use A\Cliente as C1;
use B\Cliente;

$c = new C1;
print_r($c);
echo $c->__get('nome');


$cc = new Cliente;
print_r($cc);
echo $cc->__get('nome');


?>
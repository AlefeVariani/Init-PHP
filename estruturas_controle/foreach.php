<?php
/**
* Referência
* @link http://php.net/manual/pt_BR/control-structures.foreach.php
* 
* Um dos laços mais usado no PHP
*/

$numeros = array(1,2,12,4,5,6);

foreach ($numeros as $numero) {
	echo $numero . "=";
} 

#--------------------------------
#--------------------------------

$nomes = array("Ale", "Ron", "Mare", "Ada", "Dre", "Var");

foreach ($nomes as $i => $nome) {
	echo " Posicao " . $i . " nome " . $nome;
}

#--------------------------------
#--------------------------------

//Sintase alternativa

$alfabeto = array("a","b","c","d","e");

foreach ($alfabeto as $a):
	echo $a;
endforeach;
	
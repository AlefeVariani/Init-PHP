<?php

/**
* Referência  
* @link http://php.net/manual/pt_BR/control-structures.if.php 
*/

$d = "Alefe";

if ($d != "Alefe") { // Sintase basico do if
	echo "Nome informado não é $d";
}

echo "Nome informado é $d";

#-----------------------------------------
#-----------------------------------------

$c = true;

if ($c == false)
	echo "Valor de $c é FALSE";

echo "Valor de $c é TRUE";

#-----------------------------------------
#-----------------------------------------

$a = 12;

if ($a > 10) { // Sintase basico do if else
	echo "O numero $a é maior que 10";
} else {
	echo "O numero $a é menor que 10";
}

#-----------------------------------------
#-----------------------------------------

$b = 9;

if ($b < 10) :// Sintase alternartiva do if else
	echo "O numero $b é menor que 10";
else :
	echo "O numero $b é maior que 10";
endif;

#-----------------------------------------
#-----------------------------------------

$e = 100;

if ($e > 100) {
	echo "Valor $e é maior que 100";
} elseif ($e == 100) {
	echo "Valor $e é igual a 100";
} else {
	echo "Valor $e é menor que 100";
}






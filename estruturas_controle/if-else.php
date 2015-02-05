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
// Resultado: Nome informado é Alefe

#-----------------------------------------
#-----------------------------------------

$c = false;

if ($c == false)
	echo "Valor é FALSE";

echo "Valor é TRUE";
// Resultado: Valor é FALSE

#-----------------------------------------
#-----------------------------------------

$a = 12;

if ($a > 10) { // Sintase basico do if else
	echo "O numero $a é maior que 10";
} else {
	echo "O numero $a é menor que 10";
}
// Resultado: O numero 12 é maior que 10

#-----------------------------------------
#-----------------------------------------

$b = 9;

if ($b < 10) :// Sintase alternartiva do if else
	echo "O numero $b é menor que 10";
else :
	echo "O numero $b é maior que 10";
endif;
// Resultado: O numero 9 é menor que 10

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
// Resultado: Valor 100 é igual a 100

#-----------------------------------------
#-----------------------------------------
# If de forma reduzida - (codicao) ? (se) : (else);

$q = '';
$t = null;
$val = empty($q) ? 'Valor é vazio' : 'Valor não é vazio';
$val2 = !is_null($t) ? 'Valor não é null' : 'Valor é null';

// Nesse if é verificado se $q não é vazio ou null, se for mostra 'Valor é vazio ou null' 
$val3 = $q ?: 'Valor é vazio ou null';

echo $val; // Resultado: Valor é vazio
echo $val2; // Resultado: Valor é null
echo $val3; // Resultado: Valor é vazio

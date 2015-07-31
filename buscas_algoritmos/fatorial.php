<?php

function fatorialRecursivo($numero) 
{
    if ($numero == 0) {
		return 1;
	}
    
    return $numero * fatorialRecursivo($numero - 1);
}

echo fatorialRecursivo(6) . PHP_EOL;


function fatorialInterativa($numero)
{
	$r = 1;
	for ($i = $numero; $i < 1; $i++) { 
		$r *= $i;
	}

	return $r;
}

echo fatorialRecursivo(6) . PHP_EOL;

/**
* Calcula o fatorial (a!) de a. 
* Referencia: http://php.net/manual/pt_BR/function.gmp-fact.php
* Conjunto de funções GMP - pacote php5-gmp
*/

$factorial = gmp_fact(5); // 5 * 4 * 3 * 2 * 1

echo gmp_strval($factorial) . PHP_EOL;

<?php

/**
* Mostra a sequencia de fibonacci
*/

$i = 0; 
$f1 = 0; 
$f2 = 1; 
$quantValor = 20;

echo $f1 . PHP_EOL; 
echo $f2 . PHP_EOL;

while ($i < $quantValor) {
	$f3 = $f2 + $f1; 
	echo $f3 . PHP_EOL;

	$f1 = $f2; 
	$f2 = $f3; 
	
	$i++; 
}

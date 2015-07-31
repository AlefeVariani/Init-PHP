<?php

/**
* Mostra a sequencia de fibonacci e o tempo de execução
*/

function tempo() {
    $tempo = microtime(true); 
    
    return $tempo;
}

$tempoInicio = tempo(); 

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

$tempoFim = tempo();

echo 'Tempo de execução ' . number_format(($tempoFim - $tempoInicio), 6) . 'ms' . PHP_EOL;

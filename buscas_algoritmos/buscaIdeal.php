<?php

$arquivoLeitura = isset($argv['1']) ? $argv['1'] : '';
$arquivoDadosOrdenados = isset($argv['2']) ? $argv['2'] : '';

function insertionSort(array $array) 
{
    for($i = 1; $i < count($array); $i++){
	$copiado = (int) $array[$i];
	$j = (int) $i;
        while (($j > 0 ) && ($copiado < $array[$j-1])){
            $array[$j] = $array[$j-1];
            $j--;
        }
        $array[$j] = $copiado;	
    }

    return $array;
}

if (file_exists('logs.txt')) {
	unlink('logs.txt');
}

function quicksort(array $array) 
{
	$a = 0;
    if (count($array) < 2) {
        return $array;
    }
    $left = $right = [];
    reset($array);
    $pivot_key  = (int) key($array);
    $pivot  = (int) array_shift($array);
    foreach ($array as $k => $v) {
        if ((int)$v < $pivot) {
            $left[$k] = (int) $v;
        } else {
            $right[$k] = (int) $v;
        }
    }

	$a += !empty($left) ? $a++ : '';// insere 0 se não foi alterado e 1 se encontrar alteração
	file_put_contents('logs.txt', (int) $a . PHP_EOL, FILE_APPEND);
	    
    return array_merge(quicksort($left), [$pivot_key => $pivot], quicksort($right));
}

$array = file($arquivoLeitura);
$vetorOrdenadoQuick = quicksort($array);

$logs = file('logs.txt');
$numeroAlteracoes = 0;
foreach ($logs as $valor) {
	$numeroAlteracoes += (int) $valor;
}
echo "Numero de interações " . $numeroAlteracoes . PHP_EOL;

if ($numeroAlteracoes < 10) {
	echo "Método Insertion Sort utilizado" . PHP_EOL;
	$vetorOrdenadoInsertion = insertionSort($array);
	foreach ($vetorOrdenadoInsertion as $valor) {
	    file_put_contents($arquivoDadosOrdenados, (int) $valor . PHP_EOL, FILE_APPEND);
	}
} else {
	echo "Método Quick Sort utilizado" . PHP_EOL;
	foreach ($vetorOrdenadoQuick as $valor) {
	    file_put_contents($arquivoDadosOrdenados, (int) $valor . PHP_EOL, FILE_APPEND);
	}
}

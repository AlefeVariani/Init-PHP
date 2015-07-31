<?php

$arquivoLeitura = isset($argv['1']) ? $argv['1'] : 'numerosDecrescentes100.txt';
$arquivoNumerosOrdenados = isset($argv['2']) ? $argv['2'] : 'numerosOrdenados.txt';

function tempo() {
    $tempo = microtime(true); 
    
    return $tempo;
}

$tempoInicio = tempo(); 

function insertionSort(array $array) {
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

$array = file($arquivoLeitura);
$arrayOrdenado = insertionSort($array);

$tempoFim = tempo();

echo 'Tempo de execução ' . number_format(($tempoFim - $tempoInicio), 6) . 'ms' . PHP_EOL;

foreach ($arrayOrdenado as $valor) {
    file_put_contents($arquivoNumerosOrdenados, (int) $valor . PHP_EOL, FILE_APPEND);
}


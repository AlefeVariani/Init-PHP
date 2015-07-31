<?php

$arquivoLeitura = isset($argv['1']) ? $argv['1'] : 'numerosDecrescentes100.txt';
$arquivoNumerosOrdenados = isset($argv['2']) ? $argv['2'] : 'numerosOrdenados.txt';

function tempo() {
    $tempo = microtime(true); 
    
    return $tempo;
}

$tempoInicio = tempo();

function quicksort(array $array) {
    if(count($array) < 2) {
        return $array;
    }
    $left = $right = [];
    reset($array);
    $pivot_key  = (int) key($array);
    $pivot  = (int) array_shift($array);
    foreach($array as $k => $v) {
        
        if ((int)$v < $pivot) {
            $left[$k] = (int) $v;
        } else {
            $right[$k] = (int) $v;
        }
    }
    
    return array_merge(quicksort($left), [$pivot_key => $pivot], quicksort($right));
}

$array = file($arquivoLeitura);
$arrayOrdenado = quicksort($array);

$tempoFim = tempo();

echo 'Tempo de execução ' . number_format(($tempoFim - $tempoInicio), 6) . 'ms' . PHP_EOL;

//foreach ($arrayOrdenado as $valor) {
//    file_put_contents($arquivoNumerosOrdenados, (int) $valor . PHP_EOL, FILE_APPEND);
//}


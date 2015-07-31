<?php

$arquivoLeitura = isset($argv['1']) ? $argv['1'] : 'numerosDecrescentes100.txt';
$arquivoNumerosOrdenados = isset($argv['2']) ? $argv['2'] : 'numerosOrdenados.txt';

function tempo() {
    $tempo = microtime(true); 
    
    return $tempo;
}

$tempoInicio = tempo(); 

function bubbleSort(array $arr) {
    $sorted = false;
    while (false === $sorted) {
        $sorted = true;
        for ($i = 0; $i < count($arr)-1; ++$i) {
            $current = (int) $arr[$i];
            $next = (int) $arr[$i+1];
            if ($next < $current) {
                $arr[$i] = (int) $next;
                $arr[$i+1] = (int) $current;
                $sorted = false;
            }
        }
    }
    return $arr;
}

$array = file($arquivoLeitura);
$arrayOrdenado = bubbleSort($array);

$tempoFim = tempo();
echo 'Tempo de execução ' . number_format(($tempoFim - $tempoInicio), 6) . 'ms' . PHP_EOL;

foreach ($arrayOrdenado as $valor) {
    file_put_contents($arquivoNumerosOrdenados, (int) $valor . PHP_EOL, FILE_APPEND);
}


<?php

$arquivoLeitura = isset($argv['1']) ? $argv['1'] : '';
$chave = isset($argv['2']) ? $argv['2'] : 0;

function quicksort(array $array) 
{
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
    
    return array_merge(quicksort($left), [$pivot_key => $pivot], quicksort($right));
}

function par($param)
{
    if (bcmod($param,2)==0) {
        return true;
    } 
}
$array = file($arquivoLeitura);
$vetor = quicksort($array);

function pesquisa_binaria($chave, $inicio, $fim)
{
    global $vetor;

    echo "Inicio: $inicio Fim: $fim || ";
    if ($inicio > $fim) {
        echo "Chave não encontrada" . PHP_EOL; 
        exit;
    }

    if (par($inicio+$fim)) {
        $meio = ($inicio + $fim) / 2; 
    } else {
        $meio = ($inicio + $fim + 1) / 2;   
    }
    echo "Meio: $meio" . PHP_EOL;
    
    if ($chave == $vetor[$meio]) {
        echo "Chave encontrada" . PHP_EOL; 
        exit;
    }

    if ($chave < $vetor[$meio]) {
        pesquisa_binaria($chave,$inicio,$meio-1);
    } else {
        pesquisa_binaria($chave,$meio+1,$fim);  
    }
}

$inicio = 0;
$fim = count($vetor);
echo "Chave: $chave" . PHP_EOL;

pesquisa_binaria($chave, $inicio, $fim);

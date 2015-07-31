<title>algoDemoucron</title>
<meta charset="utf8">
<?php

function imprime($array)
{
    echo implode(', ', $array);
}

$matriz = [
    [0, 1, 0, 1, 1, 0, 0, 0, 0],
    [0, 0, 1, 0, 0, 1, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 1, 0],
    [0, 0, 0, 0, 0, 1, 0, 0, 0],
    [0, 0, 0, 0, 0, 1, 1, 0, 0],
    [0, 0, 0, 0, 0, 0, 1, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 0, 0]
];

function removeLinhaColuna ($array, $i)
{
    foreach ($array as $l => $value) {
        foreach ($value as $c => $val) {
            if ($c == $i) {
                unset($array[$l][$c]);
            }
        }

        if ($l == $i) {
            unset($array[$l]);
        }
    }
    
    return $array;
}

$vetorDeSoma = [0, 0, 0, 0, 0, 0, 0, 0];
$i = 0;

while (!empty($matriz)) {

    foreach ($matriz as $l => $valor) {
        foreach ($valor as $c => $val) {
            $vetorDeSoma[$c] += $val;
        }
    }
    
    echo "i = $i soma( ";
        echo imprime($vetorDeSoma) . ' )<br>';

foreach ($vetorDeSoma as $c => $soma) {
    if ($soma === 0){
        $matriz = removeLinhaColuna($matriz, $c);
        $vetor[$i][] = "V" . ($c + 1);
        $vetorDeSoma[$c] = '-';
    }
}

foreach ($vetorDeSoma as $c => $value) {
    if ($value != '-') {
        $vetorDeSoma[$c] = 0;
    }
}

$i++;
}

echo '<br>';

foreach ($vetor as $i => $valor) {
    echo "C$i { ";
    imprime($valor);
    echo " }<br>";
}

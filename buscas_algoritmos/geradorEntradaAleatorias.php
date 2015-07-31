<?php

$min = (int) $argv['1'];
$max = (int) $argv['2'];

$arquivo = "numerosAleatorios$max.txt";

foreach (range($min, $max) as $numero) {
    echo rand($min, $max) . PHP_EOL;
    file_put_contents($arquivo, rand($min, $max) . PHP_EOL, FILE_APPEND);
}

<?php

$min = (int) $argv['1'];
$max = (int) $argv['2'];

$arquivo = "numerosCrescentes$max.txt";

foreach (range($min, $max) as $numero) {
    echo $numero . PHP_EOL;
    file_put_contents($arquivo, (int) $numero . PHP_EOL, FILE_APPEND);
}

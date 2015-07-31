<?php

$min = (int) $argv['1'];
$max = (int) $argv['2'];

$arquivo = "numerosDecrescentes$max.txt";

for ($i = $max; $i >= $min; $i--) {
    echo $i . PHP_EOL;
    file_put_contents($arquivo, (int) $i . PHP_EOL, FILE_APPEND);
}

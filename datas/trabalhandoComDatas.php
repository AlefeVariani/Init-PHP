<?php

$dataAtual = new DateTime('now');

print_r($dataAtual) . PHP_EOL;
print_r($dataAtual->format('d/m/Y H:i')) . PHP_EOL;

$dataAtual2 = date('d/m/Y H:i');
print_r($dataAtual2);

$stringData = '2015-02-26';
print_r(date('d/m/Y', strtotime($stringData))) . PHP_EOL;
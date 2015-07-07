<?php

/**
* @link http://us3.php.net/manual/pt_BR/ref.array.php
*/

$arrayAlfabeto = array("a","b","c","e","f","g","h","i","j");
print_r(implode(',', $arrayAlfabeto)); // Transforma array em uma string, pelo seu caracte informado

$a = array_fill(1,5,'teste'); // Cria um array com 5 posições teste
print_r($a) . PHP_EOL;

$num = range(1,5);
shuffle($num); // Mistura posições do array
print_r($num) . PHP_EOL;

$arr = get_defined_functions(); // Informa todas as funções do PHP existentes

echo '<pre>';
print_r($arr);

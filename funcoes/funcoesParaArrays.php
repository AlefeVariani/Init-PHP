<?php

/**
* @link http://us3.php.net/manual/pt_BR/ref.array.php
*/

$arrayAlfabeto = array("a","b","c","e","f","g","h","i","j");
print_r(implode(',', $arrayAlfabeto)); // Transforma array em uma string, pelo seu caracte informado

$array1 = ['alefe', 'variani'];
array_push($array1, '21 anos'); // Adiciona um elemento no array
print_r($array1);

$array2 = ['brasil', 'argentina', 'colombia'];
array_pop($array2); // Retira a ultima posição do array
array_shift($array2); // Retira a primeira posição do array

$array3 = [1,2,3,4,5,6,7,8,9];
echo array_sum($array3); // Soma os elementos do array

$a = array_fill(1,5,'teste'); // Cria um array com 5 posições teste
print_r($a) . PHP_EOL;

$num = range(1,5);
shuffle($num); // Mistura posições do array
print_r($num) . PHP_EOL;

<?php

/**
* @link http://us3.php.net/manual/pt_BR/ref.strings.php
*/

echo strlen("Alefe Variani"); //Mostra tamanho da string

echo strtoupper("alefe"); // Mostra string em maiúculas

echo strtolower("ALEFE"); // Mostra string em minúsculas

$alfabeto = "a,b,c,e,f,g,h,i,j";
print_r(explode(',', $alfabeto)); // Divide a string em pedaços pelo delimitador ',' transformando em um array

$tes = "alefe variani chapeco sc brasil";
print strpos($tes, "chapeco"); // Mostra a posicao da ocorrencia de chapeco

$aub = "alefevariani";
print substr($aub, 3, 9); // Retorna parte da string, pelas posições

$ert = " abcdefg ";
print trim($ert); // Retira espaços do lado esquerdo e direito, menos do meio da string

$a = '';
var_dump(isset($a)); // Verifica se a variavel foi iniciada

$b = 'algumvalor';
var_dump(empty($b)); // Verfica se a variavel é vazia

$array = array('as','fd','rt','yt','gfd');
print count($array); // Retorna o número de elementos

print str_pad("Alefe Variani", 20, "_", STR_PAD_BOTH) . PHP_EOL; // Coloca na meio da string e preenche com _ o resto

echo str_repeat("_", 10) . PHP_EOL; // Repete 10 vezes o _

echo strrev("Hello world!") . PHP_EOL; // String de frente pra traz

$texto = 'qweqwe qweqw Alefe Variani';

echo strpbrk($texto, 'A') . PHP_EOL; // Pega apartir da primeira ocorrencia do A

$var_1 = 'Alefe  ';
$var_2 = 'Alefe';

similar_text($var_1, $var_2, $percent); // Compara a similiridade das strings

echo number_format($percent, 2) . "%" . PHP_EOL;

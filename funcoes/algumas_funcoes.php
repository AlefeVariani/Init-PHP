<?php

echo strlen("Alefe Variani"); //Mostra tamanho da string

echo strtoupper("alefe"); // Mostra string em maiúculas

echo strtolower("ALEFE"); // Mostra string em minúsculas

$alfabeto = "a,b,c,e,f,g,h,i,j";
print_r(explode(',', $alfabeto)); // Divide a string em pedaços pelo delimitador ',' transformando em um array

$arrayAlfabeto = array("a","b","c","e","f","g","h","i","j");
print_r(implode(',', $arrayAlfabeto)); // Transforma array em uma string, pelo seu caracte informado

$tes = "alefe variani chapeco sc brasil";
print strpos($tes, "chapeco"); // Mostra a posicao da ocorrencia de chapeco

$aub = "alefevariani";
print substr($aub, 3,9); // Retorna parte da string, pelas posições

$ert = " abcdefg "; 
print trim($ert); // Retira espaços do lado esquerdo e direito, menos do meio da string

$a = '';
var_dump(isset($a)); // Verifica se a variavel foi iniciada

$b = 'algumvalor';
var_dump(empty($b)); // Verfica se a variavel é vazia

$array = array('as','fd','rt','yt','gfd');
print count($array); // Retorna o número de elementos
 



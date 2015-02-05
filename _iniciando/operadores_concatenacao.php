<?php

/**
* Referência  
* @link http://php.net/manual/pt_BR/language.types.intro.php
* @link http://php.net/manual/pt_BR/language.operators.assignment.php
* @link http://php.net/manual/pt_BR/language.operators.string.php 
*/

$a = 10;
$b = 12;

$soma = $a + $b;
$subtrai = $a - $b;
$multipla = $a * $b;
$divide = $a / $b;

//------------------

$a++; // + 1, quando em um laço
$a--;
$a+= 5; // + 5
$a-= 4;
++$a; // + 1
--$a; // - 1

//------------------
// Concatenação

$nome = "Alefe";
$sobrenome = "Variani";

echo $nome.$sobrenome."Ok";
$nome .= "Variani";
echo $nome;

echo 'Nome: ', $nome, ' Sobrenome: ', $sobrenome;

echo "Nome: $nome Sobrenome: $sobrenome";

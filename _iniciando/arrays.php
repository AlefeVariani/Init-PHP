<?php

/**
 * Referência  
 * @link http://php.net/manual/pt_BR/language.types.array.php 
 */
$a[0] = "a";
$a[1] = "b";

echo $a; // Array

$animais = array("Gato", "Cachorro", "Coelho");
echo $animais[0]; // Gato

$nomes = array(0 => "Alefe", 1 => "Joao"); //indices podem ser informados
echo $nomes[0];

// Array associativos
$conf = array();
$conf["nome"] = "Alefe";
$conf["idade"] = "20";
$conf["linguagem"] = "PHP";

echo "Nome - " . $conf["nome"] . " Idade - " . $conf["idadde"];

$b = array(
    'times' => array(
        0 => 'gremio',
        1 => 'chapecoense',
        2 => 'boca junior'
    ),
    'selecoes' => array(
        'brasil',
        'alemanha',
        'argentina'
    )
);

#Obs.: Atualmento é recomendao a declaração de array assim []

$array = [];

$array2 = [
    'time' => [
        'chape'
    ]
];

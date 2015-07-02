<?php

/**
* Referência
* @link http://php.net/manual/pt_BR/tutorial.firstpage.php
*/

$nome = "Alefe Variani";

// Costante (é indicado definir constante com letra miusculas)
define('PI', 3.14159265359);

//exibe
echo $nome;

//exibe constante
echo PI;

// alem de exiber, pode retornar um resultado, função do PHP
print $nome;

print_r($nome . PHP_EOL); // PHP_EOL quebra de linha no terminal "\n"

var_dump($nome);

?>

<h1>Oi <?php echo $nome ?></h1>
<!--Outra maneira -->
<h1>Oi <?= $nome ?></h1>

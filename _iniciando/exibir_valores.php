<?php

/**
* Referência
* @link http://php.net/manual/pt_BR/tutorial.firstpage.php
*/

$nome = "Alefe Variani";

//exibe
echo $nome; 

// alem de exiber, pode retornar um resultado, função do PHP
print $nome;

print_r($nome);
 
var_dump($nome); 

?>

<h1>Oi <?php echo $nome; ?></h1>
<!--Outra maneira -->
<h1>Oi <?=$nome?></h1> 
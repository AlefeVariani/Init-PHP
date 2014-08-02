<?php

/**
* Referência
* @link http://php.net/manual/pt_BR/control-structures.for.php
* 
*/

// Sintase basica do for

$num = 25;

for ($num = 0; $num < 25; $num++) { 
	
	echo "$num ";

}

#-------------------------------------
#-------------------------------------

// Sintase alternativa do for 

$num1 = 10;

for ($num1 = 0; $num1 <= 10; $num1++): 

	print  " Numero " . $num1;

endfor;


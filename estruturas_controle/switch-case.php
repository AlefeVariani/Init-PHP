<?php 
/**
* Referência  
* @link http://php.net/manual/pt_BR/control-structures.while.php
*/

$i = 1;

switch ($i) {
	case 1:
		echo "Valor é 1";
		break;
	case 2:
		echo "Valor é 2";
		break;
	case 3:
		echo "Valor é 3";
		break;	
}

#------------------------------
#------------------------------

$a = 'w';

switch ($a) {
	case 'a':
		echo 'Letra a'; 
		break;
	case 'b':	
		echo 'Letra b'; 
		break;
	case 'c':	
		echo 'Letra c'; 
		break;
	default:
		echo 'Letra não encontrada';
		break;
}

#------------------------------
#------------------------------

$e = 8;

switch ($e):
	case 1:
		echo "Numero 1";
		break;
	case 2:
		echo "Numero 2";
		break;
	case 3:
		echo "Numero 3";
		break;
	case 4:
		echo "Numero 4";
		break;
	case 5:
	case 6:
	case 7:
	case 8:
	case 9:
	case 10:
		echo "Numero entre 5 e 10";
		break;	
	default:
		echo "Numero nao encontrado";
		break;
endswitch;

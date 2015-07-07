<?php

/**
* @link http://php.net/manual/pt_BR/ref.info.php
*/

echo zend_version() . PHP_EOL; // Versão Zend engine que esta rodando

echo phpinfo() . PHP_EOL; // Informaçõe sobre o php instalado

echo phpversion() . PHP_EOL; // Versão do PHP instalado

$arr = get_defined_functions(); // Informa todas as funções do PHP existentes

echo '<pre>';
print_r($arr);

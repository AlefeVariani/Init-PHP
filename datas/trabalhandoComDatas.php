<?php
/**
 * Referências:
 * http://php.net/manual/pt_BR/ref.datetime.php
 * http://php.net/manual/en/class.datetime.php
 */

$dataAtual = new DateTime('now');

print_r($dataAtual);
print_r($dataAtual->format('d/m/Y H:i') . PHP_EOL);

$dataAtual2 = date('d/m/Y H:i');
print_r($dataAtual2);

$stringData = '2015-02-26';
print_r(date('d/m/Y', strtotime($stringData)) . PHP_EOL);

$stringData2 = "02/06/2015";
str_replace('/', '-', $stringData2);
$objetoData2 = new \DateTime($stringData2);
$objetoData2->modify('+ 5 day - 1 month + 1 years');
print_r($objetoData2->format('Y-m-d H:i:s') . PHP_EOL);

$stringData3 = '19/03/2015';
list($dia, $mes, $ano) = explode('/', $stringData3);
$objetoData3 = new \DateTime("$ano-$mes-$dia");
print_r($objetoData3->format('y-m-d') . PHP_EOL);

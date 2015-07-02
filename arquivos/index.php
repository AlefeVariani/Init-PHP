<?php

/* 1º Forma */

//Grava no arquivo, limpando e reescrevendo a nova string 
$arquivo = "logs/arquivo_logs.log";
file_put_contents($arquivo, "Teste arquivo arquivo_logs.log");

//Grava no arquivo, sem limpar o que está dentro, adicionando no final 
// PHP_EOL = \n
$arquivo2 = "logs/arquivo2_logs.log";
file_put_contents($arquivo2, "Teste arquivo arquivo2_logs.log" . PHP_EOL, FILE_APPEND);

//Retorna o conteudo em ARRAY
$a = file($arquivo);
echo $a[0] . '<hr>';

//Retorna o conteudo em uma STRING 
$b = file_get_contents($arquivo2);
echo nl2br($b) . '<hr>';


/* 2º Forma */

$arquivo3 = "logs/arquivo3_logs.log";

$fh = fopen($arquivo3, 'r');
fwrite($fh, "Teste arquivo arquivo3_logs.log" . PHP_EOL);

while ($row = fgets($fh)) {
    echo $row . '<br>';
}
//ou
while (!feof($fh)) {
    echo fgets($fh) . '<br>';
}

fclose($fh);

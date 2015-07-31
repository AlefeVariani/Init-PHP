<title>algoFloyd</title>
<meta charset="utf8">
<?php

function imprime($array)
{
	echo '<pre>';
	foreach ($array as $arr) {
		foreach ($arr as $p => $a) {
			echo $a;
			echo ($p == (count($array) - 1)) ? '<br>' : ' ';
		}
	}
	echo '</pre>';
}

$matriz = array(
	array(0,3,2,4),
	array(4,0,999,1),
	array(2,1,0,2),
	array(5,1,2,0)
);

$matrizR = array(
	array(0,2,3,4),
	array(1,0,3,4),
	array(1,2,0,4),
	array(1,2,3,0)
);

for ($k=0; $k < count($matriz); $k++) { 
	for ($i=0; $i < count($matriz); $i++) { 
		for ($j=0; $j < count($matriz); $j++) { 
			if ($matriz[$i][$j] > $matriz[$i][$k] + $matriz[$k][$j]) {
				$matriz[$i][$j] = $matriz[$i][$k] + $matriz[$k][$j];
				$matrizR[$i][$j] = $k + 1;
				imprime($matriz);
				imprime($matrizR);
				echo '<hr>';
			}
		}
	}
}

$inicio = 3;
$fim = 2;
$ind_inicio = ($inicio - 1);
$ind_fim = ($fim - 1);
$meio = array();

$i = 0;
while ($matrizR[$ind_inicio][$ind_fim] != $fim) {
	$meio[$i] = $matrizR[$ind_inicio][$ind_fim];
	$ind_inicio = ($matrizR[$ind_inicio][$ind_fim] - 1);
	$i++;
}

echo "Inicio = $inicio <br>";
echo "Fim    = $fim <br>";
echo "$inicio -> ";

$j = 0;
while($j < $i) {
	echo $meio[$j] . " -> ";
	$j++;
}
echo "$fim <br>";

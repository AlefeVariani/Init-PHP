<?php

$time = time() + 3600;
$time = mktime(0,0,0,09,14,2015);

setcookie('idioma', 'pt_BR', $time);

if (isset($_COOKIE['idioma'])) {
	if ($_COOKIE['idioma'] == 'en_US') {
		echo "Hello, World";
	} elseif ($_COOKIE['idioma'] == 'pt_BR') {
		echo 'Olá, Mundo';
	}
}

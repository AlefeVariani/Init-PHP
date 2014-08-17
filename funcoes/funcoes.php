<?php

function fazSoma() { // Sem parâmetros 
    echo 3 + 2;
}
fazSoma();

function soma($a, $b) {  // Com dois parâmetros, $a e $b.
    return $a + $b;
}

echo soma(2,2);

<?php

// Sem parâmetros 
function fazSoma() 
{
    echo 3 + 2;
}
fazSoma();

// Com dois parâmetros, $a e $b.
function soma($a, $b) 
{  
    return $a + $b;
}

echo soma(2,2);

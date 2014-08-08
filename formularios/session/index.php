<?php

session_start();
$login = "ale";
$senha = "123";

if ($login == "ale" and $senha == "123") {
    $_SESSION['logado'] = true;
    echo"logou";
    header("location: secreto.php");
} else {
    echo"não logado";
}

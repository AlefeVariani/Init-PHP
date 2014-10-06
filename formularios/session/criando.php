<?php

session_start();

$_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

echo $_SESSION['ip'];

$_SESSION = array();

if (isset($_COOKIE[session_name()])) {
	setcookie(session_name(), '', time() - 4200);
}

session_destroy();
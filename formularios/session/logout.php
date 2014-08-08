<?php
session_start();

unset($_SESSION['logago']);

header("location: secreto.php");


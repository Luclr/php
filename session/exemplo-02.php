<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once("config.php");

//session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

//session_destroy();  


?>


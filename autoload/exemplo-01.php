<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($nomeClasse){

    require_once("$nomeClasse.php");
    
});


$carro = new Delrey();

$carro->acelerar(80);


?>
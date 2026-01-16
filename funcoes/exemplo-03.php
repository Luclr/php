<?php

function ola($texto, $periodo = "Bom dia"){

 return "Olá $texto! $periodo<br>";
}


echo ola("Mundo");
echo ola("","boa noite");
echo ola("Galera", "boa tarde");
echo ola("Pessoal","");



?>
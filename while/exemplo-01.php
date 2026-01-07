<?php

$condicao = true;

while($condicao){

    $numero = rand(1, 10);

    echo "Número sorteado: " . $numero . "<br/>";

    if($numero === 3){
        echo "TRÊS!!! <br/>";
        $condicao = false;
    }

    echo $numero . " "; 

}



?>

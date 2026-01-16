<?php

$qualASuaIdade = 125;

$idadeCrianca =12;
$idadeMaior =18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança.";
} else if ($qualASuaIdade < $idadeMaior) {
    echo "Adolescente.";
} else if ($qualASuaIdade < $idadeMelhor) {
    echo "Adulto.";
} else if ($qualASuaIdade >= $idadeMelhor) {
    echo "Idoso.";
}

else {
    echo "Não é criança.";
}


echo "<br/>";

echo ($qualASuaIdade < $idadeMaior) ? "Menor de idade." : "Maior de idade.";

?>
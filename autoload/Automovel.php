<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

interface Veiculo {

    public function acelerar($velocidade);

    public function freiar($velocidade);

    public function trocarMarcha($marcha);
}

abstract class Automovel implements Veiculo {

    public function acelerar($velocidade){
        echo "O veículo acelerou até " . $velocidade . " km/h <br>";
    }

    public function freiar($velocidade){
        echo "O veículo freiou ate " . $velocidade . " km/h <br> ";
    }

    public function trocarMarcha($marcha){
        echo "O veículo engatou a marcha <br>" . $marcha;
    }
}
?>
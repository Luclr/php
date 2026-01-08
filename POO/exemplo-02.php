<?php

// Ative erros enquanto estuda
ini_set('display_errors', 1);
error_reporting(E_ALL);

class Carro {
    private string $modelo;
    private float $motor;
    private int $ano;
    
    public function getModelo(): string {
        return $this->modelo;
    }

    public function setModelo(string $modelo): void {
        $this->modelo = $modelo;
    }

    public function getMotor(): float {
        return $this->motor;
    }

    public function setMotor(float $motor): void {
        $this->motor = $motor;
    }   

    public function getAno(): int {
        return $this->ano;
    }   

    public function setAno(int $ano): void {
        $this->ano = $ano;
    }           

    public function exibir(): array {
        return [
            "modelo" => $this->getModelo(),
            "motor"  => $this->getMotor(),
            "ano"    => $this->getAno()
        ];
    }
}

// Uso
$gol = new Carro();
$gol->setModelo("Gol GT");
$gol->setMotor(1.6);   // float
$gol->setAno(2020);    // int

var_dump($gol->exibir());

?>
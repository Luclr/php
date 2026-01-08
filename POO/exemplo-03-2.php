<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Documento {

    private $numero;

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {

        $resultado = Documento::validarCPF($numero);

        if ($resultado === false) {
            throw new Exception("CPF informado não é válido");
        }

        $this->numero = $numero;
    }

    public static function validarCPF($cpf) {

        if (empty($cpf)) {
            return false;
        }

        $cpf = preg_replace('/[^0-9]/', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        if (strlen($cpf) != 11) {
            return false;
        }

        if (preg_match('/^(\d)\1{10}$/', $cpf)) {
            return false;
        }

        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;

            if ($cpf[$c] != $d) {
                return false;
            }
        }

        return true;
    }
}

/*
$cpf = new Documento();
$cpf->setNumero("01375102095");

var_dump($cpf->getNumero());
*/

var_dump(Documento::validarCPF("01375102095"));
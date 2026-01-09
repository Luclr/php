<?php   

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Documento {   

private $numero;   

public function getNumero(){    
    return $this->numero;   

}   

public function setNumero($n){  
    $this->numero = $n; 
}   

}   

class CPF extends Documento {   

        public function validar():bool {   
            $numeroCPF = $this->getNumero(); 

            //Validação do CPF   
            return true;   
        }


}   

$doc = new CPF();   

$doc->setNumero("12345678900");

$doc->validar();

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

?>  
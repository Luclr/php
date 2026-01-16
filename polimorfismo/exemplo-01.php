<?php              

ini_set('display_errors', 1);
error_reporting(E_ALL);

abstract class animal {            

    public function falar(){               
    return "Som";              

}              

    public function mover(){               
    return "Anda";             
}              

}                  

class cachorro extends animal {            

    public function falar(){               
    return "Late";            
}              
}              

class Gato extends animal {

    public function falar(){               
    return "Mia";             
}              
}

class Passaro extends animal {

    public function falar(){               
    return "Canta";
    }
    public function mover(){               
    return "Voa e " . parent::mover();

    }
}              


$pluto = new cachorro();

echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "____________________________<br>";

$garfield = new Gato();

echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo "____________________________<br>";

$ave = new Passaro();

echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";

?>             
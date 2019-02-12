<?php

abstract class Animal {
    public function falar(){
        return "Som";
    }
    
    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{ 
    public function falar(){
        return "Late";
    }
}

class Gato extends Animal{ 
    public function falar(){
        return "Mia";
    }
}


class Passaro extends Animal{ 
    public function falar(){
        return "Canta";
    }

    public function mover(){
        return "Voa e " . parent::mover();
    }
}



$dog = new Cachorro();
echo $dog->falar();
echo "<br>";
echo $dog->mover();

echo "<hr>";

$cat = new Gato();
echo $cat->falar();
echo "<br>";
echo $cat->mover();

echo "<hr>";

$bird = new Passaro();
echo $bird->falar();
echo "<br>";
echo $bird->mover();
?>
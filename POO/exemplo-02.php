<?php
class Carro {
    private $modelo;
    private $motor;
    private $ano;
    
    public function getModelo(){
        return $this->modelo;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    
    public function getMotor(){
        return $this->motor;
    }
    
    public function setMotor($motor){
        $this->motor = $motor;
    }
    
    public function getAno(){
        return $this->ano;
    }
    
    public function setAno($ano){
        $this->ano = $ano;
    }
    
    public function exibir(){
        echo $this->getModelo();
        echo "<br>";
        echo $this->getMotor();
        echo "<br>";
        echo $this->getAno();
    }
}

$carro = new Carro();
$carro->setModelo("Onix");
$carro->setMotor("1.0");
$carro->setAno("2013");

$carro->exibir();

?>
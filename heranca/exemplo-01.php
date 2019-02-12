<?php

class Documento {
    private $numero;
    
    public function getNumero(){
        return $this->numero;
    }
    
    public function setNumero($value){
        $this->numero = $value;
    }
}

class CPF extends Documento {
    public function validar(): bool {
        $numeroCPF = $this->getNumero();
        // Validação CPF
        return true;
    }
}

$doc = new CPF();
$doc->setNumero("111222333-44");
echo $doc->validar();
echo "<br>";
echo $doc->getNumero();
?>
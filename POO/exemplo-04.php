<?php
class Endereco {
    private $values;
    
    public function __construct($a, $b, $c){
        $this->setLogradouro($a);
        $this->setNumero($b);
        $this->setCidade($b);
    }
    
    public function __call($name, $value){
        $val = $value;
        if(count($value) == 1) $val = $val[0];
        
        $this->values[strtolower(str_replace('set', '', $name))] = $val;
    }
    
    public function getValues(){
        var_dump($this->values);
    }
}

$endereco = new Endereco("Rua Diogo Miguel Parra Rodrigues", 973, "Tabapuã");
$endereco->getValues();
?>
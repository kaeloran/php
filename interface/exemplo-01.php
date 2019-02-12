<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo {
    public function acelerar($velocidade){
        echo "O veículo acelerou até $velocidade";
    }
    
    public function frenar($velocidade){
        echo "O veículo frenou até $velocidade";
    }

    public function trocarMarcha($marcha){
        echo "O veículo mudou para a marcha $marcha";
    }
}

$carro = new Civic();
$carro->trocarMarcha(3);
?>
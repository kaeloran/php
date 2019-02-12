<?php
class Documento {
    private $numero;
    
    public function getNumero(){
        return $this->numero;
    }
    
    public function setNumero($numero){
        if(Documento::validarCPF($numero)){
            $this->numero = $numero;
        } else {
            $this->numero = "CPF Inválido";
        }
    }
    
    public static function validarCPF($cpf): bool{
        // Verifica se um número foi informado
        if(empty($cpf)) return false;
        
        // Elimina possível máscara
        $cpf = preg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        
        // Verifica se o número de dígitos informados é igual a 11
        if(strlen($cpf) != 11) {
            
            return false;
        }
        // Verifica se nenhuma das sequências inválidas abaixo
        // foi digitada. Caso afirmativo, retorna false
        else if($cpf == '00000000000' ||
        $cpf == '11111111111'||
        $cpf == '22222222222'||
        $cpf == '33333333333'||
        $cpf == '44444444444'||
        $cpf == '55555555555'||
        $cpf == '66666666666'||
        $cpf == '77777777777'||
        $cpf == '88888888888'||
        $cpf == '99999999999'){
            return false;
            
            // Calcula os dígitos verificadores para verificar se o 
            // CPF é válido
        } else {
            
            for($t = 9; $t < 11; $t++){
                for($d = 0, $c = 0; $c < $t; $c++){
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                
                $d = ((10 *$d) % 11) % 10;
                
                if($cpf[$c] != $d){
                    return false;
                }
            }
            return true;
        }
    }
    
    public function exibir(){
        echo $this->getNumero();
        echo "<br>";

    }
}

$documento = new Documento();
$documento->setNumero("12345678910");

$documento->exibir();

?>
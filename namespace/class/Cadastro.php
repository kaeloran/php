<?php

class Cadastro {
    private $nome;
    private $email;
    private $senha;

    public function getNome(): string {
        return $this->nome;
    }
    
    public function setNome($val) {
        $this->nome = $val;
    }
    
    public function getEmail(): string {
        return $this->email;
    }
    
    public function setEmail($val) {
        $this->email = $val;
    }
    
    public function getSenha(): string {
        return $this->senha;
    }
    
    public function setSenha($val) {
        $this->senha = $val;
    }
    
    public function __toString() {
        
        return json_encode(array(
            "nome" => $this->getNome(),
            "email" => $this->getEmail(),
            "senha" => $this->getSenha(),
        ));
    }
}

?>
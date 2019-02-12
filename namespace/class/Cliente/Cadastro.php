<?php
namespace Cliente {
    class Cadastro extends \Cadastro {
        
        public function registarVenda() {
            echo "Foi registrada uma venda pra o cliente " . $this->getNome();
        }
    }
}

?>
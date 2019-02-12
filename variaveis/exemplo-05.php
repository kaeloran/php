<?php 

$nome = "Kae";

function falarNome() {
    global $nome;
    echo $nome;
}

function falarNomeDenovo() {
    $nome = "Nova variável nome";
    echo $nome;    
}

falarNomeDenovo();

?>
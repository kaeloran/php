<?php
$a = 10;

function trocaValor($b){
    $b += 50;
    return $b;
}

function trocaValorReferencia(&$b){
    $b += 50;
    return $b;
}
echo $a . '<br>';

echo trocaValor($a) . '<br>';
echo trocaValorReferencia($a) . '<br>';

echo $a;
?>
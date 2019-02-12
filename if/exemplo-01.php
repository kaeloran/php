<?php

$qualSuaIdade = 30;

$idadeCrianca = 12;
$idadeAdulto = 18;
$idadeIdoso = 65;

if($qualSuaIdade <= $idadeCrianca){
    echo "Criança";
}else if($qualSuaIdade >= $idadeAdulto && $qualSuaIdade < $idadeIdoso){
    echo "Adulto";
}else if($qualSuaIdade >= $idadeIdoso){
    echo "Idoso";
}

?>
<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q - 1);

var_dump($texto);
echo "<br>";
$texto2 = trim(substr($frase, $q + strlen($palavra), strlen($frase)));

echo "<pre>";
var_dump($texto2);
echo "</pre>";
?>
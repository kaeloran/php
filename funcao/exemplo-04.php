<?php

function ola(){
    $argumentos = func_get_args();
    var_dump($argumentos);
}

echo ola("mundo", "cu", "buceta", "capo de fusca");
?>
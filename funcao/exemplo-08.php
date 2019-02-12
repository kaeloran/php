<?php
function soma(int ...$valores): float{
    return array_sum($valores);
}

echo soma(1, 2, 3, 4.5, 5);
?>
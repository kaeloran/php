<?php
function soma(int ...$valores) {
    return array_sum($valores);
}

echo soma(1, 2, 3, 4, 5);
?>
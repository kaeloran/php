<?php
setlocale(LC_ALL, 'pt_BR', "pt_BR.utf-8", "portuguese");

$ts = strtotime("2001-09-11");
echo date("l: d/m/Y H:i:s", $ts);
?>
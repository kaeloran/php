<?php

require_once("config.php");

$usuario = new Usuario();

$usuario->loadById(8);

var_dump($usuario);

?>
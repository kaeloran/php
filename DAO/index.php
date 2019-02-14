<?php

require_once("config.php");

$usuario = new Usuario();

// $usuario->loadById(8);
$usuario->login("master", "12345");
// $list = $usuario->getList();

// var_dump(json_encode($list));

var_dump($usuario);

?>
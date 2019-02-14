<?php

require_once("config.php");

$usuario = new Usuario();

// $usuario->loadById(8);
// $usuario->login("master", "12345");
// $list = $usuario->getList();

// var_dump(json_encode($list));
$usr = "Angelica";
$pass = "abcde12345";
$usuario->insert($usr, $pass);
$usuario->login($usr, $pass);

var_dump($usuario);

?>
<?php

require_once("config.php");
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma.sindeaux@hcode.com.br");
$cad->setSenha("123456");
$cad->registarVenda();

// echo $cad->__toString();
?>
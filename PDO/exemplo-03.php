<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET login = :LOGIN WHERE id = :ID");

$login = "JOAO";
$codigo = "7";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":ID", $codigo);

$stmt->execute();
?>
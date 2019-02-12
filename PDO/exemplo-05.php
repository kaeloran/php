<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = :ID");

$codigo = 7;

$stmt->bindParam(":ID", $codigo);

$stmt->execute();

$conn->commit();
?>
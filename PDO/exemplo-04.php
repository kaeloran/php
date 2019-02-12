<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE id = :ID");

$codigo = "1";

$stmt->bindParam(":ID", $codigo);

$stmt->execute();
?>
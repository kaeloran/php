<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

$result = $conn->query("SELECT *FROM tb_usuarios ORDER BY login");

while ($row = $result->fetch_assoc()) {

    var_dump($row);

}
?>
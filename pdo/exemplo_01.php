<?php

$conn = new PDO("mysql:dbname=cursophp7;host=localhost","root","");

$stmt = $conn->prepare("select * from usuario");

$stmt->execute();

$result = $stmt->fetchAll();

var_dump($result);

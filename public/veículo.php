<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword =  '123456';
$dbName = "information";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

$sql = 'SELECT * FROM Veiculos ORDER BY RAND() LIMIT 1';

$result = $conexao->query($sql) or die($conexao->error);


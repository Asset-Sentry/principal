<?php
// Conecte-se ao banco de dados MySQL
$servername = "localhost";
$username = "root";
//$password = "sly110184";
//$dbname = "sensores";
//$dbname = "projetos";
$password = "152830";
$dbname = "projetos";


$conn = new mysqli($servername, $username, $password, $dbname);

// Checa conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}?>

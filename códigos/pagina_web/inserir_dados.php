<?php
$servername = "localhost";
$username = "root";
$password = "sly110184";
$dbname = "sensores";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}


if(($_GET['temperatura']) AND ($_GET['umidade'])) {
    $temperatura = $_GET['temperatura'];
    $umidade = $_GET['umidade'];
    $sql = "INSERT INTO dados (temperatura,umidade) VALUES ('$temperatura','$umidade')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }
}

$conn->close();
?>

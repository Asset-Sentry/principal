<?php

require_once "conexao.php";

require_once "conexao.php";

// Consulta os dados de temperatura e umidade do banco de dados
$sql = "SELECT temperatura, umidade, data_hora FROM dados ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Retorna os dados em formato JSON
    $row = $result->fetch_assoc();
    //$temperatura = (int)$row['temperatura'];
    echo json_encode($row);
}
?>

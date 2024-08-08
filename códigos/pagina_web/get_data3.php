
<?php

require_once "conexao.php";
// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta para o valor da primeira tabela
$sql1 = "SELECT temperatura FROM dados ORDER BY id DESC LIMIT 1";
$result1 = $conn->query($sql1);

// Consulta para o valor da segunda tabela
$sql2 = "SELECT temp_max FROM parametros ORDER BY id DESC LIMIT 1";
$result2 = $conn->query($sql2);

$sql3 = "SELECT alerta_sonoro FROM setup ORDER BY id DESC LIMIT 1";
$result3 = $conn->query($sql3);

$temperatura = null;
$temp_max = null;
$alerta_sonoro = null;

if ($result1->num_rows > 0) {
    $row1 = $result1->fetch_assoc();
    $temperatura = $row1['temperatura'];
}

if ($result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();
    $temp_max = $row2['temp_max'];
}

if ($result3->num_rows > 0) {
    $row3 = $result3->fetch_assoc();
    $alerta_sonoro = $row3['alerta_sonoro'];
}

// Retorna os valores como JSON
echo json_encode(['temperatura' => $temperatura, 'temp_max' => $temp_max, 'alerta_sonoro' => $alerta_sonoro]);

$conn->close();
?>


<?php

require_once "conexao.php";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Consulta para obter os últimos 50 registros
//$sql = "SELECT temperatura, umidade, data_hora FROM dados ORDER BY data_hora DESC LIMIT 50";
$sql = "SELECT temperatura, umidade, data_hora FROM dados WHERE id IN (SELECT MIN(id) FROM dados GROUP BY DATE_FORMAT(data_hora, '%Y-%m-%d %H:%i')) ORDER BY data_hora DESC LIMIT 120";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
} else {
  echo "0 results";
}
$conn->close();

header('Content-Type: application/json');
echo json_encode($data);
?>

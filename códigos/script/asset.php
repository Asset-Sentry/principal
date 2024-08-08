#!/usr/bin/php -q

<?php

require_once "conexao.php";

// Consulta os dados de temperatura e umidade do banco de dados
$sql = "SELECT temperatura, umidade, data_hora FROM dados ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Retorna os dados em formato JSON
    $row = $result->fetch_assoc();
    $temperatura = (int)$row['temperatura'];
    
    
    $sql = "SELECT * FROM parametros";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $temp_max = $row['temp_max'];
}
    //echo $temp_max;
    //echo $temperatura;
    //echo $temp_max;
if (($temperatura) >= ($temp_max) ){
    $sql = "SELECT voip FROM setup WHERE id='1'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $voip = $row['voip'];

    if ($voip == '1'){
        informar($temperatura);
    }

        //ativar_rele('ON');
       
    }else{
        echo "Dentro dos parâmetros";
    }

    function informar($temperatura) {
echo "Informando via telefone";
$ArquivoCall = "autentica-6001.call";
$frase = "Channel: PJSIP/6000
CallerID: 'Chamada de Autenticação' <777>
MaxRetries: 0
RetryTime: 300
WaitTime: 45
Application: AGI
Data: agi_teste.php,$temperatura
SET
Archive: yes";
    
// Tenta abrir o arquivo para escrita (se não existir, ele será criado)
$arquivo = fopen("/var/spool/asterisk/outgoing/$ArquivoCall", 'w');
//$arquivo = fopen("/home/wesley/Documentos/$ArquivoCall", 'w');
            
    if ($arquivo) {
            // Escreve a frase no arquivo
            fwrite($arquivo, $frase);
        
            // Fecha o arquivo
            fclose($arquivo);
        }else{
            echo "Não foi possível escrever o arquivo";
        }
    
}


function ativar_rele($comando) {
    
    $command = $comando;
    
    $url = 'http://192.168.0.3/relay';
    $data = array('command' => $command);

    // Usando cURL para enviar o POST request
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data),
        ),
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === FALSE) {
        //die('Erro ao enviar o comando');
    }

    //echo "Comando $command enviado com sucesso!";
    //header('location:./index.php');
}

$conn->close();
?>

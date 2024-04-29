<?php
// Definindo os parâmetros
$data = array(
    "param1" => "valor1",
    "param2" => "valor2",
    "param3" => "valor3"
);

// Convertendo o array para JSON
$data_string = json_encode($data);

// URL da API para a qual você está enviando os dados
$url = 'http://api.local/rest/endpoint';

// Inicializando a sessão cURL
$ch = curl_init($url);

// Configurando as opções cURL
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);

// Executando a chamada e obtendo a resposta
$result = curl_exec($ch);

// Fechando a sessão cURL
curl_close($ch);

// Imprimindo a resposta
echo $result;
?>

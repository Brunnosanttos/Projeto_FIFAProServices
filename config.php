<?php
$dbUrl = 'mysql://root:hkojUBzSvbdttLOJCrSZazACRpNdMhTX@junction.proxy.rlwy.net:14560/railway';

// Usando parse_url para separar a URL em partes
$parsedUrl = parse_url($dbUrl);

// Agora podemos usar as partes da URL
$dbHost = $parsedUrl['host'];       // 'junction.proxy.rlwy.net'
$dbPort = $parsedUrl['port'];       // '14560'
$dbUsername = $parsedUrl['user'];   // 'root'
$dbPassword = $parsedUrl['pass'];   // 'hkojUBzSvbdttLOJCrSZazACRpNdMhTX'
$dbName = substr($parsedUrl['path'], 1);  // 'railway', remova o '/' inicial

// Conectar ao banco de dados
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

// Verificação de erro
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
<?php

$host = 'localhost';
$username = 'root';
$pass = 'root';
$dbname = "SA_FERRORAMA";

$conn = new mysqli($host, $username, $pass, $dbname);

if ($conn->connect_error) {
     error_log("Falha na conexão com o banco de dados: " . $conn->connect_error);
    http_response_code(500);
    exit("Não foi possível conectar ao sistema.");
}
$conn->set_charset("utf8mb4");
?>
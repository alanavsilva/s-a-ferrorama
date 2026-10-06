<?php

$host = 'localhost';
$username = 'root';
$pass = '';
$dbname = "SA_FERRORAMA";

$conn = new mysqli($host, $username, $pass, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


?>
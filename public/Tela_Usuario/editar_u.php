<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM usuário WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$usuario =mysqli_fetch_assoc($resultado);
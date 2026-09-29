<?php

include "../infra/conexao.php";

$id = $_GET["id"];
$sql = "SELECT * FROM usuário WHERE id = $id";
$resultado = mysqli_query($conexao, $sql );

$usuario =mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="../css/editar_u.css">
<head>

<body>
    <header>
        <h1>Editar Usuário</h1>
</header>
<main>
    <Editando o usuário <?php echo $usuario["nome"]; ?> </h2>
    <form action atualizar php method="post">
    
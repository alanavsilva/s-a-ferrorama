<?php

include "../../infra/conexao.php";

$id = $_POST["id"];

$sql = "DELETE FROM usuarios WHERE id_usuario = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: cadastrar_usuario.php");
} else {
    echo "Erro ao excluir usuário.";
}

?>
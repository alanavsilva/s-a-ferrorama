<?php

include "../../infra/conexao.php";

$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);

if (!$id || $id < 1) {
    exit("usuário inválido.");
}

$sql = "DELETE FROM usuarios WHERE id_usuario = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("location: cadastrar_usuario.php");
} else {
    echo "erro ao excluir usuário.";
}

?>
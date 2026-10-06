<?php
require_once "../../infra/conexao.php";
require_once "../../infra/auth.php";

exigir_administrador();
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id || $id < 1) {
    http_response_code(400);
    exit("Usuário inválido.");
}

$stmt = $conn->prepare(
    "SELECT id_usuario, nome, email, tipo FROM usuarios WHERE id_usuario = ?"
);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$usuario = $resultado->fetch_assoc();

if (!$usuario) {
    http_response_code(404);
    exit("Usuário não encontrado.");
}

$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    verificar_csrf();

    $nome = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';
    $tipoRecebido = $_POST['tipo'] ?? '';

    if ($nome === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensagem = "Preencha os dados corretamente.";
    } elseif (!in_array($tipoRecebido, ['funcionário', 'administrador'], true)) {
        $mensagem = "Tipo de usuário inválido.";
    } else {
        if ($senha !== '') {
            if (strlen($senha) < 8) {
                $mensagem = "A senha deve ter pelo menos 8 caracteres.";
            } else {
                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                $sql = "UPDATE usuarios
                        SET nome = ?, email = ?, senha = ?, tipo = ?
                        WHERE id_usuario = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ssssi", $nome, $email, $senhaHash, $tipoRecebido, $id);
            }
        } else {
            $sql = "UPDATE usuarios
                    SET nome = ?, email = ?, tipo = ?
                    WHERE id_usuario = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssi", $nome, $email, $tipoRecebido, $id);
        }

        if ($mensagem === '') {
            if ($stmt->execute()) {
                header("Location: cadastrar_usuario.php");
                exit;
            }

            $mensagem = ($conn->errno === 1062)
                ? "Este email já está cadastrado."
                : "Não foi possível atualizar o usuário.";
        }
    }

    $usuario['nome'] = $nome;
    $usuario['email'] = $email;
    $usuario['tipo'] = $tipoRecebido;
}
?>


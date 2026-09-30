<?php

include "../infra/conexao.php";
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

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="../../assets/style/style.css">
</head>
<body class="body_geral">
<main class="content-user">
    <h1>Editar usuário</h1>

    <?php if ($mensagem !== ''): ?>
        <p role="alert"><?= escapar($mensagem) ?></p>
    <?php endif; ?>

    <form method="POST" class="form-cadastro-user">
        <input type="hidden" name="csrf_token" value="<?= escapar(token_csrf()) ?>">

        <div class="campo-user">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" value="<?= escapar($usuario['nome']) ?>" required>
        </div>

        <div class="campo-user">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?= escapar($usuario['email']) ?>" required>
        </div>

        <div class="campo-user">
            <label for="senha">Nova senha</label>
            <input type="password" id="senha" name="senha"
                   placeholder="Deixe em branco para manter a senha atual">
        </div>

        <div class="campo-user">
            <label for="tipo">Tipo de usuário</label>
            <select id="tipo" name="tipo" required>
                <option value="funcionário" <?= $usuario['tipo'] === 'funcionário' ? 'selected' : '' ?>>Funcionário</option>
                <option value="administrador" <?= $usuario['tipo'] === 'administrador' ? 'selected' : '' ?>>Administrador</option>
            </select>
        </div>

        <button type="submit" class="btn-cadastrar-form">SALVAR ALTERAÇÕES</button>
        <a href="cadastrar_usuario.php">Cancelar</a>
    </form>
</main>
</body>
</html>
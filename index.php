
<?php
require_once "infra/conexao.php";
require_once "infra/auth.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nome = trim($_POST["nome"]?? '');
$email = trim($_POST["email"] ?? '');
$senha = trim ($_POST["senha"];??'')

if ($nome === '' || $email === '' || $senha === '') {
        $erro = "Preencha todos os campos.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erro = "Credenciais inválidas.";
    } else {

$sql = "SELECT id_usuario, nome, email, tipo, senha
        FROM usuarios
        WHERE nome= ? AND email = ?
        LIMIT 1";
    }
  $stmt = $conn->prepare($sql);

if ($stmt) {

           $stmt->bind_param("ss", $nome, $email);
            $stmt->execute();
            $resultado = $stmt->get_result();
            $usuario = $resultado->fetch_assoc();

            if ($usuario && password_verify($senha, $usuario['senha'])) {
                session_regenerate_id(true);

                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['tipo'] = $usuario['tipo'];
                $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

                header("Location: public/Tela_Home/home.php");
                exit;
       
        }

    } 
    $erro = "Credenciais inválidas.";
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página login</title>
   <link rel="stylesheet" href="../assets/style/style.css">

</head>

<body class="body_login">
    <main class="pagina-login">
        <section class="login-vizualização" id="login">
            <div class="painel-introducao">

                <p class="inicio_login">Sistema TREMTECH</p>
                <h1>Controle sua ferrovia com praticidade.</h1>
                <p class="introducao_login">
                    Painel para acompanhar usuarios, trens, passagens e rotas disponiveis.
                </p>
            </div>


            <div id="login-cadastro">
            <form class="login-painel" id="login-formulario" method="POST">
                    <p class="introducao_formulario">Acesso funcionário/cliente</p>
                    <h2>Entrar no sistema</h2>


                     <label for="nome">
                        Nome usuário
                        <input type="text" id="nome" name="nome" placeholder="Digite seu nome de usuário">
                    </label>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Digite seu email" required>
                    <br>

                    <br>

                    <label for="senha">
                        Senha
                        <input type="password" id="senha" name="senha" placeholder="Digite sua senha">
                    </label>
                   
                    <?php if (isset($erro)): ?>
                    <p role="alert"><?= escapar($erro) ?></p>
                <?php endif; ?>

                    <button id="botao-envio" type="submit">Entrar</button>
                    <div id="mensagem"></div>
</form>                   
</div>
    </section>
</main>
    <footer>
    </footer>
    <link rel="stylesheet" href="assets/style/style.css">
    <script src="../script/validacao.js"></script>
</body>
</html>


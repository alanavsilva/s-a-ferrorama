<?php

include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios 
        WHERE nome = '$nome'
        AND email = '$email'
        AND senha = '$senha'";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {

    header("Location: home.html");
    exit;

} else {

    echo "Nome, email ou senha incorretos.";

        }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">

</head>

<body>
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
                    <br>
                    <button id="botao-envio" type="submit">Entrar</button>
                    <div id="mensagem"></div>
</form>                   
</div>
    </section>
</main>
    <footer>
    </footer>
    <script src="../script/validacao.js"></script>
</body>
</html>


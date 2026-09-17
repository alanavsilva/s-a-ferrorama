<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TremTech</title>

  <link rel="stylesheet" href="../assets/style/style.css">

</head>

<body>
   <div class="pagina">

    <aside class="menu">
      <img class="logo-trem"
        src="https://img.icons8.com/ios/100/ffffff/train.png"
        alt="Logo TremTech">
 <p class="marca">SISTEMA TREMTECH</p>
      <hr>

      <a href="#">
        <img src="https://img.icons8.com/ios-filled/18/ffffff/home.png" alt="">
        Home
      </a>

      <a href="#">
        <img src="https://img.icons8.com/ios-filled/18/ffffff/user.png" alt="">
        Usuários
      </a>

      <a class="ativo" href="#">
        <img src="https://img.icons8.com/ios-filled/18/701015/radio-waves.png" alt="">
        Sensores
      </a>

      <a href="#">
        <img src="https://img.icons8.com/ios-filled/18/ffffff/visible.png" alt="">
        Monitoramento
      </a>

      <a href="#">
        <img src="https://img.icons8.com/ios-filled/18/ffffff/report-card.png" alt="">
        Relatórios
      </a>

      <a href="#">
        <img src="https://img.icons8.com/ios-filled/18/ffffff/train.png" alt="">
        Trem
      </a>

      <a href="#">
        <img src="https://img.icons8.com/ios-filled/18/ffffff/map.png" alt="">
        Rota
      </a>

      <a class="logout" href="#">
        <img src="https://img.icons8.com/ios-filled/18/ffffff/logout-rounded.png" alt="">
        Logout
      </a>
    </aside>

    <main class="conteudo">
      <header>
        <div>
          <small>PAINEL ADMINISTRATIVO</small>
          <h1>Controle de sensores cadastrados</h1>
          <h2>Sensores do sistema</h2>
        </div>

        <div class="admin">
          <div class="foto"></div>

          <b>
            Admin<br>
            <span>alana.veiga</span>
          </b>
        </div>
      </header>

  <section id="visualizacao">
        <button class="botao" onclick="abrirCadastro()">
          CADASTRAR NOVO SENSOR
        </button>

        <div class="buscar">
          <label for="pesquisa">Buscar</label>
          <input id="pesquisa" type="text" placeholder="Nome do sensor">
        </div>

        <table>
          <thead>
            <tr>
              <th>ID do Sensor</th>
              <th>Nome do sensor</th>
              <th>Trem vinculado</th>
              <th>Rota vinculada</th>
              <th>Dados Monitorados</th>
              <th>Ações</th>
            </tr>
          </thead>

    <section id="cadastro" class="escondido">
        <button class="voltar" onclick="voltarTabela()">
          <img src="https://img.icons8.com/ios-filled/22/000000/long-arrow-left.png" alt="Voltar">
        </button>

</body>
</html>
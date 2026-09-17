<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>TremTech</title>

  <link rel="stylesheet" href="../../assets/style/style.css">

</head>

<body class="body_geral">
   <div class="pagina">

    <aside class="menu">
       <img class="logo-trem"
    src="https://img.icons8.com/ios/100/ffffff/train.png"
    alt="Logo TremTech">

  <p class="marca">SISTEMA TREMTECH</p>
     <a href="../../public/Tela_Home/home.php">
  <img src="https://img.icons8.com/ios-filled/18/ffffff/home.png" alt="">
  Home
</a>

<a href="../../public/Tela_Usuario/cadastrar_usuario.php">
  <img src="https://img.icons8.com/ios-filled/18/ffffff/user.png" alt="">
  Usuários
</a>

<a class="ativo" href="../../public/Tela_Sensores/cadastrar_sensores.php">
  <img src="https://img.icons8.com/ios-filled/18/701015/radio-waves.png" alt="">
  Sensores
</a>

<a href="../../public/Tela_Trens/cadastrar_trens.php">
  <img src="https://img.icons8.com/ios-filled/18/ffffff/train.png" alt="">
  Trem
</a>

<a href="../../public/Tela_Rotas/cadastrar_rotas.php">
  <img src="https://img.icons8.com/ios-filled/18/ffffff/map.png" alt="">
  Rota
</a>
<a href="../../public/Tela_Monitoramento/monitoramento.php">
  <img src="https://img.icons8.com/ios-filled/18/ffffff/visible.png" alt="">
  Monitoramento
</a>

<a href="../../public/Tela_Relatorios/relatorios.php">
  <img src="https://img.icons8.com/ios-filled/18/ffffff/report-card.png" alt="">
  Relatórios
</a>


<a class="logout" href="../../index.php">
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
       <details>

        <summary class="botao">
          CADASTRAR NOVO SENSOR
        </summary>

      
        <tbody id="tabela-sensores">
          
          <form class="formulario" method="POST">
            <div>
              <label for="nome">Nome do sensor</label>
              <input type="text" id="nome" placeholder="Nome do sensor" required>
            </div>
            
            <div>
              <label for="tipo">Tipo de dado coletado</label>
              <select id="tipo" required>
                <option>Selecione o tipo</option>
                <option>Velocidade</option>
                <option>Temperatura</option>
                <option>Status</option>
                </select>
              </div>
              
              <div>
                <label for="trem">Trem vinculado</label>
                <select id="trem" required>
                  <option>Trem</option>
                  <option>Trem 01</option>
                  <option>Trem 02</option>
                  <option>Trem 03</option>
                </select>
              </div>
              
              <div>
                <label for="rota">Rota vinculada</label>
                <select id="rota" required>
                  <option>Rota</option>
                  <option>Rota Norte</option>
              <option>Rota Sul</option>
              <option>Rota Leste</option>
              <option>Rota Oeste</option>
            </select>
          </div>
          <button type="submit">Cadastrar Sensor</button>
        </form>
      </details>
      
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
    </tbody>
  </table>
</section>
</main>

 <script src="validacao.js"></script>
 <link rel="stylesheet" href="../../assets/style/style.css">

</body>
</html>
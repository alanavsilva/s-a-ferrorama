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
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/000000/home.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/000000/home.png');"></span>
  Home
</a>

<a href="../../public/Tela_Usuario/cadastrar_usuario.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/000000/user.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/000000/user.png');"></span>
  Usuários
</a>

<a href="../../public/Tela_Sensores/cadastrar_sensores.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/701015/radio-waves.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/701015/radio-waves.png');"></span>
  Sensores
</a>

<a href="../../public/Tela_Trens/cadastrar_trens.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/train.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/train.png');"></span>
  Trem
</a>

<a class="ativo" href="../../public/Tela_Rotas/cadastrar_rotas.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/map.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/map.png');"></span>
  Rota
</a>
<a href="../../public/Tela_Monitoramento/monitoramento.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/visible.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/visible.png');"></span>
  Monitoramento
</a>

<a href="../../public/Tela_Relatorios/relatorios.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/report-card.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/report-card.png');"></span>
  Relatórios
</a>


<a class="logout" href="../../index.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/logout-rounded.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/ffffff/logout-rounded.png');"></span>
  Logout
</a>
    </aside>

    <main class="conteudo">
      <header>
        <div>
          <small>PAINEL ADMINISTRATIVO</small>
          <h1>Controle de rotas cadastradas</h1>
          <h2>Rotas do sistema</h2>
        </div>

        <div class="admin">
          <div class="foto"></div>

          <b>
            Admin<br>
            <span>alana.veiga</span>
          </b>
        </div>
      </header>

       <tbody id="tabela-sensores">
          
          <form class="formulario" method="POST">
            <div>
              <label for="nome">Nome da rota</label>
              <input type="text" id="nome" placeholder="Nome da rota" required>
            </div>
            
            <div>
              <label for="extensao">Extensão(km)</label>
              <input type="number" id="extensao" placeholder="Ex:45" required>
            </div>

            <div>
              <label for="minutos">Tempo estimado(min)</label>
              <input type="number" id="minutos" placeholder="Ex:30" required>
            </div>

          <button type="submit">Cadastrar Rota</button>
        </form>
      </details>
      

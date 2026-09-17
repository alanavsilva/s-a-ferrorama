<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/style/style.css">

   
</head>
   <body>
    
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

<a class="ativo" href="../../public/Tela_Usuario/cadastrar_usuario.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/000000/user.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/000000/user.png');"></span>
  Usuários
</a>

<a href="../../public/Tela_Sensores/cadastrar_sensores.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/701015/radio-waves.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/701015/radio-waves.png');"></span>
  Sensores
</a>

<a href="../../public/Tela_Trens/cadastrar_trens.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/000000/train.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/000000/train.png');"></span>
  Trem
</a>

<a href="../../public/Tela_Rotas/cadastrar_rotas.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/000000/map.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/000000/map.png');"></span>
  Rota
</a>
<a href="../../public/Tela_Monitoramento/monitoramento.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/000000/visible.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/000000/visible.png');"></span>
  Monitoramento
</a>

<a href="../../public/Tela_Relatorios/relatorios.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/000000/report-card.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/000000/report-card.png');"></span>
  Relatórios
</a>


<a class="logout" href="../../index.php">
  <span class="icone" style="mask-image: url('https://img.icons8.com/ios-filled/18/000000/logout-rounded.png'); -webkit-mask-image: url('https://img.icons8.com/ios-filled/18/000000/logout-rounded.png');"></span>
  Logout
</a>
    </aside>

      <a href="#" class="logout-user">Logout</a>
    </aside>

    <main class="content-user">
      <p class="painel-user">PAINEL ADMINISTRATIVO</p>
      <h1>Controle de usuários cadastrados</h1>
      <h2>Funcionários e clientes</h2>


      <button class="btn-cadastrar-user">CADASTRAR NOVO USUÁRIO</button>

      
<section class="cadastro-usuario" id="cadastro">
  <div class="admin-badge-user">
    <div class="avatar-user"></div>
    <div>
      <strong>Admin</strong>
      <span>alana.veiga</span>
    </div>
  </div>

  <p class="painel-user">PAINEL ADMINISTRATIVO</p>
  <h1>Controle de usuários cadastrados</h1>
  <h2>Funcionários e Clientes</h2>

  <form class="form-cadastro-user">
    <div class="campo-user">
      <label for="nome">Nome de usuário</label>
      <input type="text" id="nome" placeholder="Nome completo">
    </div>

    <div class="campo-user">
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Email">
    </div>

    <div class="campo-user">
      <label for="senha">Senha</label>
      <input type="password" id="senha" placeholder="Senha">
    </div>
    

    <div class="campo-user">
      <label for="tipo">Tipo de usuário</label>
      <select id="tipo">
        <option>Funcionário</option>
        <option>Cliente</option>
        <option>Administrador</option>
      </select>
    </div>

  </form>

  <button class="btn-cadastrar-form">CADASTRAR NOVO USUÁRIO</button>
</section>

      <section class="buscar-box-user">
      <label for="buscar">Buscar</label>
      <input type="text" id="buscar" class="form-control-user" placeholder="Nome ou email">
      </section>
      <table class="table tabela-usuarios">
    <thead>
      <tr>

        <th scope="col">Usuário</th>
        <th scope="col">Email</th>
        <th scope="col">Tipo usuário</th>
        <th scope="col">Ação</th>

    </tr>
    </thead>

    <tbody>

      <tr>
        <td>nicole.beloni</td>
        <td>nicole_b_silva@gmail.com</td>
        <td>Cliente</td>
        <td>
          <button class="btn-lixeira-user"></button>
        </td>
      </tr>

    <tr>
      <td>alana.veiga</td>
      <td>alana_v_silva@gmail.com</td>
      <td>Administrador</td>
      <td>
          <button class="btn-lixeira-user"></button>
        </td>
      </tr>
  

    <tr>
      <td>piettra.cidral</td>
      <td>piettra_cidral@gmail.com</td>
      <td>Cliente</td>
      <td>
          <button class="btn-lixeira-user"></button>
        </td>
      </tr>

      <tr>
      <td>maria.fernanda</td>
      <td>maria.fernanda@gmail.com</td>
      <td>Administrador</td>
      <td>
          <button class="btn-lixeira-user"></button>
        </td>
      </tr>

      <tr>
      <td>jose.andrade</td>
      <td>jose.andrade@gmail.com</td>
      <td>Administrador</td>
      <td>
          <button class="btn-lixeira-user"></button>
        </td>
      </tr>
 </tbody>
      </table>

      </main>
    </div>

    <footer class="text-center mt-5 pt-3">
      <p class="text-white-50 small">
        <i class="bi bi-shield-check me-1"></i>Sistema seguro
      </p>
    </footer>

    <script src="../../script/validacao.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" ...></script>
  </body>
</html>

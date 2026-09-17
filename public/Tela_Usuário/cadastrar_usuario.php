<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/style/style.css">

   
</head>
   
     <div class="layout">
    <aside class="sidebar">
      <div class="logo">
        <div class="logo-box">
        <span></span>
        <span></span>
        <span></span>
        </div>
        <p>SISTEMA TREMTECH</p>
      </div>

      <nav class="menu">
          <a href="public/Tela_Home/home.php">Home</a>
          <a href="">Usuários</a>
          <a href="public/Tela_Sensores/cadastrar_sensores.php">Sensores</a>
          <a href="#">Monitoramento</a>
          <a href="#">Relatórios</a>
          <a href="#">Sensores</a>

      </nav>

      <a href="#" class="logout">Logout</a>
    </aside>

    <main class="content">
      <p class="painel">PAINEL ADMINISTRATIVO</p>
      <h1>Controle de usuários cadastrados</h1>
      <h2>Funcionários e clientes</h2>

      <button class="btn-cadastrar">CADASTRAR NOVO USUÁRIO</button>

      
<section class="cadastro-usuario" id="cadastro">
  <div class="admin-badge-user">
    <div class="avatar-user"></div>
    <div>
      <strong>Admin</strong>
      <span>alana.veiga</span>
    </div>
  </div>

  
    <footer class="text-center mt-5 pt-3">
    <p class= "text-white- 50 small">
        <i class="bi bi-shield-check me-1"></i>Sistema seguro
    </p> 

    </footer>
      

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


      <section class="buscar-box">
      <label for="buscar">Buscar</label>
      <input type="text" id="buscar" class="form-control" placeholder="Nome ou email">
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
          <button class="btn-lixeira"></button>
        </td>
      </tr>

    <tr>
      <td>alana.veiga</td>
      <td>alana_v_silva@gmail.com</td>
      <td>Administrador</td>
      <td>
          <button class="btn-lixeira"></button>
        </td>
      </tr>
  

    <tr>
      <td>piettra.cidral</td>
      <td>piettra_cidral@gmail.com</td>
      <td>Cliente</td>
      <td>
          <button class="btn-lixeira"></button>
        </td>
      </tr>

      <tr>
      <td>maria.fernanda</td>
      <td>maria.fernanda@gmail.com</td>
      <td>Administrador</td>
      <td>
          <button class="btn-lixeira"></button>
        </td>
      </tr>

      <tr>
      <td>jose.andrade</td>
      <td>jose.andrade@gmail.com</td>
      <td>Administrador</td>
      <td>
          <button class="btn-lixeira"></button>
        </td>
      </tr>

 

  <button class="btn-cadastrar-form">CADASTRAR NOVO USUÁRIO</button>
</section>
 <script src="../../script/validacao.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>



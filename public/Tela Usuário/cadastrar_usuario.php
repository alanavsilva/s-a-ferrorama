<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/style.css">
   
</head>


<body>
    
    <header id="logo-site">
        <div class="logo">
        <img src="../assets/img/Captura de tela 2026-05-07 074754.png" alt="" class="img-fluid">
       </div>
    </header>

    <main id="login-cadastro" class="container">
    <div class="container1">
    <h2 id="titulo" class="display-6 fw-bold text-primary text-center"> Olá adiministrador!!!</h2>
    <h3 class="h5 text-muted text-center">Antes de nossa viagem, faça seu cadastro: </h3>
    <form id="form-login">
        <div id="c-email" class="conjunto mb-3">
            <label for="email" class="form-label fw-semibold">
             <i class="bi bi-envelope-fill me-2"></i>Email:
             </label>  
            <input type="email" id="email" class="form-control form-control-lg" placeholder="Digite seu email" required>
        </div>   
        <div id="c-senha" class="conjunto mb-4"> 
            <label for="senha" class="form-label fw-semibold">
            <i class="bi bi-lock-fill me-2"></i> Senha:
             </label>
             <input type="password" id="senha" class="form-control form-control-lg" placeholder="digite sua senha" required>
        </div>
        <button type="botao-envio" class="btn btn-primary w-100">Entrar</button>
    </form>

</div>

        
    </main>

    <footer class="text-center mt-5 pt-3">
    <p class= "text-white- 50 small">
        <i class="bi bi-shield-check me-1"></i>Sistema seguro
    </p> 

    </footer>

    <script src="scripts/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

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
          <a href="tela-geral-home.html">Home</a>
          <a href="tela-vizualização-usuário.html">Usuários</a>
          <a href="#">Sensores</a>
          <a href="#">Monitoramento</a>
          <a href="#">Relatórios</a>
          <a href="#">Logout</a>

      </nav>

      <a href="#" class="logout">Logout</a>
    </aside>

    <main class="content">
      <p class="painel">PAINEL ADMINISTRATIVO</p>
      <h1>Controle de usuários cadastrados</h1>
      <h2>Funcionários e clientes</h2>

      <button class="btn-cadastrar">CADASTRAR NOVO USUÁRIO</button>

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

      <section class="cadastro-usuario" id="cadastro">
  <p class="painel">PAINEL ADMINISTRATIVO</p>
  <h1>Controle de usuários cadastrados</h1>
  <h2>Funcionários e Clientes</h2>

  <form class="form-cadastro">
    <div class="campo">
      <label for="nome">Nome de usuário</label>
      <input type="text" id="nome" placeholder="Nome completo">
    </div>

    <div class="campo">
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Email">
    </div>

    <div class="campo">
      <label for="senha">Senha</label>
      <input type="password" id="senha" placeholder="Senha">
    </div>

    <div class="campo">
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

      </div>
 </main>

</body>
</html>
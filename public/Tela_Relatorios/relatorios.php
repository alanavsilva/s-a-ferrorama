<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Relatórios - TremTech</title>

    <link rel="stylesheet" href="../../assets/style/relatorios.css">

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="pagina-relatorio">

        <aside class="menu-lateral">

            <div class="menu-logo">
                <div class="menu-logo-icone">
                    <i class="bi bi-train-front"></i>
                </div>

                <span>SISTEMA TREMTECH</span>
            </div>

            <div class="menu-linha"></div>

            <nav class="menu-navegacao">

                <a href="#" class="menu-item">
                    <i class="bi bi-house-door"></i>
                    <span>Home</span>
                </a>

                <a href="#" class="menu-item">
                    <i class="bi bi-person-fill"></i>
                    <span>Usuários</span>
                </a>

                <a href="#" class="menu-item">
                    <i class="bi bi-cpu"></i>
                    <span>Sensores</span>
                </a>

                <a href="#" class="menu-item">
                    <i class="bi bi-eye"></i>
                    <span>Monitoramento</span>
                </a>

                <a href="#" class="menu-item menu-item-ativo">
                    <i class="bi bi-file-earmark-bar-graph"></i>
                    <span>Relatórios</span>
                </a>

                <a href="#" class="menu-item">
                    <i class="bi bi-train-front"></i>
                    <span>Trem</span>
                </a>

                <a href="#" class="menu-item">
                    <i class="bi bi-map"></i>
                    <span>Rota</span>
                </a>

            </nav>

            <a href="#" class="menu-logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>

        </aside>


        
        <main class="conteudo-relatorio">

            
            <header class="cabecalho-relatorio">

                <div class="titulo-relatorio">

                    <span class="titulo-pequeno-relatorio">
                        PAINEL DE MONITORAMENTO
                    </span>

                    <h1>
                        Monitoramento em tempo real
                    </h1>

                </div>

                <div class="perfil-admin-relatorio">

                    <div class="perfil-circulo-relatorio"></div>

                    <div class="perfil-informacoes-relatorio">
                        <strong>Admin</strong>
                        <span>alana.veiga</span>
                    </div>

                </div>

            </header>


            
            <section class="area-relatorio">


                <div class="card-gerar-relatorio">

                    <h2>Gerar relatório</h2>

                    <form class="formulario-relatorio">

                        <div class="campo-relatorio">

                            <label for="sensor-relatorio">
                                Sensor
                            </label>

                            <select id="sensor-relatorio" name="sensor">

                                <option value="">
                                    Sensor leste
                                </option>

                                <option value="sensor-norte">
                                    Sensor norte
                                </option>

                                <option value="sensor-sul">
                                    Sensor sul
                                </option>

                                <option value="sensor-oeste">
                                    Sensor oeste
                                </option>

                            </select>

                        </div>


                        <div class="campo-relatorio">

                            <label for="periodo-relatorio">
                                Período
                            </label>

                            <select id="periodo-relatorio" name="periodo">

                                <option value="">
                                    Maio de 2026
                                </option>

                                <option value="abril-2026">
                                    Abril de 2026
                                </option>

                                <option value="maio-2026">
                                    Maio de 2026
                                </option>

                                <option value="junho-2026">
                                    Junho de 2026
                                </option>

                            </select>

                        </div>


                        <button type="submit" class="botao-gerar-relatorio">
                            Gerar relatório
                        </button>

                    </form>

                </div>


              
                <div class="resultado-relatorio">

                </div>

            </section>

        </main>

    </div>

</body>

</html>
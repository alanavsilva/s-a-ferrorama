# SISTEMA FERRORAMA – TREMTECH

## Sobre o Projeto

O **TREMTECH** é um sistema web desenvolvido para o gerenciamento e monitoramento de uma estação de Ferrorama.

O sistema permite acompanhar informações dos trens, como velocidade, localização, consumo de energia, quantidade de passageiros, falhas e alertas.

Os dados serão armazenados em um banco de dados, permitindo o registro e a consulta de informações e históricos da operação.

---

## Objetivos do sistema

O objetivo do Tremtech é desenvolver um sistema web simples, organizado e eficiente para auxiliar no gerenciamento da operações ferroviárias.

O sistema busca:

* Melhorar o gerenciamento da estação;
* Registrar informações dos trens;
* Monitorar a velocidade dos trens;
* Exibir a localização dos trens;
* Controlar a quantidade de passageiros;
* Monitorar o consumo de energia;
* Registrar falhas e problemas;
* Exibir alertas;
* Consultar históricos de monitoramento;
* Facilitar o acesso dos funcionários às informações da operação.

  ---

## Requisitos funcionais

RF01 – O sistema deve permitir que o usuário realize login .

RF02 – O sistema deve validar as credenciais informadas pelo usuário com os dados cadastrados no banco de dados.

RF03 – O sistema deve criar uma sessão para o usuário após a autenticação realizada com sucesso.

RF04 – O sistema deve direcionar o usuário autenticado para a tela principal do sistema.

RF05 – O sistema deve informar ao usuário quando as credenciais utilizadas no login forem inválidas.

RF06 – O sistema deve permitir que o usuário encerre sua sessão por meio da opção "Logout".

RF07 – O sistema deve permitir o cadastro de novos usuários.

RF08 – O sistema deve apresentar uma lista dos usuários cadastrados

RF09 – O sistema deve permitir pesquisar usuários cadastrados por nome de usuário ou e-mail.

RF10 – O sistema deve permitir excluir usuários cadastrados.

RF11 – O sistema deve apresentar uma tela principal após o login do usuário.

RF12 – O sistema deve exibir o nome do usuário autenticado na tela principal.

RF13 – O sistema deve apresentar o status atual da operação do trem.

RF14 – O sistema deve apresentar informações gerais da ferrovia.

RF15 – O sistema deve disponibilizar um botão para acessar o cadastro de sensores e trens.

RF16 – O sistema deve disponibilizar um botão para acessar o cadastro de usuários e rotas.

RF17 – O sistema deve permitir o cadastro de sensores utilizados para o monitoramento ferroviário.

RF18 – O sistema deve apresentar uma lista dos sensores cadastrados.

RF19 – O sistema deve permitir pesquisar sensores cadastrados pelo nome do sensor.

RF20 – O sistema deve permitir visualizar os detalhes de um sensor cadastrado.

RF21 – O sistema deve permitir excluir sensores cadastrados.

RF22 – O sistema deve solicitar a confirmação do usuário antes de excluir um sensor.

RF23 – O sistema não deve permitir a exclusão de um sensor que possua dados registrados.

RF24 – O sistema deve apresentar uma mensagem de erro, ao tentar excluir um sensor que possua dados registrados.

RF25 – O sistema deve permitir o cadastro de trens.

RF26 – O sistema deve permitir visualizar os trens cadastrados no sistema.

RF27 – O sistema deve apresentar uma tela de monitoramento em tempo real dos dados coletados pelos sensores.

RF28 – O sistema deve apresentar a velocidade atual do trem com base nos dados recebidos pelos sensores.

RF29 – O sistema deve apresentar a temperatura atual registrada pelos sensores.

RF30 – O sistema deve apresentar a localização atual do trem em uma representação de mapa.

RF31 – O sistema deve apresentar o status operacional do trem.

RF32 – O sistema deve classificar o status operacional do trem como Normal, Alerta ou Falha.

RF33 – O sistema deve atualizar automaticamente as informações de monitoramento conforme novas leituras dos sensores forem recebidas.

RF34 – O sistema deve apresentar as falhas operacionais identificadas durante o monitoramento.

RF35 – O sistema deve apresentar separadamente a quantidade de falhas resolvidas e não resolvidas.

RF36 – O sistema deve permitir filtrar as falhas operacionais por status.

RF37 – O sistema deve permitir marcar uma falha operacional como resolvida.

RF38 – O sistema deve permitir reabrir uma falha que tenha sido marcada como resolvida.

RF39 – O sistema deve permitir gerar relatórios sobre os dados da operação ferroviária.

RF40 – O sistema deve permitir selecionar o sensor que será utilizado para gerar o relatório.

RF41 – O sistema deve permitir selecionar o período ou mês utilizado para gerar o relatório.

RF42 – O relatório deve apresentar a velocidade média registrada no período selecionado.

RF43 – O relatório deve apresentar a temperatura média registrada no período selecionado.

RF44 – O relatório deve apresentar a quantidade de falhas abertas e as respectivas falhas identificadas no período selecionado.

RF45 – O sistema deve apresentar gráficos para auxiliar na análise dos dados da operação ferroviária.

RF46 – O sistema deve permitir visualizar os relatórios gerados anteriormente.

RF47 – O sistema deve permitir filtrar os relatórios por período e tipo de dado.

RF48 – O sistema deve permitir cadastrar rotas.

RF49 – O sistema deve permitir visualizar as rotas cadastradas e suas respectivas informações.

---

## Tecnologias Utilizadas

**HTML** - estruturação das páginas 
**CSS** - estilização e identidade visual
**JavaScript** - validações e interações da interface
**PHP** - desenvolvimento da lógica e integração com banco de dados
**MySQL** - armazenamento e gerenciamento de dados
**Apache** - servidor utilizado para a execução do projeto localmente
**XAMPP** - ambiente utilizado para a execução do Apache e MySQL
**Visual Studio Code - editor de código utilizado pela equipe
**GitHub** - versionamento e armazenamento do código fonte
**GitHub** - organização e acompanhamento das tarefas (Kanban)

---

## Banco de Dados

O banco de dados será utilizado para armazenar as informações do sistema.

Principais dados:

* Trens;
* Localizações;
* Velocidades;
* Passageiros;
* Consumo de energia;
* Alertas;
* Falhas;
* Manutenções;
* Usuários;
* Registros de monitoramento.

## Funcionamento

O sistema será dividido em três partes:

**Front-end → Back-end → Banco de Dados**

O **Front-end** será responsável pela interface e interação com o usuário.

O **Back-end**, desenvolvido em PHP, será responsável pelo processamento das informações e pela comunicação com o banco de dados.

O **MySQL** será responsável pelo armazenamento dos dados do sistema.

---

## Outras Informações

O **Sistema ferrrorama** está sendo desenvolvido de forma colaborativa utilizando **GitHub** para versionamento de código e **GitHub Projects** para o gerenciamento das atividades

* **Qualidade de Código:** Ao longo do desenvolvimento, a equipe faz revisões no código, realiza testes das funcionalidades e mantém a estrutura do projeto organizada. Dessa forma, busca seguir os padrões estabelecidos e garantir que todas as partes do sistema funcionem de maneira integrada.

**Desenvolvimento Incremental:** O sistema será construído de forma gradual, dividindo o desenvolvimento em diferentes etapas:

1. Criação das interfaces do sistema (Front-end);
2. Desenvolvimento e conexão do banco de dados;
3. Programação das funcionalidades utilizando **PHP**;
4. Realização de testes e validações para verificar o funcionamento do sistema;
5. Integração das informações de monitoramento ao sistema.






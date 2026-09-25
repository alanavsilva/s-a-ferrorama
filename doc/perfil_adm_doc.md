# Perfil de Administrador

O sistema TremTech possuirá o perfil de Administrador, responsável pelo gerenciamento das principais funções do sistema. O Administrador terá acesso às funcionalidades necessárias para acompanhar os sensores, trens, monitoramento e relatórios da ferrovia.

O cadastro de um usuário como Administrador será realizado por meio da tela de cadastro de usuários, na qual será possível selecionar o tipo de usuário Administrador ou Funcionário.

---

### Permissões exclusivas do Administrador

-Cadastrar usuários.	

-Alterar dados de usuários.

-Excluir usuários.	

-Definir perfil do usuário.

-Cadastrar Administradores.

-Cadastrar sensores.

-Excluir sensores.

-Cadastrar trens.	

-Gerar relatórios.	

---

### Diferença entre Administrador e Funcionário

**O sistema terá dois perfis principais:**

**Administrador:** possui permissões para gerenciar os recursos administrativos e acompanhar as informações da ferrovia, incluindo sensores, trens, monitoramento e relatórios.

**Funcionário:** terá acesso somente às funcionalidades definidas para sua função, sem poder alterar seu próprio nível de acesso ou conceder privilégios administrativos a si mesmo.

### Proteção do cadastro de Administradores

O cadastro de novos Administradores deverá ser protegido para impedir que usuários sem autorização alterem os dados enviados pelo formulário e atribuam a si mesmos o perfil administrativo.

A verificação da permissão deverá ser realizada no servidor, e não somente no formulário da página. Dessa forma, mesmo que um usuário tente alterar o valor do campo de tipo de usuário, o sistema deverá verificar se ele possui autorização para criar ou atribuir o perfil de Administrador.
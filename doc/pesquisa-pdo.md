# PDO

### O que é PDO?
A extensão PHP Data Objects (PDO) define uma interface leve e consistente para acessar bancos de dados no PHP. Cada driver de banco de dados que implementa a interface PDO pode expor recursos específicos do banco de dados como funções de extensão comuns. Observe que não é possível executar nenhuma função de banco de dados usando apenas a extensão PDO; um driver PDO de banco de dados deve ser usado para acessar o servidor de banco de dados.

### Para que serve?
PDO (PHP Data Objects) serve como uma camada de abstração para conectar e manipular bancos de dados em aplicações escritas na linguagem PHP. Em vez de usar funções específicas para cada sistema (como MySQL, PostgreSQL ou SQLite), o programador usa uma interface única e padronizada.

### Como funciona?
É uma extensão do PHP que funciona como uma camada de abstraçõa para acesso a bancos de dados relacional.

### Caracteristicas:
- Flexibilidade – Como o PDO carrega o driver específico do banco de dados em tempo de execução, não é preciso reconfigurar o PHP sempre que um banco de dados diferente for usado.

- Desempenho – O PDO está escrito em C e compilado no PHP, o que lhe garante um aumento considerável no desempenho em relação a soluções escritas em PHP.

- Consistência de código – No PDO não existe a inconsistência de código, pois é oferecida apenas uma interface unificada que é está disponível para qualquer banco de dados.

- Características de orientação de objetos – Possui recursos de orientação de objetos, o que resulta em uma comunicação mais poderosa e eficiente com banco de dados.

### PDO vantagens:

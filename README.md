# hibrido

## Sistema de cadastro de clientes

Para este sistema eu optei por não utilizar qualquer lib de terceiros para que fique clara a minha lógica e forma de programar. Baixar um conjunto de libs e utilizá-lo, na minha opinião, é praticamente a mesma coisa que utilizar um framework.

Contudo, optei por não utilizar rotas, padrão REST ou testes automatizados, esse tipo de ferramenta é utilizada no dia-a-dia quando a questão é não se preocupar com ontologia e focar em produtividade. Neste caso, como estou sendo "testado", preferi botar a mão na massa.

O que eu fiz aqui foi um sistema MVC "na mão", utilizando apenas o PHP puro e seguindo o máximo possível as PSRs vigentes.

## Tecnologias

- PHP
- HTML
- CSS
- Javascript (JQuery)
- MySQL

## Lógica

Eu me baseei na arquitetura MVC. Esta arquitetura me permite ter uma aplicação muito bem dividida. Tenho controladores que fazem o sistema rodar, isto é, recebem as informações da camada de visão, solicitam dados do modelo caso seja necessário, e apresentam ao usuário a visão apropriada.

Para o sistema de log, eu resolvi criar triggers no banco de dados que irão gerar todas as ações realizadas nos clientes em uma tabela extra (tb_cliente_hist). O banco de dados terá essa responsabilidade.

## Como utilizar

Antes de mais nada, são necessários os seguintes programas:

- Servidor apache configurado e funcionando (ou instalar o XAMPP, WAMP, etc)
- Servidor MySQL configurado e funcionando (eu utilizo a versão 8+)

Agora siga os seguintes passos:

- Baixe a aplicação e descompacte-a na pasta do servidor (htdocs no XAMPP, www no Wamp).

- Abra seu gerenciador de banco de dados MySQL (eu utilizo o WorkBench) e abra por ele o arquivo "./database_mysql/database.sql". Execute o comando para criar o banco de dados da aplicação e as triggers para os logs.

- Com o banco de dados criado, acesse o arquivo "./source/Classes/Connect.php" e edite as informações referentes à configuração do banco de dados (estas linhas estão comentadas com "EDITE AQUI"). Nesta parte você irá colocar o host, usuário, senha, e nome da database. O nome da database originalmente é "db_cliente".

- Agora basta abrir seu navegador no caminho que você configurou sua aplicação (ex: http://localhost/crud) e utilizar o sistema.

## Conclusão

Espero que avaliem com bons olhos o meu trabalho. Agradeço pela atenção e espero que nos encontremos em breve.

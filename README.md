# Sistema de Bolão da Copa em PHP

Este é um sistema simples de bolão da Copa implementado em PHP. O sistema permite que os usuários se cadastrem, criem palpites para os jogos da Copa do Mundo e acompanhem a pontuação ao longo do torneio.

## Requisitos

Certifique-se de que o seu ambiente de desenvolvimento atenda aos seguintes requisitos:

- PHP 7.0 ou superior
- MySQL ou outro sistema de gerenciamento de banco de dados compatível com PHP
- Servidor web (por exemplo, Apache)

## Configuração

1. Clone o repositório:

    ```bash
    https://github.com/Igorpereirag/Bolao_copa.git
    ```

2. Configure o banco de dados:

    - Importe o arquivo `database.sql` no seu sistema de gerenciamento de banco de dados para criar a estrutura necessária.
    - Edite o arquivo `config.php` com as informações do seu banco de dados.

3. Inicie o servidor web:

    ```bash
    php -S localhost:8000
    ```

4. Acesse o sistema no navegador:

    [http://localhost:8000](http://localhost:8000)

## Funcionalidades

- **Cadastro de Usuários:** Os usuários podem se cadastrar no sistema.
- **Palpites da Copa:** Os usuários podem fazer palpites para os jogos da Copa.
- **Pontuação:** O sistema calcula automaticamente a pontuação dos usuários com base nos resultados dos jogos.
- **Classificação:** Exibe a classificação dos participantes do bolão.

## Contribuição

Contribuições são bem-vindas! Se encontrar bugs ou tiver sugestões para melhorias, sinta-se à vontade para abrir uma issue ou enviar um pull request.


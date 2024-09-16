# Biblioteca

Este é um sistema de gestão de biblioteca desenvolvido em **PHP** com base de dados em **MySQL**. O sistema permite gerenciar livros, autores e clientes, além de realizar o empréstimo de livros e gerenciar a autenticação de usuários.

## Funcionalidades

- **Gestão de Livros**:
  - Inserção de novos livros no sistema.
  - Edição de informações de livros existentes (título, autor, etc.).
  - Eliminação de livros do catálogo.

- **Gestão de Autores**:
  - Adicionar novos autores ao sistema.
  - Editar informações de autores existentes.
  - Eliminar autores da lista.

- **Gestão de Clientes**:
  - Cadastro de novos clientes.
  - Edição de dados dos clientes registrados.
  - Exclusão de clientes do sistema.

- **Empréstimo de Livros**:
  - Realizar pedidos de empréstimo com base nos livros disponíveis.
  - Associar os empréstimos aos clientes cadastrados.
  - Controle de devoluções.

- **Sistema de Autenticação**:
  - Cadastro de novos usuários (clientes).
  - Login e logout.
  - Controle de acesso baseado em sessões.

## Tecnologias Utilizadas

- **PHP**: Linguagem principal para o desenvolvimento do backend.
- **MySQL**: Banco de dados utilizado para armazenar informações sobre livros, autores, clientes e transações.
- **phpMyAdmin**: Ferramenta para gerenciar o banco de dados MySQL.
- **XAMPP**: Plataforma que facilita o uso do servidor Apache, banco de dados MySQL e o PHP em ambiente local.
- **HTML/CSS**: Para a estruturação e estilo das páginas.
- **JavaScript**: Para funcionalidades interativas no frontend.

## Instalação

### Pré-requisitos

Antes de rodar o projeto, certifique-se de que tem as seguintes ferramentas instaladas:

- [XAMPP](https://www.apachefriends.org/index.html)
- Navegador web (Google Chrome, Firefox, etc.)

### Passos de Instalação

1. **Clone o repositório do projeto:**

   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git

2. **Inicie o XAMPP**:

   - Abra o XAMPP Control Panel.
   - Inicie os serviços **Apache** e **MySQL** clicando no botão "Start" ao lado de cada um.

3. **Importe o banco de dados no phpMyAdmin**:

   - No navegador, acesse o phpMyAdmin em `http://localhost/phpmyadmin`.
   - Crie um novo banco de dados chamado `biblioteca`:
     - Clique na aba "Databases".
     - No campo "Create database", insira o nome `biblioteca`.
     - Clique no botão "Create".
   - Importe o arquivo de banco de dados:
     - Selecione o banco de dados `biblioteca`.
     - Clique na aba "Import".
     - Clique em "Choose File" e selecione o arquivo `biblioteca.sql` localizado na pasta `/database` do projeto.
     - Clique em "Go" para importar a estrutura e os dados.

4. **Abra o projeto no navegador**:

   - Após configurar o XAMPP e importar o banco de dados, abra o navegador e digite o seguinte endereço:

     ```
     http://localhost/nome-do-projeto
     ```

     - Substitua `nome-do-projeto` pelo nome da pasta do seu projeto dentro do diretório `htdocs` do XAMPP.

   - Você será direcionado para a página inicial do sistema de gestão de biblioteca, onde poderá realizar login, cadastrar usuários e gerenciar livros, autores, clientes e empréstimos.

## Estrutura do Projeto

O projeto está organizado da seguinte forma:

- `/database`: Contém o arquivo SQL (`biblioteca.sql`) necessário para criar e popular o banco de dados MySQL.
- `/include`: Funções e classes auxiliares usadas em várias partes do projeto.

## Como Usar o Sistema

### 1. **Login/Logout**

- Acesse a página de login na URL principal do sistema (`http://localhost/nome-do-projeto`).
- Faça login com seu nome de usuário e senha, ou crie um novo usuário clicando em "Cadastrar".
- Após o login, você será direcionado ao painel de controle.

### 2. **Gestão de Livros**

- No painel, você pode inserir, editar e excluir livros.
- Clique em "Livros" no menu para visualizar a lista de livros disponíveis.
- Para adicionar um novo livro, clique em "Adicionar Livro" e preencha o formulário.
- Para editar ou excluir um livro, use os botões correspondentes ao lado de cada item na lista de livros.

### 3. **Gestão de Clientes**

- Clique em "Clientes" no menu para gerenciar os clientes da biblioteca.
- Adicione novos clientes, edite informações existentes ou exclua clientes.


### 4. **Gestão de Autores**

- No menu, clique em "Autores" para visualizar, adicionar, editar ou excluir autores.
- O processo é semelhante ao da gestão de livros.

### 5. **Empréstimos**

- Para registrar um empréstimo, vá até a seção "Empréstimos" no menu.
- Escolha um cliente e um livro disponível, e selecione a data de devolução.
- Gerencie os empréstimos ativos.

## Melhorias Futuras

- Implementar um sistema de controle de multas para devoluções atrasadas.
- Criar relatórios detalhados sobre o uso do sistema e o histórico de empréstimos.
- Integração com APIs de bibliotecas para buscar informações adicionais de livros automaticamente.

## Contribuição

Se você deseja contribuir com melhorias para o projeto, faça um fork do repositório, crie uma nova branch para sua feature e envie um pull request. Discussões sobre novos recursos e melhorias são sempre bem-vindas!

## Licença

Este projeto está licenciado sob a licença MIT. Consulte o arquivo `LICENSE` para obter mais detalhes.

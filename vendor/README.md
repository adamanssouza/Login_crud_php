# 🧾 Sistema de Cadastro de Pessoas com Login e Geração de PDF

Este projeto é uma aplicação web simples desenvolvida em PHP com MySQL. Ele permite que usuários realizem login, cadastrem pessoas, editem, excluam, visualizem e gerem relatórios em PDF dessas pessoas.

---

## 🚀 Funcionalidades

- ✅ Autenticação de usuários (login)
- ✅ Cadastro de novas pessoas
- ✅ Listagem de pessoas cadastradas
- ✅ Visualização detalhada dos dados de cada pessoa
- ✅ Edição e exclusão de registros
- ✅ Geração de PDF com a lista completa das pessoas

---

🧰 Tecnologias Utilizadas
PHP (sem framework)

MySQL

HTML + CSS

Dompdf (para geração de PDF)

Composer (gerenciador de dependências PHP)

## 🧱 Estrutura do Projeto

```plaintext
📁 Controladores/
  ├── banco.php                    # Conexão e operações com o banco de dados
  └── ControllerCadastroPessoa.php# Lógica de inserção no banco

📁 Listagem/
  ├── ControllerDeletarPessoa.php # Exclusão de registros
  ├── ControllerEditarPessoa.php  # Atualização de dados
  ├── detalhes.php                # Página de detalhes de uma pessoa
  ├── editar.php                  # Formulário de edição
  ├── gerar_pdf.php               # Geração do PDF
  └── index.php                   # Lista geral de pessoas

📁 Login/
  ├── cadastro.php                # Cadastro de usuários (não pessoas)
  ├── login.php                   # Tela de login
  └── verificaLogin.php          # Validação de login

📄 sistema.sql                     # Script de criação da base de dados
📄 composer.json / composer.lock  # Gerenciador de dependências (Dompdf)
📁 vendor/                        # Pacotes instalados pelo Composer

## O projeto usa MySQL.

CREATE TABLE pessoas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100),
  sobrenome VARCHAR(100),
  sexo VARCHAR(20),
  idade INT,
  endereco VARCHAR(255)
);

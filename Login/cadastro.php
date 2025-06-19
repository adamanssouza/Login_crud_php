<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Cadastro de Pessoa</title>
    <style>
        /* Reset básico */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0 10px;
        }

        form {
            background-color: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            max-width: 380px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-weight: 700;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 12px 15px;
            margin-top: 12px;
            border: 1.8px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="number"]:focus,
        select:focus {
            outline: none;
            border-color: #2575fc;
            box-shadow: 0 0 6px rgba(37,117,252,0.6);
        }

        /* Botões alinhados lado a lado */
        .btn-group {
            margin-top: 25px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        button {
            flex: 1;
            padding: 12px 0;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            color: white;
            user-select: none;
        }

        button[type="submit"] {
            background-color: #4CAF50;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }

        button.voltar {
            background-color: #f44336;
        }

        button.voltar:hover {
            background-color: #d32f2f;
        }

        button.listar {
            background-color: #2196F3;
        }

        button.listar:hover {
            background-color: #1769aa;
        }

        /* Para telas pequenas, botões empilham */
        @media (max-width: 400px) {
            .btn-group {
                flex-direction: column;
            }
            button {
                flex: unset;
                width: 100%;
            }
        }
    </style>
</head>
<body>

<form method="post" action="../Controladores/ControllerCadastroPessoa.php">
    <h2>Cadastro de Pessoa</h2>

    <input type="text" name="nome" placeholder="Nome" required />
    <input type="text" name="sobrenome" placeholder="Sobrenome" required />
    <select name="sexo" required>
        <option value="" disabled selected>Selecione o sexo</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select>
    <input type="number" name="idade" placeholder="Idade" required min="0" max="120" />
    <input type="text" name="endereco" placeholder="Endereço" required />

    <div class="btn-group">
        <button type="submit">Cadastrar Pessoa</button>
        <button type="button" class="voltar" onclick="location.href='../Login/login.php'">Voltar</button>
        <button type="button" class="listar" onclick="location.href='../Listagem/index.php'">Listar Pessoas</button>
    </div>
</form>

</body>
</html>

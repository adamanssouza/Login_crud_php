<?php
require_once("../Controladores/banco.php");

if (!isset($_GET['id'])) {
    echo "<script>alert('ID não informado!'); history.back();</script>";
    exit;
}

$id = intval($_GET['id']);
$banco = new Banco();
$pessoa = $banco->getPessoaById($id);

if (!$pessoa) {
    echo "<script>alert('Pessoa não encontrada!'); history.back();</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes da Pessoa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            padding: 40px;
            text-align: center;
        }

        .detalhes {
            display: inline-block;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.1);
            text-align: left;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        p {
            font-size: 1.1rem;
            margin: 10px 0;
            color: #555;
        }

        .voltar {
            display: inline-block;
            margin-top: 20px;
            background-color: #2563eb;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
        }

        .voltar:hover {
            background-color: #1e40af;
        }
    </style>
</head>
<body>

    <div class="detalhes">
        <h2>Detalhes da Pessoa</h2>
        <p><strong>Nome:</strong> <?= htmlspecialchars($pessoa['nome']) ?></p>
        <p><strong>Sobrenome:</strong> <?= htmlspecialchars($pessoa['sobrenome']) ?></p>
        <p><strong>Sexo:</strong> <?= htmlspecialchars($pessoa['sexo']) ?></p>
        <p><strong>Idade:</strong> <?= htmlspecialchars($pessoa['idade']) ?></p>
        <p><strong>Endereço:</strong> <?= htmlspecialchars($pessoa['endereco']) ?></p>

        <a href="crud.php" class="voltar">← Voltar para Lista</a>
    </div>

</body>
</html>

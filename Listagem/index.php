<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}

require_once("../Controladores/banco.php");
$banco = new Banco();
$pessoas = $banco->getPessoas();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Lista de Pessoas</title>
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f4f7fc;
        margin: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        min-height: 100vh;
    }

    h1 {
        color: #333;
        margin-bottom: 20px;
    }

    .btn-voltar {
        align-self: flex-start;
        margin-bottom: 20px;
        padding: 10px 18px;
        background-color: #f44336;
        border: none;
        border-radius: 6px;
        color: white;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
        font-size: 1rem;
    }

    .btn-voltar:hover {
        background-color: #d32f2f;
    }

    .btn-pdf {
        margin-bottom: 20px;
        padding: 10px 18px;
        background-color: #4CAF50;
        border: none;
        border-radius: 6px;
        color: white;
        font-weight: 600;
        cursor: pointer;
        text-decoration: none;
        transition: background-color 0.3s ease;
        font-size: 1rem;
    }

    .btn-pdf:hover {
        background-color: #45a049;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        max-width: 900px;
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(0,0,0,0.1);
    }

    th, td {
        padding: 14px 20px;
        text-align: left;
        border-bottom: 1px solid #eee;
        font-size: 1rem;
        color: #444;
    }

    th {
        background-color: #2575fc;
        color: white;
        font-weight: 600;
    }

    tr:hover {
        background-color: #f1f8ff;
    }

    td.acoes {
        text-align: right;
    }

    .acoes a {
        display: inline-block;
        padding: 6px 12px;
        border-radius: 6px;
        font-weight: bold;
        font-size: 0.9rem;
        text-decoration: none;
        margin-left: 10px;
        color: white;
        transition: background-color 0.3s ease;
    }

    .editar {
        background-color: #FFC107;
    }

    .editar:hover {
        background-color: #e0a800;
    }

    .excluir {
        background-color: #f44336;
    }

    .excluir:hover {
        background-color: #c62828;
    }

    @media (max-width: 600px) {
        table, thead, tbody, th, td, tr {
            display: block;
        }
        thead tr {
            display: none;
        }
        tr {
            margin-bottom: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.1);
            padding: 15px;
        }
        td {
            border: none;
            padding: 8px 10px;
            position: relative;
            padding-left: 50%;
            font-size: 0.9rem;
        }
        td::before {
            position: absolute;
            top: 8px;
            left: 10px;
            width: 45%;
            padding-right: 10px;
            white-space: nowrap;
            font-weight: 700;
            color: #555;
        }
        td:nth-of-type(1)::before { content: "Nome"; }
        td:nth-of-type(2)::before { content: "Opções"; }
    }
    </style>
</head>
<body>

    <a href="../Login/cadastro.php" class="btn-voltar">← Voltar para Login</a>

    <h1>Lista de Pessoas</h1>

    <!-- Botão PDF -->
    <a href="gerar_pdf.php" class="btn-pdf" target="_blank">📄 Gerar PDF</a>


    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pessoas as $p): ?>
                <tr>
                    <td><a href="detalhes.php?id=<?= $p['id'] ?>"><?= htmlspecialchars($p['nome'] . " " . $p['sobrenome']) ?></a></td>
                    <td class="acoes">
                        <a href="editar.php?id=<?= $p['id'] ?>" class="editar">Editar</a>
                        <a href="ControllerDeletarPessoa.php?id=<?= $p['id'] ?>" class="excluir" onclick="return confirm('Deseja excluir?')">Excluir</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>

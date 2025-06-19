<?php
require_once("../Controladores/banco.php");

if (!isset($_GET['id'])) {
    echo "<script>alert('ID não informado!');history.back();</script>";
    exit;
}

$id = intval($_GET['id']);
$banco = new Banco();
$pessoa = $banco->getPessoaById($id);

if (!$pessoa) {
    echo "<script>alert('Pessoa não encontrada!');history.back();</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Editar Pessoa</title>
    <style>
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #e2e8f0, #f8fafc);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    padding: 0;
}

form {
    background: white;
    padding: 30px 40px;
    border-radius: 12px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    display: flex;
    flex-direction: column;
    gap: 15px;
    transition: box-shadow 0.3s ease;
}

form:hover {
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
}

h2 {
    text-align: center;
    margin-bottom: 10px;
    color: #1e293b;
    font-size: 1.6rem;
}

input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 10px 12px;
    border: 1.8px solid #cbd5e1;
    border-radius: 8px;
    font-size: 1rem;
    color: #334155;
    transition: border-color 0.3s ease;
}

input:focus,
select:focus {
    border-color: #2563eb;
    outline: none;
    box-shadow: 0 0 6px rgba(37, 99, 235, 0.4);
}

button {
    padding: 12px;
    font-size: 1rem;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button[type="submit"] {
    background-color: #2563eb;
    color: white;
}

button[type="submit"]:hover {
    background-color: #1e40af;
}

button[type="button"] {
    background-color: #94a3b8;
    color: white;
}

button[type="button"]:hover {
    background-color: #64748b;
}

    </style>
</head>

<body>

<form method="post" action="ControllerEditarPessoa.php">
    <input type="hidden" name="id" value="<?= $pessoa['id'] ?>">
    <input type="text" name="nome" value="<?= $pessoa['nome'] ?>" required>
    <input type="text" name="sobrenome" value="<?= $pessoa['sobrenome'] ?>" required>
    <select name="sexo" required>
        <option value="">Selecione o sexo</option>
        <option value="Masculino" <?= ($pessoa['sexo'] == 'Masculino') ? 'selected' : '' ?>>Masculino</option>
        <option value="Feminino" <?= ($pessoa['sexo'] == 'Feminino') ? 'selected' : '' ?>>Feminino</option>
    </select>
    <input type="number" name="idade" value="<?= $pessoa['idade'] ?>" required>
    <input type="text" name="endereco" value="<?= $pessoa['endereco'] ?>" required>
    <button type="submit">Salvar Alterações</button>
    <button type="button" onclick="window.location.href='index.php'">Voltar</button>
</form>

</body>
</html>

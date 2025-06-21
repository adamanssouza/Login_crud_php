<?php
require_once("../Controladores/banco.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $sexo = $_POST['sexo'];
    $idade = intval($_POST['idade']);
    $endereco = $_POST['endereco'];

    $banco = new Banco();
    $sucesso = $banco->updatePessoa($id, $nome, $sobrenome, $sexo, $idade, $endereco);

    header("Location: ../Listagem/crud.php");
    exit();
}
?>
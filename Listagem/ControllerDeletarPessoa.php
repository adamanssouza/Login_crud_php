<?php
require_once("../Controladores/banco.php");

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $banco = new Banco();

    
    $banco->deletePessoa($id);
}


header("Location: ../Listagem/crud.php");
exit();
?>

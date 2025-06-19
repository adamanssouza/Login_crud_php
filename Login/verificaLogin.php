<?php
session_start();
$conn = new mysqli("localhost", "root", "adamanspc", "sistema");

$login = $_POST['login'];
$senha = $_POST['senha'];

if (empty($login) || empty($senha)) {
    echo "<script>alert('Preencha todos os campos!');history.back();</script>";
    exit();
}

$sql = "SELECT * FROM usuarios WHERE login=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $login);
$stmt->execute();
$result = $stmt->get_result();

if ($user = $result->fetch_assoc()) {
    // Compara a senha digitada com a do banco em texto puro
    if ($senha === $user['senha']) {
        $_SESSION['usuario'] = $login;
        header("Location: cadastro.php");
        exit();
    } else {
        echo "<script>alert('Senha incorreta!');history.back();</script>";
    }
} else {
    echo "<script>alert('Usuário não encontrado!');history.back();</script>";
}
?>

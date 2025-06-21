<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
        }

        input[type="text"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<form action="verificaLogin.php" method="post">
    <h2>Login</h2>
    <input type="text" name="login" placeholder="Usuário" required>
    <input type="password" name="senha" placeholder="Senha" required>
    <input type="submit" value="Entrar">
</form>

</body>
</html>

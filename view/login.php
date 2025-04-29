<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, red, black);
            color: white;
        }

        #form {
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 40px;
            border-radius: 20px;
            width: 300px;
            text-align: center;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 16px;
        }

        button {
            background-color: blue;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .mensagem {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
        }

        .sucesso {
            background-color: #d4edda;
            color: green;
        }

        .erro {
            background-color: #f8d7da;
            color: red;
        }

        a {
            color: lightblue;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div id="form">
    <h2>Login</h2>

    <!-- Exibe a mensagem (se existir) -->
    <?php
    if (isset($_SESSION['mensagem'])) {
        $tipo = $_SESSION['tipo_mensagem'];
        echo "<div class='mensagem $tipo'>{$_SESSION['mensagem']}</div>";
        unset($_SESSION['mensagem']);
        unset($_SESSION['tipo_mensagem']);
    }
    ?>

    <form method="post" action="loginController.php">
        <input type="text" name="username" placeholder="Usuário" required>
        <input type="password" name="senha" placeholder="Senha" required>
        <button type="submit">Entrar</button>
    </form>
    <br>
    <a href="recuperar-senha.php">Esqueci minha senha</a>
</div>

</body>
</html>

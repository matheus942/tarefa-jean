<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 350px;
        }

        h2 {
            text-align: center;
            color: #0077cc;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            color: #333;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #0077cc;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #005fa3;
        }

        .mensagem {
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
            text-align: center;
        }

        .mensagem.sucesso {
            background-color: #d4edda;
            color: #155724;
        }

        .mensagem.erro {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Cadastro de Usuário</h2>

    <!-- Exibe a mensagem de sucesso ou erro -->
    <?php if (isset($_SESSION['mensagem'])): ?>
        <div class="mensagem <?= $_SESSION['tipo']; ?>">
            <?= $_SESSION['mensagem']; ?>
        </div>
        <?php unset($_SESSION['mensagem'], $_SESSION['tipo']); ?>
    <?php endif; ?>

    <!-- Formulário de cadastro -->
    <form action="/tarefa-jean/controller/cadastroController.php" method="POST">

    <label for="userName">Nome de Usuário:</label>
    <input type="text" name="userName" id="userName" required>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required>

        <label for="confirmar">Confirmar Senha:</label>
        <input type="password" name="confirmar" id="confirmar" required>

        <button type="submit" name="cadastrar">Cadastrar</button>
    </form>
</div>
</body>
</html>

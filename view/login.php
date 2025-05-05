<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>/* Reset básico de margens e paddings */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Corpo da página */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    padding: 20px;
    text-align: center;
}

/* Container geral */
.container {
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Título */
h2 {
    color: #4CAF50;
    margin-bottom: 20px;
}

/* Formulário */
form {
    display: flex;
    flex-direction: column;
}

/* Inputs */
input[type="email"],
input[type="password"],
input[type="text"] {
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

/* Botões */
button {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #45a049;
}

/* Links */
a {
    color: #4CAF50;
    text-decoration: none;
    margin-top: 10px;
}

a:hover {
    text-decoration: underline;
}

/* Mensagens de erro e sucesso */
p {
    font-size: 16px;
    margin: 20px 0;
}

p.sucesso {
    color: green;
}

p.erro {
    color: red;
}
</style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>


        <?php if (isset($_SESSION['message'])): ?>
            <div class="message <?php echo $_SESSION['message_type']; ?>">
                <?php echo $_SESSION['message']; ?>
            </div>
            <?php unset($_SESSION['message'], $_SESSION['message_type']); ?>
        <?php endif; ?>

        <form action="../controller/LoginController.php" method="POST">
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required placeholder="Digite seu e-mail">
            </div>
            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>
            <button type="submit" name="login" href='http://localhost/tarefa-jean/site/pagina%20_inicial.php'>Entrar</button>
        </form>

        <div class="links">
            <a href="recuperar_senha.php">Esqueceu a senha?</a>
        </div>
    </div>
</body>
</html>

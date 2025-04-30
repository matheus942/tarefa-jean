<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
</head>
<body>
    <h2>Bem-vindo à Página Inicial!</h2>
    <p>Você está logado como: <?php echo $_SESSION['user_email']; ?></p>
    <a href="logout.php">Sair</a>
</body>
</html>

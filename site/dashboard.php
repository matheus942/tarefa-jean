<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Bem-vindo ao sistema!</h1>

    <?php
    if (isset($_SESSION['mensagem'])) {
        $tipo = $_SESSION['tipo_mensagem'];
        echo "<p class='$tipo'>{$_SESSION['mensagem']}</p>";
        unset($_SESSION['mensagem']);
        unset($_SESSION['tipo_mensagem']);
    }
    ?>

    <p><a href="login.php">Sair</a></p>
</body>
</html>

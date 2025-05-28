<?php
session_start();


$usuarioCorreto = '??';
$senhaCorreta = '??';


$username = $_POST['username'] ?? '';
$senha = $_POST['senha'] ?? '';


if ($username === $usuarioCorreto && $senha === $senhaCorreta) {
    $_SESSION['mensagem'] = "Login feito com sucesso!";
    $_SESSION['tipo_mensagem'] = "sucesso";
    header("Location: dashboard.php");
    exit;
} else {
    $_SESSION['mensagem'] = "Usuário ou senha incorretos.";
    $_SESSION['tipo_mensagem'] = "erro";
    header("Location: login.php");
    exit;
}

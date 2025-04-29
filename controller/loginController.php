<?php
session_start();

// Dados simulados (você pode trocar por consulta ao banco)
$usuarioCorreto = 'matheus';
$senhaCorreta = 'Ma20109';

// Recebe os dados
$username = $_POST['username'] ?? '';
$senha = $_POST['senha'] ?? '';

// Verifica login
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

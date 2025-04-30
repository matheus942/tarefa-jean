<?php
session_start();

// Caminho correto para o model
require_once('../model/cadastroModel.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = $_POST['userName'] ?? '';
    $email = $_POST['email'] ?? '';
    $senha = $_POST['senha'] ?? '';
    $confirmar = $_POST['confirmar'] ?? '';

    if ($senha !== $confirmar) {
        $_SESSION['mensagem'] = 'As senhas não coincidem.';
        $_SESSION['tipo'] = 'erro';
        header('Location: ../view/cadastro.php');
        exit;
    }

    $model = new CadastroModel();
    $model->cadastrar($userName, $email, $senha);

    $_SESSION['mensagem'] = 'Cadastro realizado com sucesso!';
    $_SESSION['tipo'] = 'sucesso';
    header('Location: ../view/cadastro.php');
    exit;
}
?>

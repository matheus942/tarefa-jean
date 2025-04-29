<?php
require_once '../model/cadastroModel.php'; // Inclua o arquivo do modelo

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['senha'];

    $cadastroModel = new CadastroModel();

    if ($cadastroModel->register($fullName, $userName, $email, $password)) {
        // Sucesso ao cadastrar
        $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
        $_SESSION['tipo_mensagem'] = "sucesso";
        header("Location: ../view/login.php");
    } else {
        // Falha no cadastro
        $_SESSION['mensagem'] = "Erro ao cadastrar usuário.";
        $_SESSION['tipo_mensagem'] = "erro";
        header("Location: ../view/cadastro.php");
    }
    exit;
}

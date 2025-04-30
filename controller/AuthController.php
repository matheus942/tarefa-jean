<?php
session_start();
require_once '../model/CadastroModel.php';

// Função para exibir mensagens e redirecionar
function setMensagem($tipo, $mensagem) {
    $_SESSION['mensagem'] = $mensagem;
    $_SESSION['tipo'] = $tipo;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}

// Função de Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuarioModel = new UsuarioModel();
    $usuario = $usuarioModel->login($email, $senha);

    if ($usuario) {
        $_SESSION['usuario'] = $usuario;
        setMensagem('sucesso', 'Login bem-sucedido!');
        header('Location: /home.php');
    } else {
        setMensagem('erro', 'E-mail ou senha inválidos.');
    }
}

// Função de Recuperar Senha – Enviar código
if (isset($_POST['recuperar_senha'])) {
    $email = $_POST['email'];

    $usuarioModel = new UsuarioModel();
    $usuario = $usuarioModel->verificarEmail($email);

    if ($usuario) {
        $codigo = $usuarioModel->criarCodigoRecuperacao($email);
        // Enviar código por e-mail (pode ser feito com PHPMailer ou similar)
        setMensagem('sucesso', 'Código de recuperação enviado para o e-mail.');
    } else {
        setMensagem('erro', 'E-mail não encontrado.');
    }
}

// Função de Verificar Código
if (isset($_POST['verificar_codigo'])) {
    $email = $_POST['email'];
    $codigo = $_POST['codigo'];

    $usuarioModel = new UsuarioModel();
    if ($usuarioModel->verificarCodigo($email, $codigo)) {
        $_SESSION['email_recuperacao'] = $email;
        header('Location: /nova_senha.php');
        exit();
    } else {
        setMensagem('erro', 'Código inválido ou expirado.');
    }
}

// Função de Trocar Senha
if (isset($_POST['trocar_senha'])) {
    $email = $_SESSION['email_recuperacao'];
    $novaSenha = $_POST['nova_senha'];

    $usuarioModel = new UsuarioModel();
    if ($usuarioModel->trocarSenha($email, $novaSenha)) {
        setMensagem('sucesso', 'Senha alterada com sucesso!');
    } else {
        setMensagem('erro', 'Erro ao trocar a senha.');
    }
}
?>

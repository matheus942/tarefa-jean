<?php
session_start(); // Inicia a sessão

// Função para redirecionar com mensagem
function setMessageAndRedirect($message, $messageType, $redirectPage) {
    $_SESSION['message'] = $message;
    $_SESSION['message_type'] = $messageType; // Pode ser 'success' ou 'error'
    header("Location: $redirectPage");
    exit();
}

// Verifica se o código foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['verificar'])) {
    $codigo_digitado = $_POST['codigo'];

    // Verifica se o código digitado é válido
    if (isset($_SESSION['codigo_recuperacao']) && $codigo_digitado == $_SESSION['codigo_recuperacao']) {
        // Código correto, redireciona para a página de troca de senha
        setMessageAndRedirect('Código verificado com sucesso! Agora, altere sua senha.', 'success', 'nova_senha.php');
    } else {
        // Código incorreto
        setMessageAndRedirect('Código incorreto. Tente novamente.', 'error', 'verificar_codigo.php');
    }
}
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Código</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="recuperar-container">
        <h2>Verificar Código de Recuperação</h2>

        <!-- Exibir mensagens de sucesso ou erro -->
        <?php if (isset($_SESSION['message'])): ?>
            <div class="message <?php echo $_SESSION['message_type']; ?>">
                <?php echo $_SESSION['message']; ?>
            </div>
            <?php unset($_SESSION['message'], $_SESSION['message_type']); ?>
        <?php endif; ?>

        <form action="verificar_codigo.php" method="POST">
            <div class="input-group">
                <label for="codigo">Código de Recuperação</label>
                <input type="text" id="codigo" name="codigo" required placeholder="Digite o código de 6 dígitos">
            </div>
            <button type="submit" name="verificar">Verificar Código</button>
        </form>
        
        <div class="links">
            <a href="login.php">Já tem uma conta? Faça login.</a>
        </div>
    </div>
</body>
</html>

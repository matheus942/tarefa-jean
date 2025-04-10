<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(-45deg, #1a01fa, #ffffff, #eeff04);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container {
            background: #ffffff;
            border: 2px solid #1a01fa;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            color: black;
        }

        .title {
            font-size: 1.8em;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .subtitle {
            font-size: 1em;
            margin-bottom: 30px;
            color: #666;
            line-height: 1.5;
        }

        .input {
            position: relative;
            margin-bottom: 20px;
            width: 100%;
        }

        .input i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2em;
            color: #1a01fa;
        }

        .input input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border: 2px solid #ffffff;
            border-radius: 22px;
            outline: none;
            font-family: inherit;
            font-size: 14px;
            transition: border-color 0.3s ease;
        }

        .input input:focus {
            border-color: #1a01fa;
        }

        #btn {
            margin-top: 20px;
        }

        #btn button {
            font-family: inherit;
            background: linear-gradient(-45deg, #1a01fa, #ffffff, #eeff04);
            width: 100%;
            height: 45px;
            border: none;
            font-size: 1.2em;
            color: #ffffff;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        #btn button:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        #btn button:active {
            transform: scale(0.95);
        }

        .back-link {
            margin-top: 20px;
            font-size: 0.9em;
            color: #1a01fa;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .success-message,
        .error-message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            font-size: 1em;
            display: none;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error-message {
            background: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Recuperar Senha</h1>
        <p class="subtitle">Informe seu e-mail ou nome de usuário abaixo e enviaremos instruções para redefinir sua senha.</p>

        
        <div class="input">
            <i class="fas fa-user"></i>
            <input type="text" id="userInput" placeholder="E-mail ou Nome de Usuário" required>
        </div>

      
        <div id="btn">
            <button onclick="recoverPassword()">Enviar Instruções</button>
        </div>

        
        <div class="success-message" id="successMessage">
            Um e-mail com instruções foi enviado. Por favor, verifique sua caixa de entrada.
        </div>
        <div class="error-message" id="errorMessage">
            Não foi possível encontrar uma conta com essas informações. Tente novamente.
        </div>
        <br><br>
        
        <a href='file:///C:/Users/matheus.1935/Documents/tarefa%20jean/tarefa-jean/login/login.php' class="login.php">Voltar ao Login</a>
    </div>

   
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    
    <script>
        function recoverPassword() {
            const userInput = document.getElementById('userInput').value.trim();
            const successMessage = document.getElementById('successMessage');
            const errorMessage = document.getElementById('errorMessage');

            
            if (userInput === 'usuario@example.com' || userInput === 'usuario') {
                successMessage.style.display = 'block';
                errorMessage.style.display = 'none';
            } else {
                errorMessage.style.display = 'block';
                successMessage.style.display = 'none';
            }
        }
    </script>
</body>
</html>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tela login</title>
        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-image: linear-gradient(45deg, red, black);
            }

            div {
                background-color: rgba(0, 0, 0, 0.8);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 80px;
                border-radius: 50px;
                color: rgb(255, 255, 255);
            }

            input {
                padding: 10px;
                border: none;
                outline: none;
                font-size: 25px;
            }

            button {
                background-color: rgb(27, 24, 226);
                border: none;
                padding: 15px;
                width: 100%;
                border-radius: 10px;
                color: white;
                font-size: 15px;
                cursor: pointer;
            }

            button:hover {
                background-color: blue;
            }
        </style>
    </head>

    <body>

    
     <h2>login</h2>

        <div id="form">
        <form medthod="post" action="loginController.php" >
            <label for="username">name</label>
                    <input id="username" name="username" placeholder="username" type="text">
                    <br><br>
            <label for="password">password</label>
                    <input id="senha" name="senha" placeholder="password" type="password">
                    <br><br>
            <button type="submit" http="http://localhost/tarefa-jean/site/site.php">entrar</button>
            <br><br>
            <a href='http://localhost/tarefa-jean/view/recupera%c3%a7%c3%a3o-de-senha.php' class="recuperação-de-senha.php">Ir para pagina de recuperaçaõ de senha</a>
            </form>
        </div>

        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

        <script>
            function recoverPassword() {
                const userInput = document.getElementById('userInput').value.trim();
                const successMessage = document.getElementById('successMessage');
                const errorMessage = document.getElementById('errorMessage');


                if (userInput === 'usuario@example.com' || userInput === 'usuario') {
                    successMessage.style.display = ' login feito';
                    errorMessage.style.display = 'Email errado';
                } else {
                    errorMessage.style.display = '';
                    successMessage.style.display = 'none';
                }
            }
        </script>
    </body>

    </html>
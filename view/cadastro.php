<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
   *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: "poppins", sans-serif;
}

body{
    background: #121212;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container{
      background-color: #fafafa;
      border-radius: 14px;
      margin: 14px;
      max-width: 600px;
      width: 100%;
      box-sizing: 0.3px 5px rgba(0,0,0,0.5);
}

.header{
    background: linear-gradient(120deg, #3acbf0 0%, #8bb0ff 100%);
    padding: 24px;
    text-align: center;
    color: #fff;
}

.form{
    padding: 18px;

}

.form-content{
    margin-bottom: 8px;
    padding-bottom: 18px;
    position: relative;
}

.form-content label{
    display: inline-block;
    margin-bottom: 4px;
}

.form-content input{
    display: block;
    width: 100%;
    border-radius: 8px;
    padding: 8px;
    border: 2px solid #dfdfdf;
}

.form-content a{
    position: absolute;
    bottom: -8px;
    left: 0;
    visibility: hidden;
}

.form button{
    background-color: #00c3ff;
    color: #fff;
    width: 100%;
    border-radius: 20px;
    padding: 20px;
    border: 20px;
    font-size: 20px;
    cursor: pointer;
    margin-top: 20px;
}

.form-content.error input{
    border-color: #ff3b25;
}

.form-content.error a{
    color: #ff3b25;
}
</style>
    <title>Book Club</title>
</head>
<body>
    <div class="container">
        <section class="header">
            <h2>nova conta</h2>
        </section>

        <form action="../controller/CadastroController.php" method="POST">
            <div class="form-content ">
                <label for="username">nome de usuário</label>
                <input name="username" type="text" id="username" placeholder="Digite o nome do usuário">
                <a>seu G-mail ou senha estão errados</a>
            </div>

            <div class="form-content">
                <label for="email">email</label>
                <input name="email" type="email" id="email" placeholder="Digite o seu nome">
                <a>Aqui vai a mensagem de erro</a>
            </div>

            <div class="form-content">
                <label for="telefone">telefone</label>
                <input name="telefone" type="nunber" id="telefone" placeholder="Digite seu telefone">
                <a>Aqui vai a mensagem de erro</a>
            </div> 
            
            
            <div class="form-content">
                <label for="password">password</label>
                <input name="password" type="password" id="password" placeholder="Digite a sua senha">
                <a>Aqui vai a mensagem de erro</a>
            </div>
            
            <div class="form-content error">
                <label for="confirm_password">confirmação de senha</label>
                <input name="confirm_password" type="text" id="confirm_password" placeholder="Digite a sua senha novamente">
                <a>Aqui vai a mensagem de erro</a>
            </div> 
            
            <button type="submit" href="http://localhost/tarefa-jean/view/login.php">cadastrar</button>
        </form>
        <div class="links">
            <a href="login.php">Você já é cadastrado então aperte aqui</a>
        </div>
    </div>
    </div>
    <script src="./javascript.js"></script>
</body>
</html>
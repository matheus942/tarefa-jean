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
div{
    background-color: rgba(0, 0, 0, 0.8);
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    padding: 80px;
    border-radius: 50px;
    color: rgb(255, 255, 255);
}
input{
    padding: 10px;
    border: none;
    outline: none;
    font-size: 25px;
}
button{
    background-color: rgb(27, 24, 226);
    border: none;
    padding: 15px;
    width: 100%;
    border-radius: 10px;
    color: white;
    font-size: 15px;
    cursor: pointer;
}
button:hover{
    background-color: blue;
}
    </style>
</head>
<body>
    <div>
   <h1>login</h1>
   <input type="text" placeholder="nome">
    <br><br>
   <input type="number" placeholder="senha">
   <br><br>
   <button>entrar</button>
      <br><br>
     <a href='file:///C:/Users/matheus.1935/Documents/tarefa%20jean/tarefa-jean/recupera%C3%A7%C3%A3o%20de%20senha/recupera%C3%A7%C3%A3o-de-senha.php#' class="recuperação-de-senha.php">Ir para pagina de recuperaçaõ de senha</a>

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
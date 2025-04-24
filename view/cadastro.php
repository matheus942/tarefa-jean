    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="main.css">
        <title>cadastro</title>
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
    background-color: #1a01fa;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    border: #000000;
    border-radius: 50%;
}

.form {
    background: #ffffff;
    border: 2px solid #1a01fa;
    border-radius: 10px;
    padding: 40px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 100px;
    text-align: center;
    color: black;
}

.title {
    font-size: 1.5em;
    margin-bottom: 20px;
    font-weight: bold;
}

.input {
    position: relative;
    margin-bottom: 15px;
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
    outline: 0;
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
    background-color: black;
    width: 100%;
    height: 45px;
    border: 0;
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
</style>
    </head>

    <body>
        <div id="form">
            <form action="../controller/CadastroController.php" method="post">
                <h2 class="title">cadastrar</h2>
                <label for="fullname">fullname</label>
                <div class="input">
                    <input id="fullname" name="fullname" placeholder="fullname" type="text">
                </div>
                <label for="username">name</label>
                <div class="input">
                    <input id="username" name="username" placeholder="username" type="text">
                </div>
                <label for="Email">Email</label>
                <div class="input">
                    <input id="Email" name="Email" placeholder="Email" type="text">
                </div>
                <label for="password">password</label>
                <div class="input">
                    <input id="senha" name="senha" placeholder="password" type="password">
                </div>
                <div id="btn">
                    <button type="submit">cadastrar</button>
                </div>

            </form>
        </div>
    </body>

    </html>
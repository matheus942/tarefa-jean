<?php

require '../model/cadastroModel.php';

if ($_POST) {
    
    $fullName = $_POST['fullName'];
    $username = $_POST['userName'] ;
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = register($fullName, $username, $email, $senha);

    echo $result;

    if ($result) {
        echo ("Cadastro realizado com sucesso!");
    } else {
        echo ("Não foi possível realizar o cadastro.");
    }
}
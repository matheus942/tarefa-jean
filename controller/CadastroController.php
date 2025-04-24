<?php

require '../model/cadastroModel.php';

if ($_POST) {
    
    $fullName = $_POST['fullname'];
    $username = $_POST['username'] ;
    $Email = $_POST['Email'];
    $senha = $_POST['senha'];

    $result = register($fullName, $username, $Email, $senha);

    echo $result;

    if ($result) {
        echo ("Cadastro realizado com sucesso!");
    } else {
        echo ("Não foi possível realizar o cadastro.");
    }
}
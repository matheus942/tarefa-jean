<?php

require '../model/CadastroModel.php';

if ($_POST){
         $fullName = $_POST['fullName'];
         $userName = $_POST['userName'];
         $Email = $_POST['Email'];
         $senha = $_POST['senha'];


$result = register($fullName, $Email, $userName, $password);

echo $result;

if($result){
   echo "Cadsatro realizado com sucesso! ";
}else{
    echo "Não foi possivel realizar o cadastro.";
}
}
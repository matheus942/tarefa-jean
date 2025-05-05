
<?php

require_once '../model/CadastroModel.php';

if ($_POST){
         $fullName = $_POST['fullName'];
         $username = $_POST['username'];
         $Email = $_POST['Email'];
         $senha = $_POST['senha'];
         $confirm_Password = $_POST["confirm_password"] ?? null;


$result = register($fullName, $Email, $username, $senha, $confirm_password);

echo $result;

if($result){
   echo "Cadsatro realizado com sucesso! ";
}else{
    echo "Não foi possivel realizar o cadastro.";
}
}
<?php

require '../service/conexao.php';

function register($fullName, $name, $email, $senha){
    
    
         $conn = new usePDO;
         $instance = $conn->getInstance(); 

         //criptografia da senha
         $hashed_password = pasword_hash($password, password_DEFAULT);


         $sql = "INSERT INTO users (full_name, email, username, password) VALUES (?, ?, ?, ?)";
         $stmt = $instance->prepare($sql);
         $stmt->execute([$fullName, $email, $username, $hashed_password]);

         $result = $stmt->rowCount();
         return $result;
}
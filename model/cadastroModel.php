<?php

require '../service/conexao.php';

function register($fullName, $username, $email, $senha){
    
    
         $conn = new usePDO;
         $instance = $conn->getInstance(); 

         

         //cadastro de pessoa
         $sql = "INSERT INTO users (full_name, email) VALUES (?, ?)";
         $stmt = $instance->prepare($sql);
         $stmt->execute([$fullName, $email, $username, $hashed_password]);
         
         //criptografia da senha
         $hashed_password = pasword_hash($password, password_DEFAULT);

        //cadastro de usuario
         $idPessoa = $stmt->lastinsertId();
         $sql = "INSERT INTO users (full_name, email) VALUES (?, ?)";
         $stmt = $instance->prepare($sql);
         $stmt->execute([$fullName, $email, $username, $hashed_password]);
         return $idPessoa;
}
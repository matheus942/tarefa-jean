<?php

require '../service/conexao.php';

function register($fullName, $userName, $Email, $senha){
    
    
         $conn = new usePDO;
         $instance = $conn->getInstance(); 

         

         //cadastro de pessoa
         $sql = "INSERT INTO pessoa (full_name, email) VALUES (?, ?)";
         $stmt = $instance->prepare($sql);
         $stmt->execute([$fullName, $Email, $userName, $hashed_password]);
         
         //criptografia da senha
         $hashed_password = pasword_hash($password, password_DEFAULT);

        //cadastro de usuario
         $idPessoa = $stmt->lastinsertId();
         $sql = "INSERT INTO usuario (full_name, email) VALUES (?, ?)";
         $stmt = $instance->prepare($sql);
         $stmt->execute([$fullName, $Email, $userName, $hashed_password]);
         return $idPessoa;
}
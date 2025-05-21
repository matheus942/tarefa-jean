<?php
require '../service/conexao.php';

 function register($userName, $Email, $telefone, $senha, $confirm_password)
 {

         $conn = new usePDO();
         $instance = $conn->getInstance();

         
         //cadastro de pessoa
         $sql = "INSERT INTO pesssoa (name, telefone, email) VALUES (?, ?, ?)";
         $stmt = $instance->prepare($sql);
         $stmt->execute([$fullName, $email, ]);
         
         //criptografia da senha
         $hashed_password = pasword_hash($password, password_DEFAULT);


         $sql = "INSERT INTO users (full_name, email, username, password) VALUES (?, ?, ?, ?)";
        //cadastro de usuario
         $idPessoa = $stmt->lastinsertId();
         $sql = "INSERT INTO usuario (name, password) VALUES (?, ?)";
         $stmt = $instance->prepare($sql);
         $stmt->execute([$fullName, $email, $username, $hashed_password]);

         $result = $stmt->rowCount();
         return $result;
         return $idPessoa;
}

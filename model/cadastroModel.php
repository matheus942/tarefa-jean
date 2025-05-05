<?php
require '../service/conexao.php';


 register($fullName, $name, $email, $senha, $confirm_password)
 {
 register($fullName, $username, $email, $senha, $confirm_password)
 {
    
    
         $conn = new usePDO ;
         $instance = $conn->getInstance()

         

         //cadastro de pessoa
         $sql = "INSERT INTO usuario (full_name, email) VALUES (?, ?)";
         $stmt = $instance->prepare($sql);
         $stmt->execute([$fullName, $email, $username, $hashed_password]);
         
         //criptografia da senha
         $hashed_password = pasword_hash($password, password_DEFAULT);


         $sql = "INSERT INTO users (full_name, email, username, password) VALUES (?, ?, ?, ?)";
        //cadastro de usuario
         $idPessoa = $stmt->lastinsertId();
         $sql = "INSERT INTO pessoa (full_name, email) VALUES (?, ?)";
         $stmt = $instance->prepare($sql);
         $stmt->execute([$fullName, $email, $username, $hashed_password]);

         $result = $stmt->rowCount();
         return $result;
         return $idPessoa;
}
}
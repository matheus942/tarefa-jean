<?php

function register($fullName, $username, $email, $senha) {
    $conn = new usePDO;
    $instance = $conn->getInstance();

    // Criptografar a senha antes de armazenar
    $hashed_password = password_hash($senha, PASSWORD_DEFAULT);

    try {
        // Cadastro de usuário na tabela 'usuario'
        $sql = "INSERT INTO usuario (full_name, email, username, senha) VALUES (?, ?, ?, ?)";
        $stmt = $instance->prepare($sql);
        $stmt->execute([$fullName, $email, $username, $hashed_password]);

        // Verifique se a inserção foi bem-sucedida
        $idUsuario = $stmt->lastInsertId();

        // Se você também estiver inserindo dados na tabela 'pessoa', você pode adicionar aqui:
        // $sql2 = "INSERT INTO pessoa (full_name, email) VALUES (?, ?)";
        // $stmt2 = $instance->prepare($sql2);
        // $stmt2->execute([$fullName, $email]);

        return $idUsuario; // Retorna o ID do novo usuário inserido
    } catch (PDOException $e) {
        die("Erro ao cadastrar o usuário: " . $e->getMessage());
    }
}

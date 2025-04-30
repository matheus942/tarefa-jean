<?php
require_once(__DIR__ . '/../Conexao.php'); // Corrigir o caminho para sua classe de conexão

class CadastroModel {
    private $conn;

    public function __construct() {
        $this->conn = (new Conexao())->getInstance();
    }

    public function cadastrar($nome, $email, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senhaHash);
        return $stmt->execute();
    }
}

<?php
// Inclui a classe Conexao para usar a conexão com o banco de dados
require_once 'Conexao.php';

class Usuario {
    private $conn;

    // Construtor da classe, onde a conexão é estabelecida
    public function __construct() {
        $this->conn = Conexao::getInstance();
    }

    // Função para cadastrar um usuário no banco de dados
    public function cadastrar($nome, $email, $senha) {
        try {
            // Criptografa a senha para segurança
            $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT);

            // Comando SQL para inserir os dados na tabela "usuarios"
            $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)";
            
            // Prepara a query para execução
            $stmt = $this->conn->prepare($sql);

            // Faz o "bind" dos valores aos parâmetros
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':senha', $senhaCriptografada);

            // Executa a query e retorna verdadeiro em caso de sucesso
            return $stmt->execute();
        } catch (PDOException $e) {
            // Caso ocorra algum erro, exibe a mensagem de erro
            echo "Erro ao cadastrar: " . $e->getMessage();
            return false;
        }
    }
}
?>

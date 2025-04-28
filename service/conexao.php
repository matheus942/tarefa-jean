<?php

class usePDO
{
    private $servername = "localhost";
    private $username = "root";  // Defina seu usuário aqui (o padrão é 'root')
    private $password = "";     // Senha do usuário (se houver, ou deixe vazio)
    private $dbname = "login";  // Nome do banco de dados
    private $instance;

    public function getInstance()
    {
        if (empty($this->instance)) {
            $this->instance = $this->connection();
        }
        return $this->instance;
    }

    private function connection()
    {
        try {
            // Corrigindo a string de conexão
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Ativa o modo de erros do PDO
            return $conn;
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}

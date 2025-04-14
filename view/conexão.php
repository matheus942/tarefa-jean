<?php
 
class usePDO
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "banco de dados";
    private $instance;
}
 
function getInstance()
{
    if (empty($this->instance)){
        $this->instance = $this->connection();
    }
    return $this->instance;
}
 
private function connection()
{
    try{
        $conn = new PDO("mysql:host=$this->servername;dbname=this->username, $this->password");
        $conn->set
        return $conn;
    } catch (PDOException $e) {
        die("connection failed: " . $e->getMessage);
           }
}

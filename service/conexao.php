<?php
 
class usePDO
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "login2";
    private $instance;
}
 
function getInstance()
{
    if (empty($this->instance)){
        $this->instance = $this->connection();
    }
    return $this->instance;
}
 
 function connection()
{
    try{
        $conn = new PDO("mysql:host=$this->servername;dbname=this->username, $this->password");
        return $conn;
    } catch (PDOException $e) {
        die("connection failed: " . $e->getMessage);
    }
}
 
 
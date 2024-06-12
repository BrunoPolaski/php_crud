<?php

class Database {
    private $host = 'localhost:3307';
    private $db_name = 'crud';
    private $username = 'root';
    private $password = 'your_password';
    public $conn;
    
    public function __construct() {
        $this->conn = $this->initConnection();
    }

    function initConnection(){
        try {
            $conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch(PDOException $e) {
            echo "A conexão falhou.";
            die();
        }
    }
}
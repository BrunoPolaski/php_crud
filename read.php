<?php

require_once 'config/database/mysql/mysql.php';
require_once 'model/user.php';

function GetUsers(){
    $db = new Database();

    $stmt = $db->conn->prepare("SELECT * FROM tb_users");
    $stmt->execute();

    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $users;
}
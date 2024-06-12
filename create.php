<?php

require_once 'config/database/mysql/mysql.php';
require_once 'model/user.php';

function CreateUser() {
    $user = new User(
        $_POST['nome'],
        $_POST['sobrenome'],
        $_POST['telefone']
    );

    $db = new Database();

    $stmt = $db->conn->prepare("INSERT INTO tb_users(name, surname, phone_number) VALUES (?, ?, ?)");
    $stmt->execute([$user->name, $user->surname, $user->phoneNumber]);

    echo 'Usuário cadastrado com sucesso!';

    header('Location: index.php');

    $db->conn = null;
}

CreateUser();
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>CRUD com PHP e MySQL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mb-5">
    <h2 class="mt-5">Cadastrar Pessoa</h2>
    <form action="create.php" method="post">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" required>
        </div>
        <div class="form-group">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" name="sobrenome" class="form-control" id="sobrenome" required>
        </div>
        <div class="form-group">
            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="telefone" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>

    <h2 class="mt-5">Pessoas Cadastradas</h2>
    <?php include __DIR__ . '/read.php';
        $users = GetUsers();
        foreach ($users as $user) {
            echo '<div class="card mt-3">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">ID: ' . $user['id'] . '</h5>';
            echo '<p class="card-text">Nome: ' . $user['name'] . '</p>';
            echo '<p class="card-text">Sobrenome: ' . $user['surname'] . '</p>';
            echo '<p class="card-text">Telefone: ' . $user['phone_number'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
    ?>
</div>
</body>
</html>

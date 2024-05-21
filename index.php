<?php include "conexao.php"; ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Contato</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Adicionar Contato</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco">
            </div>
            
            <button type="submit" class="btn btn-primary">Adicionar</button>
            <div>
            <a href="VisualizarContatos.php" class="btn btn-success mt-3">Ver contatos</a>
            </div>
        </form>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $endereco = $_POST['endereco'];

            $sql = "INSERT INTO contatos (nome, email, telefone, endereco) VALUES ('$nome', '$email', '$telefone', '$endereco')";

            if ($conn->query($sql) === TRUE) {
                echo '<div class="alert alert-success mt-3" role="alert">Contato adicionado com sucesso!</div>';
            } else {
                echo '<div class="alert alert-danger mt-3" role="alert">Erro ao adicionar contato: ' . $conn->error . '</div>';
            }
        }
        ?>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

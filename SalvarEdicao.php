<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];

    $sql = "UPDATE contatos SET nome='$nome', email='$email', telefone='$telefone', endereco='$endereco' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: VisualizarContatos.php");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Erro ao atualizar contato: ' . $conn->error . '</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">Método de requisição inválido.</div>';
}

$conn->close();
?>

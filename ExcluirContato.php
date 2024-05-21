<?php
include "conexao.php";

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "DELETE FROM contatos WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: VisualizarContatos.php");
        exit();
    } else {
        echo '<div class="alert alert-danger" role="alert">Erro ao excluir contato: ' . $conn->error . '</div>';
    }
} else {
    echo '<div class="alert alert-danger" role="alert">ID do contato não fornecido.</div>';
}

$conn->close();
?>

<?php
include("conexao.php");

$nome = $_POST['nome'];
$produto = $_POST['produto'];

$sql = "INSERT INTO pedidos (nome, produto) VALUES ('$nome', '$produto')";

if ($conn->query($sql) === TRUE) {
    echo "Pedido salvo com sucesso!";
} else {
    echo "Erro: " . $conn->error;
}

$conn->close();
?>

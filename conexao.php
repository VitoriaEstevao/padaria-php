<?php
$host = "127.0.0.1"; // ou "localhost" se o PHP e o banco estão na mesma máquina
$user = "padaria_user";
$pass = "senha_forte";
$db   = "padaria";

$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// echo "Conectado com sucesso!";
?>

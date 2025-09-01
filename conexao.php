<?php
$host = "localhost";   // No AWS será o endpoint do RDS
$user = "root";        // Usuário do MySQL
$pass = "";            // Senha do MySQL
$db   = "padaria";     // Nome do banco

$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>

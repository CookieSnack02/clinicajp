<?php
include('config.php'); // Conexão com o banco de dados

// Exemplo de inserção de usuário
$nome = 'Admin';
$email = 'admin@clinica.com';
$senha = 'admin123'; // Senha em texto plano

// Criptografar a senha antes de armazenar
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('sss', $nome, $email, $senha_hash);

if ($stmt->execute()) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

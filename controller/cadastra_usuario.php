<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "seu_banco_de_dados"; // Mude para o nome do seu banco de dados

// Criar conexão
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Usando hash para segurança
$nivel = $_POST['nivel'];
$cargo = $_POST['cargo'];

// Upload da foto
$target_dir = "uploads/"; // Defina a pasta de upload
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
    $foto = $target_file;
} else {
    echo "Erro ao fazer upload da foto.";
    exit;
}

$sql = "INSERT INTO usuarios (nome, email, senha, foto, nivel, cargo) VALUES ('$nome', '$email', '$senha', '$foto', '$nivel', '$cargo')";

if ($conn->query($sql) === TRUE) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

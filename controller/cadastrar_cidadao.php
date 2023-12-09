<?php

require_once "conecta.php";
 $nome = $_POST['nome'];
 $email = $_POST['email'];
 $senha = md5($_POST['senha']); // Usando hash para segurança
 $cidade =  $_POST['cidade'];

// Upload da foto
//$target_dir = "uploads/"; // Defina a pasta de upload
//$target_file = $target_dir . basename($_FILES["foto"]["name"]);
//if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
 //   $foto = $target_file;
//} else {
  //  echo "Erro ao fazer upload da foto.";
//  exit;
//} 

$sql = "INSERT INTO usuarios (nome, email, senha, cidade, nivel, cargo, status) VALUES ('$nome', '$email', '$senha', '$cidade', 'usuario' , 'cidadao', 'Ativo')";

if ($conn->query($sql) === TRUE) {
    header('Location: ../principal.php?id=1');
    exit; 
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

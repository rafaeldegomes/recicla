<?php 
require_once "conecta.php";

// Capture os dados do POST

$nome = $_POST['nome'];
$status = $_POST['statusbairro'];
$id = $_POST['id_usuario'];
$cidade = $_POST["cidade"];
// Prepare e execute a query
$query = "INSERT INTO bairros (nome, status, id_usuario, id_cidade) VALUES ('$nome', '$status', '$id', '$cidade')";

if ($conn->query($query) === TRUE) {
    header('Location: ../bairros.php?id=1');
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.

} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$mysqli->close();

?>




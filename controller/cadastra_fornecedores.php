<?php 
require_once "conecta.php";

// Capture os dados do POST
$nome = $_POST['nome'];
$tipo_resíduo = $_POST['tipo_resíduo'];
$endereço = $_POST['endereço'];
$status = $_POST['status2'];
$cidade = $_POST['cidade'];
// Prepare e execute a query
$query = "INSERT INTO fornecedores ( nome, tipo_resíduo, endereço, status, cidade) VALUES ( '$nome', '$tipo_resíduo', '$endereço', '$status', '$cidade')";

if ($conn->query($query) === TRUE) {
    header('Location: ../fornecedores.php?id=1');
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.

} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$mysqli->close();

?>




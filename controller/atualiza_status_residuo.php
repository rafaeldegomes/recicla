<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "reciclatche";

// Criar conexão
$conn = new mysqli($host, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo $id = $_GET['id'];
// Primeiro, obtenha o status atual
$selectSql = "SELECT status FROM residuos WHERE id_residuo = '$id'";
$result = $conn->query($selectSql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentStatus = $row["status"];

    // Determine o novo status
    $newStatus = ($currentStatus == 'ativo') ? 'inativo' : 'ativo';

    // Atualize o status na tabela "residuos"
    $updateSql = "UPDATE residuos SET status = '$newStatus' WHERE id_residuo = '$id'";
    if ($conn->query($updateSql) === TRUE) {
        header('Location: ../residuos.php');
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.

    } else {
        echo "Erro ao atualizar status: " . $conn->error;
    }
} else {
    echo "Nenhum registro encontrado com o ID: $id";
}

$conn->close();
?>

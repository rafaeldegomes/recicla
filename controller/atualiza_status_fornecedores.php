<?php
require_once "conecta.php";
$id = $_GET['id'];
// Primeiro, obtenha o status atual
$selectSql = "SELECT status FROM fornecedores WHERE id_fornecedores = '$id'";
$result = $conn->query($selectSql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentStatus = $row["status"];

    // Determine o novo status
    $newStatus = ($currentStatus == 'Ativo') ? 'Inativo' : 'Ativo';

    // Atualize o status na tabela "fornecedores"
    $updateSql = "UPDATE fornecedores SET status = '$newStatus' WHERE id_fornecedores = '$id'";
    if ($conn->query($updateSql) === TRUE) {
        header('Location: ../fornecedores.php?status=1');
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.

    } else {
        echo "Erro ao atualizar status: " . $conn->error;
    }
} else {
    echo "Nenhum registro encontrado com o ID: $id";
}

$conn->close();
?>

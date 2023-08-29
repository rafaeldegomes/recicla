<?php
require_once "conecta.php";
$id = $_GET['id'];
// Primeiro, obtenha o status atual
$selectSql = "SELECT status FROM ponto_coleta WHERE id_ponto_coleta = '$id'";
$result = $conn->query($selectSql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentStatus = $row["status"];

    // Determine o novo status
    $newStatus = ($currentStatus == 'Ativo') ? 'Inativo' : 'Ativo';

    // Atualize o status na tabela "residuos"
    $updateSql = "UPDATE ponto_coleta SET status = '$newStatus' WHERE id_ponto_coleta = '$id'";
    if ($conn->query($updateSql) === TRUE) {
        header('Location: ../pontos_coleta.php');
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.

    } else {
        echo "Erro ao atualizar status: " . $conn->error;
    }
} else {
    echo "Nenhum registro encontrado com o ID: $id";
}

$conn->close();
?>

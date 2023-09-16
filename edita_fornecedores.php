<?php 
require_once "controller/conecta.php";


// Capture os dados do POST
$id = $_POST['id'];
$nome = $_POST['nome'];
$tipo_resíduo = $_POST['tipo_resíduo'];
$endereço = $_POST['endereço'];
$status = $_POST['status'];

// SQL para atualizar o registro
$sql = "UPDATE fornecedores SET 
    nome = '$nome',
    tipo_resíduo = '$tipo_resíduo',
    endereço = '$endereço',
    status = '$status' 
WHERE id_fornecedores = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: fornecedores.php?atualiza=1');
    //header('Location: tela_view_residuos.php?id_residuo=' . $id);
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.
} else {
    echo "Erro na atualização do registro: " . $conn->error;
}

$conn->close();
?>

?>
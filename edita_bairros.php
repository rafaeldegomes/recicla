<?php 
require_once "controller/conecta.php";


// Capture os dados do POST
$id = $_POST['id'];
$nome = $_POST['nome'];
$status = $_POST['statusbairro'];

// SQL para atualizar o registro
$sql = "UPDATE bairros SET 
    nome = '$nome',
    status = '$status' 
WHERE id_bairro = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: bairros.php?atualiza=1');
    //header('Location: tela_view_bairros.php?id_bairro=' . $id);
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.
} else {
    echo "Erro na atualização do registro: " . $conn->error;
}

$conn->close();
?>

?>
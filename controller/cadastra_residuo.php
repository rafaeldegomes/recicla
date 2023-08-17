<?php 
require_once "conecta.php";

// Capture os dados do POST

$nome = $_POST['nome'];
$tipo_residuo = $_POST['tipo_residuo'];
$categoria = $_POST['categoria'];
$tecnologia_tratamento = $_POST['tecnologia_tratamento'];
$classe = $_POST['classe'];
$unidade_medida = $_POST['unidade_medida'];
$classe_risco_principal = $_POST['classe_risco_principal'];
$classe_risco_sub = $_POST['classe_risco_sub'];
$numero_risco = $_POST['numero_risco'];
$grupo_embalagem = $_POST['grupo_embalagem'];
$status = $_POST['statusresiduo'];
$id = $_POST['id_usuario'];

// Prepare e execute a query
$query = "INSERT INTO residuos (nome, tipo_residuo, categoria, tecnologia_tratamento, classe, unidade_medida, classe_risco_principal, classe_risco_sub, numero_risco, grupo_embalagem,status,id_usuario) VALUES ('$nome', '$tipo_residuo', '$categoria', '$tecnologia_tratamento', '$classe', '$unidade_medida', '$classe_risco_principal', '$classe_risco_sub', '$numero_risco', '$grupo_embalagem', '$status', '$id')";

if ($conn->query($query) === TRUE) {
    header('Location: ../residuos.php');
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.

} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$mysqli->close();

?>




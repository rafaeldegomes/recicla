<?php 
require_once "controller/conecta.php";


// Capture os dados do POST
$id = $_POST['id'];
$nome = $_POST['nome'];
$tipo_residuo = $_POST['tipo_residuo'];
$categoria = $_POST['categoria'];
$tecnologia_tratamento = $_POST['tecnologia_tratamento'];
$classe = $_POST['classe'];
$unidade_medida = $_POST['unidade_medida'];
//$classe_risco_principal = $_POST['classe_risco_principal'];
//$classe_risco_sub = $_POST['classe_risco_sub'];
$numero_risco = $_POST['numero_risco'];
$grupo_embalagem = $_POST['grupo_embalagem'];
$status = $_POST['statusresiduo'];

// SQL para atualizar o registro
$sql = "UPDATE residuos SET 
    nome = '$nome',
    tipo_residuo = '$tipo_residuo',
    categoria = '$categoria',
    tecnologia_tratamento = '$tecnologia_tratamento',
    classe = '$classe',
    unidade_medida = '$unidade_medida',
    classe_risco_principal = '$classe_risco_principal',
    classe_risco_sub = '$classe_risco_sub',
    numero_risco = '$numero_risco',
    grupo_embalagem = '$grupo_embalagem',
    status = '$status' 
WHERE id_residuo = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: residuos.php?atualiza=1');
    //header('Location: tela_view_residuos.php?id_residuo=' . $id);
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.
} else {
    echo "Erro na atualização do registro: " . $conn->error;
}

$conn->close();
?>

?>
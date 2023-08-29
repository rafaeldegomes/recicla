<?php
require_once "conecta.php";

// Verificar se a requisição é POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id_usuario = $_POST['inputIdusuario'];
    $id_ponto_coleta = $_POST['inputId'];
    $residuo = $_POST['residuo'];
    $horario = $_POST['horario'];
$peso = $_POST['peso'];
    $foto = "";

   if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $target_dir = "uploads/"; // Diretório onde a foto será salva
    $uniqueName = time() . "_" . basename($_FILES["foto"]["name"]); // Adicionando timestamp ao nome para torná-lo único
    $target_file = $target_dir . $uniqueName;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

    // Verificar se o arquivo é uma imagem
    $check = getimagesize($_FILES["foto"]["tmp_name"]);
    if ($check !== false) {
        move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file);
        $foto = $target_file; // Salvando o caminho da imagem
    }
}

$sql = "INSERT INTO residuo_coletado (id_usuario, id_ponto_coleta, residuo , horario, foto , peso) VALUES 
('$id_usuario', '$id_ponto_coleta', '$residuo', ' $horario', '$foto', ' $peso')";
if ($conn->query($sql) === TRUE) {
    header('Location: entrega_residuos.php');
} else {
    echo "Erro ao inserir: " . $conn->error;
}

}

$conn->close();
?>

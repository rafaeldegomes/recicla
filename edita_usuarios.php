<?php 
require_once "controller/conecta.php";


// Capture os dados do POST
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$nivel = $_POST['nivel'];
$cargo = $_POST['cargo'];
$senha = $_POST['senha']; 
$status = $_POST['statususuario'];

// SQL para atualizar o registro
$sql = "UPDATE usuarios SET 
    nome = '$nome',
    email = '$email',
    nivel = '$nivel',
    cargo = '$cargo',
    senha = '$senha',
    status = '$status' 
 WHERE id_usuario = $id";

if ($conn->query($sql) === TRUE) {
    header('Location: usuarios.php?atualiza=1');
    //header('Location: tela_view_usuarios.php?id_residuo=' . $id);
    exit;  // Importante para garantir que o script pare de ser executado após o redirecionamento.
} else {
    echo "Erro na atualização do registro: " . $conn->error;
}

$conn->close();
?>

?>
<?php
require_once "conecta.php";

// Capture os dados do POST

$nome = $_POST['nome'];
$bairro = $_POST['bairro'];
$statusresiduo = $_POST['statusresiduo'];
$endereco = $_POST['addressInput'];
$id = $_POST['id_usuario'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];


// Prepare e execute a query
$query = "INSERT INTO ponto_coleta (nome,endereco, bairro, status,id_usuario, latitude, longitude) VALUES ('$nome', '$endereco', '$bairro', '$statusresiduo', '$id', '$latitude', '$longitude')";

if ($conn->query($query) === TRUE) {
    $ultimo_id = $conn->insert_id;

    $dias = $_POST['dia'];
    $horas_inicio = $_POST['hora_inicio'];
    $horas_fim = $_POST['hora_fim'];

    for($i = 0; $i < count($dias); $i++) {
        $dia = $dias[$i];
       $hora_inicio = $horas_inicio[$i];
       $hora_fim = $horas_fim[$i];
    
        $sql = "INSERT INTO horarios_coleta (dia, hora_inicio, hora_fim , id_ponto_coleta) VALUES ('$dia', '$hora_inicio', '$hora_fim', ' $ultimo_id')";
        if ($conn->query($sql) === TRUE) {
            header('Location: ../pontos_coleta.php');
        } else {
            echo "Erro ao inserir: " . $conn->error;
        }
        
    }
    
    $mysqli->close();


} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

$mysqli->close();

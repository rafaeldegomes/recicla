<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reciclatche";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id_tabela_dados"]) && isset($_POST["texto"])) {
    $id = $_POST["id_tabela_dados"];
    $novoTexto = $_POST["texto"];

    // Atualiza o registro no banco de dados
    $sql = "UPDATE tabela_dados SET texto='$novoTexto' WHERE id_tabela_dados='$id'";
    if (!mysqli_query($conn, $sql)) {
        echo "Erro ao atualizar os dados: " . mysqli_error($conn);
    }

    header("Location: teste.php");
    exit();
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
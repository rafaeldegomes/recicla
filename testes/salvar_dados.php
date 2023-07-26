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
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["dados"])) {
    echo $dados = $_POST["dados"];

    // Insere os dados no banco de dados
    foreach ($dados as $dado) {
        $sql = "INSERT INTO tabela_dados (texto, aceito) VALUES ('$dado' , 1)";
        if (!mysqli_query($conn, $sql)) {
            echo "Erro ao inserir os dados: " . mysqli_error($conn);
        }
    }

    header("Location: teste.php");
    exit();
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
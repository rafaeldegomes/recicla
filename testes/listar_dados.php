<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reciclatche";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
// Consulta os registros do banco de dados
$sql = "SELECT * FROM tabela_dados";
$result = mysqli_query($conn, $sql);

// Exibe os registros em uma lista
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<li class="list-group-item">' . $row["texto"] . ' 
              <button class="btn btn-sm btn-primary" onclick="showModal(' . $row["id_tabela_dados"] . ', \'' . $row["texto"] . '\')">Editar</button></li>';
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
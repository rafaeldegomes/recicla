<?php
// Conex達o com o banco de dados
$servername = "localhost";
$username = "recic443_reciclatche";
$password = "reciclatche2023";
$dbname = "recic443_reciclatche";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conex達o falhou: " . mysqli_connect_error());
}


?>
<?php

$host = 'localhost';
$db   = 'reciclatche';
$user = 'root';
$pass = '';

// Conexão com a base de dados usando mysqli
$mysqli = new mysqli($host, $user, $pass, $db);

// Verifique a conexão
if ($mysqli->connect_error) {
    die('Erro de conexão: ' . $mysqli->connect_error);
}

// Consulta SQL para buscar os dados
$query = "SELECT id_residuo, nome, tipo_residuo, categoria, tecnologia_tratamento, classe, unidade_medida, classe_risco_principal, classe_risco_sub, numero_risco FROM residuos";

$result = $mysqli->query($query);


while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id_residuo'] . "</td>";
    echo "<td>" . $row['nome'] . "</td>";
    echo "<td>" . $row['tipo_residuo'] . "</td>";
    echo "<td>" . $row['categoria'] . "</td>";
    echo "<td>" . $row['tecnologia_tratamento'] . "</td>";
    echo "<td>" . $row['classe'] . "</td>";
    echo "<td>" . $row['unidade_medida'] . "</td>";
    echo "<td>" . $row['classe_risco_principal'] . "</td>";
    echo "<td>" . $row['classe_risco_sub'] . "</td>";
    echo "<td>" . $row['numero_risco'] . "</td>";
    echo "</tr>";
}

$mysqli->close();
?>

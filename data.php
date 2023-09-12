<?php
header('Content-Type: application/json');

// Gera um valor aleatório entre 0 e 100
$data = [
    'value' => rand(0, 100)
];

echo json_encode($data);
?>

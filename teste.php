<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Estilo CSS para DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">

<!-- Biblioteca jQuery -->
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Script JS para DataTables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

</head>
<body>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
</script>

<table id="myTable">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Profissão</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>João</td>
            <td>30</td>
            <td>Engenheiro</td>
        </tr>
        <tr>
            <td>Maria</td>
            <td>25</td>
            <td>Médica</td>
        </tr>
        <tr>
            <td>Fernando</td>
            <td>28</td>
            <td>Designer</td>
        </tr>
        <!-- ... Adicione mais linhas conforme necessário ... -->
    </tbody>
</table>

</body>
</html>
<?php
session_start();

$id = $_SESSION["usuario_id"];
if (empty($id)) {
    header("Location: index.php");
} else {
    require_once "footer.php";
    require_once "controller/conecta.php";
?><script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
        #map {
            height: 400px;
        }
    </style>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Entrega de Resíduos</h4>


                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Entrega de Resíduos <i class="ri-home-line"></i></li>
                                </ol>

                            </div>
                        </div>
                        <!-- Bootstrap CSS -->
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                        <?php

                        $host = "localhost";
                        $db   = "reciclatche";
                        $user = "root";
                        $pass = "";

                        $connection = new mysqli($host, $user, $pass, $db);
                        if ($connection->connect_error) {
                            die("Connection failed: " . $connection->connect_error);
                        }

                        $query = "SELECT * FROM residuo_coletado";
                        $result = $connection->query($query);
                        $records = [];

                        while ($row = $result->fetch_assoc()) {
                            $records[] = $row;
                        }

                        ?>
                        <!-- Tabela Bootstrap -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>ID Usuário</th>
                                    <th>ID Ponto Coleta</th>
                                    <th>Resíduo</th>
                                    <th>Horário</th>
                                    <th>Peso</th>
                                    <th>Visualizar Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($records as $record) : ?>
                                    <tr>
                                        <td><?php echo $record['id']; ?></td>
                                        <td><?php echo $record['id_usuario']; ?></td>
                                        <td><?php echo $record['id_ponto_coleta']; ?></td>
                                        <td><?php echo $record['residuo']; ?></td>
                                        <td><?php echo $record['horario']; ?></td>
                                        <td><?php echo $record['peso']; ?></td>
                                        <td>

                                            <img src="<?php echo $record['foto']; ?>" class="img-fluid hidden-image" alt="Resíduo" width="150px" style="display: none;">

                                            <button class="showImageBtn" data-img-src="<?php echo $record['foto']; ?>">Mostrar Imagem</button>



                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                        <script>
    $(document).ready(function() {
        $('.showImageBtn').on('click', function() {
            // Encontre a imagem no mesmo contêiner que o botão clicado e alterne a sua visibilidade
            $(this).siblings('.hidden-image').toggle();
        });
    });
</script>

                        <!-- Bootstrap JS e jQuery -->
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->

    </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <script>
        $(document).ready(function() {
            $('#showImageBtn').click(function() {
                alert("oi");
                $('#residuoImage').show();
            });
        });
    </script>


<?php

    require_once "header.php";
    echo $nome = $_SESSION["nome"];
}
?>
<?php
session_start();

$id = $_SESSION["usuario_id"];
if (empty($id)) {
    header("Location: index.php");
} else {
    require_once "header_usuario.php";
    require_once "controller/conecta.php";
?>
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

                        $query = "SELECT * FROM residuo_coletado where id_usuario = $id" ;
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


                                            <img src="<?php echo $record['foto']; ?>" class="img-fluid" alt="Resíduo">

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

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



<?php

    require_once "footer_usuario.php";
    echo $nome = $_SESSION["nome"];
}
?>
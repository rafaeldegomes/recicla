<?php
session_start();

$id = $_SESSION["usuario_id"];
$nivel = $_SESSION["nivel"];
if (empty($id) || $nivel == "usuario") {
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
                    <table id="datatable2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

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
                                <td><?php echo $record['id_residuo_coletado']; ?></td>
                                <td><?php echo $record['id_usuario']; ?></td>
                                <td><?php echo $record['id_ponto_coleta']; ?></td>
                                <td><?php echo $record['residuo']; ?></td>
                                <td><?php echo $record['horario']; ?></td>
                                <td><?php echo $record['peso']; ?></td>
                                <td>

                                    <img src="<?php echo $record['foto']; ?>" class="img-fluid hidden-image"
                                        alt="Resíduo" width="150px" style="display: none;">

                                    <button class="showImageBtn" data-img-src="<?php echo $record['foto']; ?>">Mostrar
                                        Imagem</button>



                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <script>
                        $(document).ready(function () {
                            $('.showImageBtn').on('click', function () {
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
            window.onload = function() {
                const queryString = window.location.search;
                const urlParams = new URLSearchParams(queryString);

                if (urlParams.has('id')) {
                    // alert('meuParametro está presente na URL!');
                    sucessocadastra()
                    const valor = urlParams.get('id');
                    // alert(`Valor de meuParametro: ${valor}`);
                } else if (urlParams.has('atualiza')) {
                    sucessoaltera()
                } else if (urlParams.has('status')) {
                    sucessostatus()
                } else {
                    // alert('meuParametro NÃO está presente na URL!');
                }
                $('#datatable2').DataTable({
                    dom: 'Biplfrt',
                    buttons: [
                        'pdfHtml5',
                        {
                            extend: 'copyHtml5',
                            text: 'Copiar'
                        },
                        'excelHtml5'
                    ],
                    lengthMenu: [
                        [10, 25, 50, -1],
                        [10, 25, 50, "Mostrar tudo"]
                    ],
                    destroy: true,
                    language: {
                        "sEmptyTable": "Nenhum registro encontrado",
                        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sInfoThousands": ".",
                        "sLengthMenu": "_MENU_ resultados por página",
                        "sLoadingRecords": "Carregando...",
                        "sProcessing": "Processando...",
                        "sZeroRecords": "Nenhum registro encontrado",
                        "sSearch": "Pesquisar",
                        "oPaginate": {
                            "sNext": "Próximo",
                            "sPrevious": "Anterior",
                            "sFirst": "Primeiro",
                            "sLast": "Último"
                        },
                        "oAria": {
                            "sSortAscending": ": Ordenar colunas de forma ascendente",
                            "sSortDescending": ": Ordenar colunas de forma descendente"
                        }
                    }
                });
            }

            function sucessostatus() {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Resíduo atualizado com sucesso',
                    showConfirmButton: false,
                    timer: 1500
                })
            }

            function sucessoaltera() {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Resíduo atualizado com sucesso',
                    showConfirmButton: false,
                    timer: 1500
                })
            }

            function sucessocadastra() {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Resiíduo cadastrado com sucesso',
                    showConfirmButton: false,
                    timer: 1500
                })
            }
        </script>
<script>
    $(document).ready(function () {
        $('#showImageBtn').click(function () {
            alert("oi");
            $('#residuoImage').show();
        });
    });
</script>


<?php

    require_once "header.php";
   // echo $nome = $_SESSION["nome"];
}
?>
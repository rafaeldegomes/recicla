<?php
session_start();

$id = $_SESSION["usuario_id"];
if (empty($id)) {
    header("Location: index.php");
} else {
    require_once "footer.php";
    require_once "controller/conecta.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


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
                            <h4 class="mb-sm-0">Bairros</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pagina Inicial</li>
                                </ol>

                            </div>
                        </div>
                        <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                            aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myExtraLargeModalLabel">Cadastrar novo Bairro</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="controller/cadastra_bairro.php" method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <input class="form-control" type="hidden" name="id_usuario"
                                                        id="id_usuario" value="<?php echo $id; ?>">
                                                    <label for="example-text-input" class="col-sm-6 col-form-label">Nome do
                                                        Bairro</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="nome" id="nome"
                                                            placeholder="Digite o nome do Bairro">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label class="col-sm-6 col-form-label">Status</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example"
                                                            name="statusbairro" id="statusbairro">
                                                            <option selected="Ativo">Ativo</option>
                                                            <option value="Inativo">Inativo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>



                                            <hr>
                                            <div class="row">
                                                <div class="col">

                                                </div>
                                                <div class="col">
                                                </div>
                                                <div class="col" style="text-align: left;">
                                                    <button type="submitt"
                                                        class="btn btn-primary waves-effect waves-light">Cadastrar novo
                                                        Bairro</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <?php

                        // Consulta SQL para contar os registros
                        $query_total_bairros = "SELECT COUNT(*) as total FROM bairros where id_usuario = '$id' and status = 'Ativo'";

                        $result = $conn->query($query_total_bairros);

                        // Obtendo o número de registros
                        $row = $result->fetch_assoc();
                        $total = $row['total'];

                        $query_total_bairros2 = "SELECT COUNT(*) as total FROM bairros where id_usuario = '$id' and status = 'Inativo'";

                        $result2 = $conn->query($query_total_bairros2);

                        // Obtendo o número de registros
                        $row2 = $result2->fetch_assoc();
                        $total2 = $row2['total'];

                        ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap pb-3 gap-3">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-truncate mb-2">Bairros Ativos</p>
                                                <h4 class="mt-2 mb-0">
                                                    <?php echo $total; ?><span
                                                        class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i
                                                            class="mdi mdi-arrow-up"></i>Ativos</sup>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap pb-3 gap-3">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-truncate mb-2">Bairros Inativos</p>
                                                <h4 class="mt-2 mb-0">
                                                    <?php echo $total2; ?><span
                                                        class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i
                                                            class="mdi mdi-arrow-down"></i>Inativos</sup>
                                                </h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--<div class="col-md-6">-->
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm">

                                        </div>
                                        <div class="col-sm">

                                        </div>
                                        <div class="col-sm" style="text-align: right;">
                                            <button type="button" class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Cadastrar novo
                                               Bairro</button>
                                        </div>
                                    </div>
                                </div>


                           <!-- </div>-->
                            <!--  Modal content for the above example -->
                            <br><br> <br>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Bairros Cadastrados</h4>
                                <!--<p class="card-title-desc">
                                    Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
                                    to make them scroll horizontally on small devices (under 768px).
                                </p>-->

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Status</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            // Consulta SQL para buscar os dados
                                            $query = "SELECT * FROM bairros where id_usuario = '$id'";

                                            $result = $conn->query($query);
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['nome'] . "</td>";
                                                echo "<td>" . $row['status'] . "</td>"; ?>

                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href='tela_view_bairros.php?id_bairros=<?php echo $row["id_bairro"]; ?>'
                                                                type="button"
                                                                class="btn btn-warning waves-effect waves-light"><i
                                                                    class="ri-edit-line"></i></a>
                                                            <a href='controller/atualiza_status_bairros.php?id=<?php echo $row["id_bairro"]; ?>'
                                                                type="button" class="btn btn-danger waves-effect waves-light"><i
                                                                    class="ri-sensor-fill"></i></a>
                                                        </div>
                                                    </div>
                                                </td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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
                }else if (urlParams.has('status')) {
                    sucessostatus()
                }else {
                    // alert('meuParametro NÃO está presente na URL!');
                }
            }
            function sucessostatus() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Status atualizado com Sucesso'
                })
            }
            function sucessoaltera() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Bairro atualizado com Sucesso'
                })
            }
            function sucessocadastra() {
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                })

                Toast.fire({
                    icon: 'success',
                    title: 'Bairro cadastrado com Sucesso'
                })
            }
        </script>
        <!-- end main content-->
        <?php

        require_once "header.php";
        echo $nome = $_SESSION["nome"];
}
?>
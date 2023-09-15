<?php
session_start();

$id = $_SESSION["usuario_id"];
$id_bairro = $_GET['id_bairros'];
if (empty($id)) {
    header("Location: index.php");
} else {

    require_once "footer.php";
    require_once "controller/conecta.php";
    ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Visualizar Bairros</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pagina Inicial</li>
                                </ol>

                            </div>
                        </div>
                        <?php

                        // Consulta SQL para contar os registros
                        $query_total_bairros = "SELECT * FROM bairros where id_bairro = '$id_bairro'";

                        $result = $conn->query($query_total_bairros);

                        // Obtendo o número de registros
                        $row = $result->fetch_assoc();


                        ?>
                        <div class="row">
                            <div class="modal-body">
                                <form action="edita_bairros.php" method="POST">
                                    <input type="hidden" id="id" name="id" value="<?php echo $row['id_bairro']; ?>">
                                    <div class="row">
                                        <div class="col">
                                            <label for="example-text-input" class="col-sm-6 col-form-label">Nome do
                                                Bairro</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="nome" id="nome"
                                                    placeholder="Digite o nome do Bairro" id="example-text-input"
                                                    value="<?php echo $row['nome']; ?>">
                                            </div>
                                        </div>

                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Status </label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="statusbairro" id="statusbairro">
                                                    <!--<option selected="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option> -->
                                                    <option value="Ativo">Ativo</option>
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
                                            <a href='bairros.php' type="button"
                                                class="btn btn-warning waves-effect waves-light"><i
                                                    class="ri-reply-fill"></i> Voltar</a>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light"><i
                                                    class="ri-edit-2-fill"></i> Alterar</button>
                                            <a href='gerar_pdf.php' type="button"
                                                class="btn btn-info waves-effect waves-light"><i class="ri-file-line"></i>
                                                Gerar PDF</a>


                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
                <!-- end page title -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- end main content-->
        <script>
            function teste() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            }
        </script>
        <?php

        require_once "header.php";
        //echo $nome = $_SESSION["nome"];
}
?>
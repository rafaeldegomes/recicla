<?php
session_start();

$id = $_SESSION["usuario_id"];
$id_residuo = $_GET['id_residuo'];
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
                            <h4 class="mb-sm-0">Visualizar Residuo <?php echo $id_residuo; ?></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pagina Inicial</li>
                                </ol>

                            </div>
                        </div>
                        <?php

                        // Consulta SQL para contar os registros
                        $query_total_residuos = "SELECT * FROM residuos where id_residuo = '$id_residuo'";

                        $result = $conn->query($query_total_residuos);

                        // Obtendo o número de registros
                        $row = $result->fetch_assoc();


                        ?>
                        <div class="row">
                            <div class="modal-body">
                                <form action="edita_residuos.php" method="POST">
                                    <input type="hidden" id="id" name="id" value="<?php echo $row['id_residuo']; ?>">
                                    <div class="row">
                                        <div class="col">
                                            <label for="example-text-input" class="col-sm-6 col-form-label">Nome comun do resíduo</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite o nome do Residuo" id="example-text-input" value="<?php echo $row['nome']; ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Tipo de Resíduo</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="tipo_residuo" id="tipo_residuo">
                                                    <option selected="<?php echo $row['tipo_residuo']; ?>"><?php echo $row['tipo_residuo']; ?></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Categoria</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                                                    <option selected="<?php echo $row['categoria']; ?>"><?php echo $row['categoria']; ?></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Tecnologia de Tratamento</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="tecnologia_tratamento" id="tecnologia_tratamento">
                                                    <option selected="<?php echo $row['tecnologia_tratamento']; ?>"><?php echo $row['tecnologia_tratamento']; ?></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Classe</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="classe" id="classe">
                                                    <option selected="<?php echo $row['classe']; ?>"><?php echo $row['classe']; ?></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Status </label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="statusresiduo" id="statusresiduo">
                                                    <option selected="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                                                    <option value="Ativo">Ativo</option>
                                                    <option value="Inativo">Inativo</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Classe/Subclasse Risco Principal</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="classe_risco_principal" id="classe_risco_principal">
                                                    <option selected="<?php echo $row['classe_risco_principal']; ?>"><?php echo $row['classe_risco_principal']; ?></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Classe/Subclasse Risco Subsidiário</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="classe_risco_sub" id="classe_risco_sub">
                                                    <option selected="<?php echo $row['classe_risco_sub']; ?>"><?php echo $row['classe_risco_sub']; ?></option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>


                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Numero de Risco</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="numero_risco" id="numero_risco">
                                                    <option selected="<?php echo $row['numero_risco']; ?>"><?php echo $row['numero_risco']; ?></option>

                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Grupo de Embalagem</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="grupo_embalagem" id="grupo_embalagem">
                                                    <option selected="<?php echo $row['grupo_embalagem']; ?>"><?php echo $row['grupo_embalagem']; ?></option>

                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">

                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col" style="text-align: left;">
                                            <a href='residuos.php' type="button" class="btn btn-warning waves-effect waves-light"><i class="ri-delete-bin-line"></i> Voltar</a>
                                            <button type="submit" onclick="teste()" class="btn btn-primary waves-effect waves-light"><i class="ri-delete-bin-line"></i> Alterar</button>
                                            <a href='gerar_pdf.php' type="button" class="btn btn-info waves-effect waves-light"><i class="ri-delete-bin-line"></i> Gerar PDF</a>


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
    echo $nome = $_SESSION["nome"];
}
    ?>
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
                            <h4 class="mb-sm-0">Visualizar Ponto de Coleta <?php echo $id_residuo; ?></h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pagina Inicial</li>
                                </ol>

                            </div>
                        </div>
                        <?php

                        // Consulta SQL para contar os registros
                        $query_total_residuos = "SELECT * FROM ponto_coleta where id_ponto_coleta = '$id_residuo' ";

                        $result = $conn->query($query_total_residuos);

                        // Obtendo o número de registros
                        $row = $result->fetch_assoc();


                        ?>
                        <div class="row">
                            <div class="modal-body">
                                <form action="controller/cadastra_ponto_coleta.php" method="POST">

                                    <div class="row">
                                        <div class="col">
                                            <input class="form-control" type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id; ?>">
                                            <label for="example-text-input" class="col-sm-6 col-form-label">Nome Ponto Coleta</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $row['nome']; ?>" placeholder="Digite o nome do Residuo" id="example-text-input">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Endereço</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="endereco" id="endereco" value="<?php echo $row['endereco']; ?>" placeholder="Digite o nome do Residuo" id="example-text-input">

                                            </div>


                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Bairro</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="bairro" id="bairro">
                                                    <option selected="<?php echo $row['bairro']; ?>"><?php echo $row['bairro']; ?></option>
                                                    <option value="1">Bettim</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example" name="statusresiduo" id="statusresiduo">
                                                    <option selected="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option>
                                                    <option value="Inativo">Inativo</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <hr>


                                    <div class="row">
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Horário de Coleta</label>

                                           
                                            <div class="col-sm-10">

                                            <?php
                                            // Consulta SQL para buscar os dados
                                            $query = "SELECT * FROM horarios_coleta where id_ponto_coleta = 1";

                                            $result = $conn->query($query);
                                            while ($row = $result->fetch_assoc()) {
                                                
                                           
                                            ?>
                                                <div id="entry-form">
                                                    <br>
                                                    <div class="form-group">
                                                        <label>Dia:</label>
                                                        <select class="form-select" aria-label="Default select example" name="dia[]" id="dia[]">
                                                            <option value="<?php echo $row['dia']; ?>"><?php echo $row['dia']; ?></option>
                                                            <option value="Terca">Terça</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Hora de Início:</label>
                                                        <input type="time" name="hora_inicio[]" class="form-control" value="<?php echo $row['hora_inicio']; ?>" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Residuo :</label>
                                                        <select class="form-select" aria-label="Default select example" name="hora_fim[]" id="hora_fim[]">
                                                            <option selected="<?php echo $row['hora_fim']; ?>"><?php echo $row['hora_fim']; ?></option>
                                                            <option value="Terca">Lata</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                                <br>
                                                <button type="button" class="btn btn-secondary" id="add-entry">Adicionar mais dias e horários</button>
                                                <br>

                                            </div>
                                        </div>
                                        <div class="col">


                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col">

                                        </div>
                                        <div class="col">
                                        </div>
                                        <div class="col" style="text-align: left;">
                                            <button type="submitt" class="btn btn-primary waves-effect waves-light">Cadastrar novo Residuo</button>
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
        <script>
            document.getElementById('add-entry').addEventListener('click', function() {
                const entryForm = document.getElementById('entry-form');
                const newEntry = `
                <br>
                                                            <div class="form-group">
                                                            <label>Dia:</label>
                                                                <select class="form-select" aria-label="Default select example" name="dia[]" id="dia[]">
                                                                    <option value="Segunda">Segunda</option>
                                                                    <option value="Terca">Terça</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Hora de Início:</label>
                                                                <input type="time" name="hora_inicio[]" class="form-control" required>
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                            <label>Residuo :</label>
                                                                <select class="form-select" aria-label="Default select example" name="hora_fim[]" id="hora_fim[]">
                                                                    <option selected="Segunda">Plastico</option>
                                                                    <option value="Terca">Lata</option>
                                                                </select>
                                                            </div>
        `;
                entryForm.insertAdjacentHTML('beforeend', newEntry);
            });
        </script>
    <?php

    require_once "header.php";
    echo $nome = $_SESSION["nome"];
}
    ?>
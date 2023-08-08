<?php
session_start();

$id = $_SESSION["usuario_id"];
if (empty($id)) {
    header("Location: index.php");
} else {
    require_once "footer.php";
?>

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
                            <h4 class="mb-sm-0">Residuos</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pagina Inicial</li>
                                </ol>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap pb-3 gap-3">
                                            <div class="flex-grow-1 overflow-hidden">
                                                <p class="text-truncate mb-2">Residuos cadastrados</p>
                                                <h4 class="mt-2 mb-0">9 <span class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i class="mdi mdi-arrow-up"></i> 10%</sup></h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Cadastrar novo Residuo</button>

                            </div>
                            <!--  Modal content for the above example -->
                            <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myExtraLargeModalLabel">Cadastrar novo Resíduo</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="controller/cadastra_residuo.php" method="POST">
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="example-text-input" class="col-sm-6 col-form-label">Nome comun do resíduo</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite o nome do Residuo" id="example-text-input">
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label class="col-sm-6 col-form-label">Tipo de Resíduo</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-select" aria-label="Default select example" name="tipo_residuo" id="tipo_residuo">
                                                                <option selected="">Open this select menu</option>
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
                                                                <option selected="">Open this select menu</option>
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
                                                                <option selected="">Open this select menu</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <label class="col-sm-6 col-form-label">Classe</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-select" aria-label="Default select example" name="classe" id="classe">
                                                                <option selected="">Open this select menu</option>
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
                                                        <label class="col-sm-6 col-form-label">Classe/Subclasse Risco Principal</label>
                                                        <div class="col-sm-10">
                                                            <select class="form-select" aria-label="Default select example" name="classe_risco_principal" id="classe_risco_principal">
                                                                <option selected="">Open this select menu</option>
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
                                                                <option selected="">Open this select menu</option>
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
                                                                <option selected="">Open this select menu</option>
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
                                                                <option selected="">Open this select menu</option>
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
                                                        <button type="submitt" class="btn btn-primary waves-effect waves-light">Cadastrar novo Residuo</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Responsive Table</h4>
                                <p class="card-title-desc">
                                    Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
                                    to make them scroll horizontally on small devices (under 768px).
                                </p>

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>ID Resíduo</th>
                                                <th>Nome</th>
                                                <th>Tipo Resíduo</th>
                                                <th>Categoria</th>
                                                <th>Tecnologia Tratamento</th>
                                                <th>Classe</th>
                                                <th>Unidade Medida</th>
                                                <th>Classe Risco Principal</th>
                                                <th>Classe Risco Sub</th>
                                                <th>Número Risco</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            require_once "controller/conecta.php";

                                            // Consulta SQL para buscar os dados
                                            $query = "SELECT id_residuo, nome, tipo_residuo, categoria, tecnologia_tratamento, classe, unidade_medida, classe_risco_principal, classe_risco_sub, numero_risco FROM residuos";

                                            $result = $conn->query($query);


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
                                                echo "<td>" . $row['numero_risco'] . "</td>"; ?>
                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <button type="button" class="btn btn-warning waves-effect waves-light"><i class="ri-file-text-line"></i></button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light"><i class="ri-edit-line"></i></button>
                                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="ri-delete-bin-line"></i></button>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php
                                                echo "</tr>";
                                            }

                                            $mysqli->close();
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

        <!-- end main content-->
    <?php

    require_once "header.php";
    echo $nome = $_SESSION["nome"];
}
    ?>
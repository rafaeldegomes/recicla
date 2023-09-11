<?php
session_start();

$id = $_SESSION["usuario_id"];
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

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Resíduos</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pagina Inicial</li>
                                </ol>

                            </div>
                        </div>
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
                                                <input class="form-control" type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id;?>">
                                                    <label for="example-text-input" class="col-sm-6 col-form-label">Nome comum do resíduo</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite o nome do Resíduo" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label class="col-sm-6 col-form-label">Tipo do Resíduo</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example" name="tipo_residuo" id="tipo_residuo">
                                                            <option selected="Reciclaveis">Reciclaveis</option>
                                                            <option value="Reciclaveis">Reciclaveis</option>
                                                        </select>
                                                    </div>


                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="col-sm-6 col-form-label">Categoria</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example" name="categoria" id="categoria">
                                                            <option selected="">Não Reciclavel</option>
                                                            <option value="Não Reciclavel">Não Reciclavel</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label class="col-sm-6 col-form-label">Tecnologia de Tratamento</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example" name="tecnologia_tratamento" id="tecnologia_tratamento">
                                                            <option selected="Reciclagem">Reciclagem</option>
                                                            <option value="1">One</option>
                                                            <option value="2">Two</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label class="col-sm-6 col-form-label">Status</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example" name="statusresiduo" id="statusresiduo">
                                                            <option selected="Ativo">Ativo</option>
                                                            <option value="Inativo">Inativo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <label class="col-sm-6 col-form-label">Classe</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example" name="classe" id="classe">
                                                            <option selected="Classe I">Classe I </option>
                                                            <option value="Classe I">Classe I</option>
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
                                                            <option selected="">1.1A - Substancias e Artigos com Risco de Explosao em Massa</option>
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
                                                    <label class="col-sm-6 col-form-label">Número de Risco</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-select" aria-label="Default select example" name="numero_risco" id="numero_risco">
                                                            <option selected="">2 - Desprendimento de Gás devido a pressao ou reacao quimica</option>
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
                                                            <option selected="">I - Substancias que apresentam auto risco</option>
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
                                                    <button type="submitt" class="btn btn-primary waves-effect waves-light">Cadastrar novo Resíduo</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <?php

                        // Consulta SQL para contar os registros
                        $query_total_residuos = "SELECT COUNT(*) as total FROM residuos where id_usuario = '$id' and status = 'Ativo'";

                        $result = $conn->query($query_total_residuos);

                        // Obtendo o número de registros
                        $row = $result->fetch_assoc();
                        $total = $row['total'];

                        $query_total_residuos2 = "SELECT COUNT(*) as total FROM residuos where id_usuario = '$id' and status = 'Inativo'";

                        $result2 = $conn->query($query_total_residuos2);

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
                                                <p class="text-truncate mb-2">Resíduos Ativos</p>
                                                <h4 class="mt-2 mb-0"><?php echo $total; ?><span class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i class="mdi mdi-arrow-up"></i> Ativos</sup></h4>
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
                                                <p class="text-truncate mb-2">Resíduos Inativos</p>
                                                <h4 class="mt-2 mb-0"><?php echo $total2; ?><span class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i class="mdi mdi-arrow-up"></i> Inativos</sup></h4>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">

                                <button type="button" class="btn btn-primary waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-xl">Cadastrar novo Resíduo</button>

                            </div>
                            <!--  Modal content for the above example -->
                            <br><br>    <br>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Resíduos Cadastrados</h4>
                                <!--<p class="card-title-desc">
                                    Create responsive tables by wrapping any <code>.table</code> in <code>.table-responsive</code>
                                    to make them scroll horizontally on small devices (under 768px).
                                </p>-->

                                <div class="table-responsive">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Tipo do Resíduo</th>
                                                <th>Categoria</th>
                                                <th>Tecnologia de Tratamento</th>
                                                <th>Classe</th>
                                                <th>Status</th>
                                                <th>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php
                                            // Consulta SQL para buscar os dados
                                            $query = "SELECT id_residuo, nome, tipo_residuo, categoria, tecnologia_tratamento, classe, unidade_medida, classe_risco_principal, classe_risco_sub, numero_risco,status FROM residuos where id_usuario = '$id'";

                                            $result = $conn->query($query);
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>" . $row['nome'] . "</td>";
                                                echo "<td>" . $row['tipo_residuo'] . "</td>";
                                                echo "<td>" . $row['categoria'] . "</td>";
                                                echo "<td>" . $row['tecnologia_tratamento'] . "</td>";
                                                echo "<td>" . $row['classe'] . "</td>";
                                                echo "<td>" . $row['status'] . "</td>"; ?>

                                                <td>
                                                    <div class="row">
                                                        <div class="col">
                                                            <a href='tela_view_residuos.php?id_residuo=<?php echo $row["id_residuo"]; ?>' type="button" class="btn btn-warning waves-effect waves-light"><i class="ri-edit-line"></i></a>

                                                          

                                                            <a href='controller/atualiza_status_residuo.php?id=<?php echo $row["id_residuo"]; ?>' type="button" class="btn btn-danger waves-effect waves-light"><i class="ri-sensor-fill"></i></a>
                                                        </div>
                                                    </div>
                                                </td>
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

        <!-- end main content-->
    <?php

    require_once "header.php";
    echo $nome = $_SESSION["nome"];
}
    ?>
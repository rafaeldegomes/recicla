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
                            <h4 class="mb-sm-0">Residuos</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pagina Inicial</li>
                                </ol>

                            </div>
                        </div>

                        <form action="salvar_usuario.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Digite o email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha:</label>
                                <input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto:</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                            </div>
                            <div class="form-group">
                                <label for="nivel">Nível:</label>
                                <input type="text" class="form-control" id="nivel" placeholder="Digite o nível" name="nivel">
                            </div>
                            <div class="form-group">
                                <label for="cargo">Cargo:</label>
                                <input type="text" class="form-control" id="cargo" placeholder="Digite o cargo" name="cargo">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
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
<?php

    require_once "header.php";
    echo $nome = $_SESSION["nome"];
}
?>
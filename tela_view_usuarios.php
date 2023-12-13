<?php
session_start();

$id = $_SESSION["usuario_id"];
$id_usuario = $_GET['id_usuario'];
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
    <!-- ===============a=============================================== -->
    <div class="main-content">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Visualizar Servidor</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Página Inicial</li>
                                </ol>

                            </div>
                        </div>
                        <?php

                        // Consulta SQL para contar os registros
                        $query_total_usuarios = "SELECT * FROM usuarios where id_usuario = '$id_usuario'";

                        $result = $conn->query($query_total_usuarios);

                        // Obtendo o número de registros
                        $row = $result->fetch_assoc();


                        ?>
                        <div class="row">
                            <div class="modal-body">
                                <form action="edita_usuarios.php" method="POST">
                                    <input type="hidden" id="id" name="id" value="<?php echo $row['id_usuario']; ?>">
                                    <div class="row">
                                        <div class="col">
                                            <label for="example-text-input" class="col-sm-6 col-form-label">Nome do
                                                Servidor</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="nome" id="nome"
                                                    placeholder="Digite o nome do Servidor" id="example-text-input"
                                                    value="<?php echo $row['nome']; ?>">
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                            <input class="form-control" type="text" name="email" id="email"
                                                    placeholder="Digite o email do Servidor" id="example-text-input"
                                                    value="<?php echo $row['email']; ?>">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Senha</label>
                                            <div class="col-sm-10">
                                            <input class="form-control" type="password" name="senha" id="senha"
                                                    placeholder="Digite a senha do Servidor" id="example-text-input"
                                                    value="<?php echo $row['senha']; ?>">  
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Nível</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="nivel" id="nivel">
                                                    <option selected="<?php echo $row['nivel']; ?>"><?php echo $row['nivel']; ?></option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="Usuario">Usuario</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Cargo</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="cargo" id="cargo">
                                                   <option selected="<?php echo $row['cargo']; ?>"><?php echo $row['cargo']; ?></option> 
                                                    <option value="Gestor">Gestor</option>
                                                    <option value="Secretário Adjunto">Secretário Adjunto</option>
                                                    <option value="Assessor">Assessor</option>
                                                    <option value="Diretor">Diretor</option>
                                                    <option value="Técnico Ambiental">Técnico Ambiental</option>
                                                    <option value="Auxiliar Administrativo">Auxiliar Administrativo</option>
                                                    <option value="Auxiliar Serviços Gerais">Auxiliar Serviços Gerais</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label class="col-sm-6 col-form-label">Status </label>
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="statususuario" id="statususuario">
                                                  <option selected="<?php echo $row['status']; ?>"><?php echo $row['status']; ?></option> 
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
                                            <a href='usuarios.php' type="button"
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
       // echo $nome = $_SESSION["nome"];
}
?>
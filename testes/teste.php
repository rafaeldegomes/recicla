<!DOCTYPE html>
<html>
<head>
    <title>Cadastro Dinâmico</title>
    <!-- Adicione os estilos Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Cadastro Dinâmico</h2>
        <form action="salvar_dados.php" method="post">
            <div id="dynamic-inputs">
                <div class="form-group">
                    <input type="text" class="form-control" name="dados[]">
                </div>
            </div>
            <button type="button" class="btn btn-primary" onclick="addInput()">Adicionar Campo</button>
            <button type="submit" class="btn btn-success">Salvar Dados</button>
        </form>

        <h2>Registros Cadastrados:</h2>
        <ul class="list-group">
            <?php include 'listar_dados.php'; ?>
        </ul>
    </div>

    <!-- Adicione o script Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        function addInput() {
            var newInput = `
                <div class="form-group">
                    <input type="text" class="form-control" name="dados[]">
                </div>
            `;
            $("#dynamic-inputs").append(newInput);
        }

        function showModal(id, texto) {
            $("#editarModal #id_tabela_dados").val(id);
            $("#editarModal #texto").val(texto);
            $("#editarModal").modal("show");
        }
    </script>

    <!-- Modal de Edição -->
    <div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel">Editar Dados</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="editar_dados.php" method="post">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id_tabela_dados" name="id_tabela_dados">
                            <label for="texto">Texto:</label>
                            <input type="text" class="form-control" id="texto" name="texto">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

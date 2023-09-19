<?php
session_start();
// ... Código anterior ...
require_once "conecta.php";


    $email = $_POST["email"];
    $senha = md5($_POST["senha"]); // Criptografa a senha usando MD5
    $selecao = $_POST['tipoUsuario'];

    // Consulta o banco de dados para verificar o usuário e seu nível
    $query = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Login bem-sucedido
        
        $row = mysqli_fetch_assoc($result);
        $nivelUsuario = $row["nivel"];

        // Redirecionar com base no nível do usuário
        if ($nivelUsuario == "admin") {
            header("Location: ../principal.php");
           

            // Definir as variáveis da sessão com o ID e o nome do usuário
            $_SESSION["usuario_id"] = $row["id_usuario"];
            $_SESSION["usuario_nome"] = $row["nome"];
            $_SESSION["cargo"] = $row["cargo"];

            

        } elseif ($nivelUsuario == "usuario") {
            $_SESSION["usuario_id"] = $row["id_usuario"];
            $_SESSION["usuario_nome"] = $row["nome"];
            $_SESSION["cargo"] = $row["cargo"];
            header("Location: ../principal_usuario.php");
        } else {
            // Caso o nível não seja definido, redireciona para uma página padrão
            header("Location: ../index.php?id=1");
        }
        exit(); // Termina a execução do script após o redirecionamento
    } else {
        header("Location: ../index.php?id=1");
    }


// ... Código posterior ...

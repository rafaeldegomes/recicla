<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesdesign.in/reactly/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2023 16:15:12 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Login | ReciclaTche</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Layout Js -->
        <script src="assets/js/layout.js"></script>

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        
    </head>

    <body>
        <div class="auth-maintenance d-flex align-items-center min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-sm-12">
                        <div>
                            <div class="text-center mb-4">
                                <a href="index.html" class="">
                                    <img src="assets/images/logofinalsite.png" alt="" height="100" class="auth-logo logo-dark mx-auto">
                                    <img src="assets/images/logofinalsite.png" alt="" height="100" class="auth-logo logo-light mx-auto">
                                </a>
                            </div>
                            
                            <div class="row justify-content-center align-items-center pt-4">
                                <div class="col-lg-6 col-md-8">
                                   <div class="card">
                                        <div class="card-body">
                                            <div class="p-3">
                                              <div class="text-center mt-1">
                                                <h4 class="font-size-18">Bem Vindo!</h4>
                                                <p class="text-muted">Coloque suas informações para realizar o login</p>
                                              </div>
                                            <!-- Modal para exibir mensagem de erro -->
                                            <div id="errorModal" class="modal">
                                                <span onclick="fecharModal()" style="float: right; cursor: pointer;">&times;</span>
                                                <p id="errorMessage"></p>
                                            </div>

                                            <!-- Script para exibir a modal de erro, caso haja algum erro -->
                                            
                                              <form action="controller/processa_login.php" method="post" class="auth-input">
                                                <div class="mb-2">
                                                    <label for="username" class="form-label">Email</label>
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu Email">
                                                </div>
                                        
                                                <div class="mb-3">
                                                    <label class="form-label" for="password-input">Senha</label>
                                                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua Senha">
                                                </div>
                                        
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                    <label class="form-check-label" for="auth-remember-check">Lembrar</label>
                                                </div>
                                        
                                                <div class="mt-4">
                                                    <button class="btn btn-primary w-100" type="submit">Entrar</button>
                                                </div>
                                        
                                                <!--<div class="mt-4 pt-2 text-center">
                                                    <div class="signin-other-title">
                                                        <h5 class="font-size-14 mb-4 title">Sign In with</h5>
                                                    </div>
                                                    <div class="pt-2 hstack gap-2 justify-content-center">
                                                        <button type="button" class="btn btn-primary btn-sm"><i class="ri-facebook-fill font-size-16"></i></button>
                                                        <button type="button" class="btn btn-danger btn-sm"><i class="ri-google-fill font-size-16"></i></button>
                                                        <button type="button" class="btn btn-dark btn-sm"><i class="ri-github-fill font-size-16"></i></button>
                                                        <button type="button" class="btn btn-info btn-sm"><i class="ri-twitter-fill font-size-16"></i></button>
                                                    </div>
                                                </div>-->
                                            </form>
                                            </div>
                                            
                                            <div class="mt-4 text-center">
                                                <p>Quer conhecer nossas tecnologias ? <a href="#" class="fw-medium text-primary"> Entre em Contato </a> </p>
                                                <p>© <script>document.write(new Date().getFullYear())</script> Reactly. Crafted with <i class="mdi mdi-heart text-danger"></i> o Coração e Chimarrão</p>
                                            </div>
                                        </div>
                                   </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesdesign.in/reactly/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2023 16:15:12 GMT -->
</html>

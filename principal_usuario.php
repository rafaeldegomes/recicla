<?php 
session_start();
require_once "header_usuario.php";
//session_start();
$id = $_SESSION["usuario_id"];
$nome = $_SESSION["usuario_nome"];
?>

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
                                    <h4 class="mb-sm-0">Página Inicial </h4>
                                   
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Página Inicial</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        
                            </div>
    

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-xl-21">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    
                                                </div>
            
                                                <h2 class="card-title mb-sm-0">TOTAL E PONTUAÇÃO</h2>
        
                                                <div id="chart-radialBar" class="apex-charts"></div>
        
                                                <p class="text-muted text-center">Acompanhe aqui suas informações e seus pontos</p>
        
                                                <div class="row mt-4 pt-1">
                                                    <div class="col border-end">
                                                        <div class="text-center">
                                                            <p class="text-muted font-size-18 mb-2">Total Resíduos Enviados</p>
                                                            <h4>12kg</h4>
                                                            <p class="font-size-19 fw-bold text-primary mb-0"><i class="mdi mdi-arrow-up-circle font-size-16 me-1"></i> 9.2%</p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="text-center">
                                                            <p class="text-muted font-size-18 mb-2">Pontuação Total</p>
                                                            <h4>120</h4>
                                                            <p class="font-size-15 fw-bold text-primary mb-0"><i class="mdi mdi-arrow-up-circle font-size-16 me-1"></i> 6.3%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                  
            
                                               

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
<?php 

require_once "footer_usuario.php";

?>
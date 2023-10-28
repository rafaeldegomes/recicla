<?php
session_start();

$id = $_SESSION["usuario_id"];
$nivel = $_SESSION["nivel"];
if (empty($id) ) {
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
                            <h4 class="mb-sm-0">Pagina Inicial</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Pagina Inicial</li>
                                </ol>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap pb-3 gap-3">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-truncate mb-2">Today Orders</p>
                                                        <h4 class="mt-2 mb-0">32,562 <span class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i class="mdi mdi-arrow-up"></i> 10%</sup></h4>
                                                    </div>
                                                    <div class="text-primary">
                                                        <div id="chart-mini1" class="apex-chart"></div>
                                                    </div>
                                                </div>
                                                <p class="mb-0 font-size-14 fw-bold mt-2 text-truncate">126<span class="text-muted fw-normal"> ~ vs. previous month</span></p>
                                            </div>
                                        </div>
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
        //echo $nome = $_SESSION["nome"];
    }
        ?>
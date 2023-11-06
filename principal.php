<?php
session_start();

$id = $_SESSION["usuario_id"];
$nivel = $_SESSION["nivel"];
if (empty($id)|| $nivel == "usuario") {
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
                                <li class="breadcrumb-item active">Página Inicial</li>
                            </ol>
                        </div>
                    </div>
                   

                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap pb-3 gap-3">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-truncate mb-2">Today Orders</p>
                                            <h4 class="mt-2 mb-0">32,562 <span
                                                    class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i
                                                        class="mdi mdi-arrow-up"></i> 10%</sup></h4>
                                        </div>
                                        <div class="text-primary">
                                            <div id="chart-mini1" class="apex-chart"></div>
                                        </div>
                                    </div>
                                    <p class="mb-0 font-size-14 fw-bold mt-2 text-truncate">126<span
                                            class="text-muted fw-normal"> ~ vs. previous month</span></p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap pb-3 gap-3">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-truncate mb-2">Today Orders</p>
                                            <h4 class="mt-2 mb-0">32,562 <span
                                                    class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i
                                                        class="mdi mdi-arrow-up"></i> 10%</sup></h4>
                                        </div>
                                        <div class="text-primary">
                                            <div id="chart-mini2" class="apex-chart"></div>
                                        </div>
                                    </div>
                                    <p class="mb-0 font-size-14 fw-bold mt-2 text-truncate">126<span
                                            class="text-muted fw-normal"> ~ vs. previous month</span></p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap pb-3 gap-3">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-truncate mb-2">Today Orders</p>
                                            <h4 class="mt-2 mb-0">32,562 <span
                                                    class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i
                                                        class="mdi mdi-arrow-up"></i> 10%</sup></h4>
                                        </div>
                                        <div class="text-primary">
                                            <div id="chart-mini3" class="apex-chart"></div>
                                        </div>
                                    </div>
                                    <p class="mb-0 font-size-14 fw-bold mt-2 text-truncate">126<span
                                            class="text-muted fw-normal"> ~ vs. previous month</span></p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-wrap pb-3 gap-3">
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-truncate mb-2">Today Orders</p>
                                            <h4 class="mt-2 mb-0">32,562 <span
                                                    class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i
                                                        class="mdi mdi-arrow-up"></i> 10%</sup></h4>
                                        </div>
                                        <div class="text-primary">
                                            <div id="chart-mini4" class="apex-chart"></div>
                                        </div>
                                    </div>
                                    <p class="mb-0 font-size-14 fw-bold mt-2 text-truncate">126<span
                                            class="text-muted fw-normal"> ~ vs. previous month</span></p>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="float-end">
                                <select class="form-select form-select-sm">
                                    <option selected="">Apr</option>
                                    <option value="1">Mar</option>
                                    <option value="2">Feb</option>
                                    <option value="3">Jan</option>
                                </select>
                            </div>
                            <h4 class="card-title">Social Source</h4>

                            <div id="pie-chart"
                                style="height: 280px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;"
                                class="e-charts" _echarts_instance_="ec_1699224608570">
                                <div
                                    style="position: relative; width: 164px; height: 140px; padding: 0px; margin: 0px; border-width: 0px; cursor: default;">
                                    <canvas data-zr-dom-id="zr_0" width="330" height="125"
                                        style="position: absolute; left: 0px; top: 0px; width: 264px; height: 140px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas>
                                </div>
                                <div class=""
                                    style="position: absolute; display: block; border-style: solid; white-space: nowrap; z-index: 9999999; box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 10px; transition: opacity 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, visibility 0.2s cubic-bezier(0.23, 1, 0.32, 1) 0s, transform 0.4s cubic-bezier(0.23, 1, 0.32, 1) 0s; background-color: rgb(255, 255, 255); border-width: 1px; border-radius: 4px; color: rgb(102, 102, 102); font: 14px / 21px &quot;Microsoft YaHei&quot;; padding: 10px; top: 0px; left: 0px; transform: translate3d(-129px, 98px, 0px); border-color: rgb(65, 204, 131); pointer-events: none; visibility: hidden; opacity: 0;">
                                    Total sales <br>Facebook : 1548 (60.42%)</div>
                            </div>


                            <div class="border-top social-info">
                                <div class="row align-items-center g-0 mt-2 pt-2">
                                    <div class="col-sm-2">
                                        <h6 class="text-truncate mb-0"><i
                                                class="mdi mdi-circle font-size-10 text-primary me-2"></i> Facebook
                                        </h6>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar progress-bar-striped bg-primary"
                                                role="progressbar" style="width: 80%" aria-valuenow="80"
                                                aria-valuemin="0" aria-valuemax="80">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row align-items-center g-0 mt-3 pt-1">
                                    <div class="col-sm-2">
                                        <h6 class="text-truncate mb-0"><i
                                                class="mdi mdi-circle font-size-10 text-success me-2"></i> Website </h6>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar progress-bar-striped bg-success"
                                                role="progressbar" style="width: 65%" aria-valuenow="65"
                                                aria-valuemin="0" aria-valuemax="65">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row align-items-center g-0 mt-3 pt-1">
                                    <div class="col-sm-2">
                                        <h6 class="text-truncate mb-0"><i
                                                class="mdi mdi-circle font-size-10 text-purple me-2"></i> E-comme..
                                        </h6>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar progress-bar-striped bg-purple"
                                                role="progressbar" style="width: 48%" aria-valuenow="48"
                                                aria-valuemin="0" aria-valuemax="48">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row align-items-center g-0 mt-3 pt-1">
                                    <div class="col-sm-2">
                                        <h6 class="text-truncate mb-0"><i
                                                class="mdi mdi-circle font-size-10 text-danger me-2"></i> Instagram
                                        </h6>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar progress-bar-striped bg-danger"
                                                role="progressbar" style="width: 78%" aria-valuenow="78"
                                                aria-valuemin="0" aria-valuemax="78">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->

                                <div class="row align-items-center g-0 mt-3 pt-1">
                                    <div class="col-sm-2">
                                        <h6 class="text-truncate mb-0"><i
                                                class="mdi mdi-circle font-size-10 text-warning me-2"></i> Google </h6>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="progress" style="height: 6px;">
                                            <div class="progress-bar progress-bar progress-bar-striped bg-warning"
                                                role="progressbar" style="width: 63%" aria-valuenow="63"
                                                aria-valuemin="0" aria-valuemax="63">
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end row-->

                                <div class="mt-4 text-center">
                                    <a href="#" class="text-dark font-size-14 fw-bold">View All Sources <i
                                            class="mdi mdi-arrow-right align-middle"></i></a>
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
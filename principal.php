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
                        <h4 class="mb-sm-0">Página Inicial</h4>
                       
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                                <li class="breadcrumb-item active">Página Inicial</li>
                            </ol>
                        </div>
                    </div>
                 
                   <h6 class="card-tittle">PRINCÍPAIS BAIRROS</h6>
                   
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
                                    <option value="1">Abr</option>
                                    <option value="2">Mar</option>
                                    <option value="3">Fev</option>
                                    <option value="4">Jan</option>
                                </select>
                            </div>
                            <h4 class="card-title"> PRINCÍPAIS RESÍDUOS</h4>

                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Papel',     35],
          ['Plástico',      13],
          ['Vidro',  5],
          ['Metal', 30],
          ['Papelão',    17]
        ]);

        var options = {
         
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  
    <div id="piechart" style="width: 900px; height: 500px;"></div>
     
                                <div class="mt-4 text-center">
                                    <a href="#" class="text-dark font-size-12 fw-bold">VOLTAR AO INÍCIO<i
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
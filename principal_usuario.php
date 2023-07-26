<?php 
session_start();
require_once "footer.php";
session_start();
$id = $_SESSION["usuario_id"];
$nome = $_SESSION["nome"];
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
                                    <h4 class="mb-sm-0">Dashboard </h4>
                                   
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Reactly</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

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

                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap pb-3 gap-3">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-truncate mb-2">Today Visitor</p>
                                                        <h4 class="mt-2 mb-0">26,429 <span class="badge bg-subtle-danger text-danger font-size-10 ms-1"><i class="mdi mdi-arrow-down"></i> 23%</sup></h4>
                                                    </div>
                                                    <div class="text-primary">
                                                        <div id="chart-mini2" class="apex-chart"></div>
                                                    </div>
                                                </div>
                                                <p class="mb-0 font-size-14 fw-bold mt-2 text-truncate">568<span class="text-muted fw-normal"> ~ vs. previous month</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap pb-3 gap-3">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-truncate mb-2">Total Expense</p>
                                                        <h4 class="mt-2 mb-0">64,249 <span class="badge bg-subtle-primary text-primary font-size-10 ms-1"><i class="mdi mdi-arrow-up"></i> 32%</sup></h4>
                                                    </div>
                                                    <div class="text-primary">
                                                        <div id="chart-mini3" class="apex-chart"></div>
                                                    </div>
                                                </div>
                                                <p class="mb-0 font-size-14 fw-bold mt-2 text-truncate">232<span class="text-muted fw-normal"> ~ vs. previous month</span></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex flex-wrap pb-3 gap-3">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-truncate mb-2">New Users</p>
                                                        <h4 class="mt-2 mb-0">52,653  <span class="badge bg-subtle-danger text-danger font-size-10 ms-1"><i class="mdi mdi-arrow-down"></i> 18%</sup></h4>
                                                    </div>
                                                    <div class="text-primary">
                                                        <div id="chart-mini4" class="apex-chart"></div>
                                                    </div>
                                                </div>
                                                <p class="mb-0 font-size-14 fw-bold mt-2 text-truncate">235<span class="text-muted fw-normal"> ~ vs. previous month</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
    
                                <div class="card">
                                    <div class="card-body p-xl-0">
                                       <div class="p-0 p-xl-3">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Weekly</a>
                                                </div>
                                            </div>
                                        </div>
                                            <h4 class="card-title">Revenue Analytics</h4>
                                       </div>

                                        <div class="row align-items-center">
                                            <div class="col-xl-9">
                                                <div class="mb-2">
                                                    <div id="multi_chart" data-colors='["--bs-primary", "--bs-info", "--bs-success"]' class="apex-charts" dir="ltr"></div>
                                                </div>
                                            </div>

                                            <div class="col-xl-3">
                                                <div class="ps-4 ps-xl-0">
                                                    <h3>$ 6134.39</h3>
                                                    <p class="text-uppercase text-muted mb-1 mt-3"> From 2016 to 2023</p>
                                                    <h4 class="font-size-18 text-truncate">Sales Statistical Overview</h4>

                                                   
                                                    <div class="row mt-3 pt-1">
                                                        <div class="col-6">
                                                            <div>
                                                                <p class="text-muted mb-2">Income</p>
                                                                <h5>$ 2632.46</h5>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div>
                                                                <p class="text-muted mb-2">Expense</p>
                                                                <h5>$ 924.38</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="font-size-15 mt-3"><span class="text-primary fw-bold"> +17% </span>more than last week</p>

                                                    <div class="d-flex mt-4 gap-2">
                                                        <a href="javascript: void(0);" class="btn btn-primary text-truncate">Analytics Sales </a>
                                                        <a href="javascript: void(0);" class="btn btn-success text-truncate">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end">
                                            <select class="form-select form-select-sm">
                                                <option selected>Apr</option>
                                                <option value="1">Mar</option>
                                                <option value="2">Feb</option>
                                                <option value="3">Jan</option>
                                            </select>
                                        </div>
                                        <h4 class="card-title">Social Source</h4>
    
                                        <div id="pie-chart" style="height: 340px;" class="e-charts"></div>


                                        <div class="border-top social-info">
                                            <div class="row align-items-center g-0 mt-3 pt-3">
                                                <div class="col-sm-4">
                                                    <h6 class="text-truncate mb-0"><i class="mdi mdi-circle font-size-10 text-primary me-2"></i> Facebook </h6>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end row-->
    
                                            <div class="row align-items-center g-0 mt-3 pt-1">
                                                <div class="col-sm-4">
                                                    <h6 class="text-truncate mb-0"><i class="mdi mdi-circle font-size-10 text-success me-2"></i> Website </h6>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="65">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end row-->
    
                                            <div class="row align-items-center g-0 mt-3 pt-1">
                                                <div class="col-sm-4">
                                                    <h6 class="text-truncate mb-0"><i class="mdi mdi-circle font-size-10 text-purple me-2"></i> E-comme.. </h6>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar progress-bar progress-bar-striped bg-purple" role="progressbar" style="width: 48%" aria-valuenow="48" aria-valuemin="0" aria-valuemax="48">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end row-->
    
                                            <div class="row align-items-center g-0 mt-3 pt-1">
                                                <div class="col-sm-4">
                                                    <h6 class="text-truncate mb-0"><i class="mdi mdi-circle font-size-10 text-danger me-2"></i> Instagram </h6>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end row-->
    
                                            <div class="row align-items-center g-0 mt-3 pt-1">
                                                <div class="col-sm-4">
                                                    <h6 class="text-truncate mb-0"><i class="mdi mdi-circle font-size-10 text-warning me-2"></i> Google </h6>
                                                </div>
                                                <div class="col-sm-8">
                                                    <div class="progress" style="height: 6px;">
                                                        <div class="progress-bar progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 63%" aria-valuenow="63" aria-valuemin="0" aria-valuemax="63">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end row-->

                                            <div class="mt-4 text-center">
                                                <a href="#" class="text-dark font-size-14 fw-bold">View All Sources <i class="mdi mdi-arrow-right align-middle"></i></a>
                                            </div>
    
                                        </div>
    
                                        
                                    </div>
                                </div>
    
                             
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-7">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted">Report<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
        
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Download Report</a>
                                                        <a class="dropdown-item" href="#">Export</a>
                                                        <a class="dropdown-item" href="#">Import</a>
                                                    </div>
                                                </div>
            
                                                <h4 class="card-title mb-0">Asset Allcation</h4>
        
                                                <div id="chart-radialBar" class="apex-charts"></div>
        
                                                <p class="text-muted text-center">This Week Total Sales And Earning</p>
        
                                                <div class="row mt-4 pt-1">
                                                    <div class="col border-end">
                                                        <div class="text-center">
                                                            <p class="text-muted font-size-15 mb-2">Total Founding</p>
                                                            <h4>$5,574.32</h4>
                                                            <p class="font-size-15 fw-bold text-primary mb-0"><i class="mdi mdi-arrow-up-circle font-size-16 me-1"></i> 9.2%</p>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="text-center">
                                                            <p class="text-muted font-size-15 mb-2">Total Dividends</p>
                                                            <h4>$235.45</h4>
                                                            <p class="font-size-15 fw-bold text-primary mb-0"><i class="mdi mdi-arrow-up-circle font-size-16 me-1"></i> 6.3%</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false">
                                                        <span class="text-muted">Monthly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                    </a>
        
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
            
                                                <h4 class="card-title mb-4">Massages</h4>
        
                                                <div class="chat-message-list widget-chat-list mx-n3" data-simplebar style="max-height: 412px;">
                                                    <div class="px-3">
                                                        <ul class="list-unstyled chat-list">
                                                            <li>
                                                                <a href="apps-chat.html" class="mt-0">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle header-profile-user" alt="">
                                                                        </div>
                                                                        
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h6 class="text-truncate font-size-15 mb-1">Steven Jones</h6>
                                                                                    <p class="text-truncate font-size-14 mb-0">Feels like it's been a while! Home are you?</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0">
                                                                                    <div class="font-size-14">02 min</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                                <!-- end li -->
                                                            <li>
                                                                <a href="apps-chat.html">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="rounded-circle header-profile-user align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-primary bg-gradient">
                                                                                    H
                                                                                </span>
                                                                            </div>
                                                                            <span class="user-status"></span>
                                                                        </div>
        
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h6 class="text-truncate font-size-15 mb-1">Alex Mulvey</h6>
                                                                                    <p class="text-truncate font-size-14 mb-0">I've finished it! See you so</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0">
                                                                                    <div class="font-size-14">10 min</div>
                                                                                </div>
                                                                                
                                                                                <div class="unread-message">
                                                                                    <span class="badge bg-danger rounded-pill">1</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                                <!-- end li -->
                                                            <li>
                                                                <a href="apps-chat.html">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0  me-3">
                                                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle header-profile-user" alt="">
                                                                            <span class="user-status"></span>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h6 class="text-truncate font-size-15 mb-1">Justin Moore</h6>
                                                                                    <p class="text-truncate font-size-14 mb-0">and how it's going with the velocity website?</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0">
                                                                                    <div class="font-size-14">22 min</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </a>
                                                            </li>
                                                                <!-- end li -->
                                                            <li>
                                                                <a href="apps-chat.html">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle header-profile-user" alt="">
                                                                            <span class="user-status"></span>
                                                                        </div>
        
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h6 class="text-truncate font-size-15 mb-1">Edith McLain</h6>
                                                                                    <p class="text-truncate font-size-14 mb-0">Super, I will get you the new brief</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0">
                                                                                    <div class="font-size-14">01 Hr</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                                <!-- end li -->
                                                            <li>
                                                                <a href="apps-chat.html">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="rounded-circle header-profile-user align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-primary bg-gradient">
                                                                                    W
                                                                                </span>
                                                                            </div>
                                                                            <span class="user-status"></span>
                                                                        </div>
        
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h6 class="text-truncate font-size-15 mb-1">William Declue</h6>
                                                                                    <p class="text-truncate font-size-14 mb-0">just catching up with Steve i'll write it out.</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0">
                                                                                    <div class="font-size-14">04 Hrs</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                                <!-- end li -->
                                                            <li>
                                                                <a href="apps-chat.html">
                                                                    <div class="d-flex align-items-center">
                                                                        
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <div class="rounded-circle header-profile-user align-self-center">
                                                                                <span class="avatar-title rounded-circle bg-primary bg-gradient">
                                                                                    W
                                                                                </span>
                                                                            </div>
                                                                            <span class="user-status"></span>
                                                                        </div>
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h6 class="text-truncate font-size-15 mb-1">Wendy Lennox</h6>
                                                                                    <p class="text-truncate font-size-14 mb-0">Hey! there I'm available</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0">
                                                                                    <div class="font-size-14">10 Hrs</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <!-- end li -->
                                                            <li>
                                                                <a href="apps-chat.html">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="flex-shrink-0 me-3">
                                                                            <img src="assets/images/users/avatar-3.jpg" class="rounded-circle header-profile-user" alt="">
                                                                            <span class="user-status"></span>
                                                                        </div>
        
                                                                        <div class="flex-grow-1 overflow-hidden">
                                                                            <div class="d-flex">
                                                                                <div class="flex-grow-1 overflow-hidden">
                                                                                    <h6 class="text-truncate font-size-15 mb-1">Mary Welch</h6>
                                                                                    <p class="text-truncate font-size-14 mb-0">This theme is awesome!</p>
                                                                                </div>
                                                                                <div class="flex-shrink-0">
                                                                                    <div class="font-size-14">19 Sept</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                                <!-- end li -->
                                                        </ul>
                                                        <!-- end ul -->
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>

                            <div class="col-xl-5">
                                <div class="card">
                                    <div class="p-3 pb-0">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold">Year:</span> <span class="text-muted">2023<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">2021</a>
                                                    <a class="dropdown-item" href="#">2022</a>
                                                    <a class="dropdown-item" href="#">2023</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title">Sales Statistics</h4>
                                   </div>
                                    <div class="card-body pt-0">

                                        <div id="sales-over" class="apex-chart"></div>

                                        <div class="table-responsive px-1">
                                            <table class="table align-middle table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Order Status</th>
                                                        <th scope="col">Orders</th>
                                                        <th scope="col">Retuns</th>
                                                        <th scope="col">Earnings</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-dark">Product Pending</a>
                                                        </td>
                                                        <td>17,351</td>
                                                        <td>2,123</td>
                                                        <td><span class="badge bg-subtle-primary text-primary font-size-11 ms-1"><i class="mdi mdi-arrow-up"></i> 45.3%</span></td>
                                                    </tr><!-- end -->

                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-dark">Product Cancelled</a>
                                                        </td>
                                                        <td>67,356</td>
                                                        <td>3,652</td>
                                                        <td><span class="badge bg-subtle-danger text-danger font-size-11 ms-1"><i class="mdi mdi-arrow-down"></i> 14.6%</span></td>
                                                    </tr><!-- end -->


                                                    <tr>
                                                        <td>
                                                            <a href="javascript:void(0);" class="text-dark">Product Delivered</a>
                                                        </td>
                                                        <td>67,356</td>
                                                        <td>3,652</td>
                                                        <td><span class="badge bg-subtle-primary text-primary font-size-11 ms-1"><i class="mdi mdi-arrow-up"></i> 14.6%</span></td>
                                                    </tr><!-- end -->
                                                </tbody><!-- end tbody -->
                                            </table><!-- end table -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="float-end d-none d-md-inline-block">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold">Year:</span> <span class="text-muted">2023<i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">2021</a>
                                                    <a class="dropdown-item" href="#">2022</a>
                                                    <a class="dropdown-item" href="#">2023</a>
                                                </div>
                                            </div>
                                        </div>

                                        <h4 class="card-title">Top Retail Sales Locations</h4>
                                        <div class="mt-4">
                                            <div id="world-map-markers" style="height: 325px;">
                                            </div>
        
                                            <div class="mt-4 text-center">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item me-3 fw-medium"><i
                                                            class="mdi mdi-circle font-size-10 text-primary me-1"></i> United
                                                        States</li>
                                                    <li class="list-inline-item me-3 fw-medium"><i
                                                            class="mdi mdi-circle font-size-10 text-success me-1"></i> Canada
                                                        </li>
                                                    <li class="list-inline-item me-3 fw-medium"><i
                                                            class="mdi mdi-circle font-size-10 text-warning me-1"></i> Canada
                                                        </li>
                                                    <li class="list-inline-item me-3 fw-medium"><i
                                                            class="mdi mdi-circle font-size-10 text-danger me-1"></i> Canada
                                                        </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                         <div class="float-end d-none d-md-inline-block">
                                            <div class="dropdown">
                                                <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted"> Weekly <i class="mdi mdi-chevron-down ms-1"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Monthly</a>
                                                    <a class="dropdown-item" href="#">Yearly</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="card-title mb-3">Manage Orders</h4>


                                        <div class="table-responsive">
                                            <table class="table table-centered align-middle table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th style="width: 20px;" class="align-middle">
                                                            <div class="form-check font-size-15">
                                                                <input class="form-check-input" type="checkbox" id="checkAll">
                                                                <label class="form-check-label" for="checkAll"></label>
                                                            </div>
                                                        </th>
                                                        <th>Order ID</th>
                                                        <th>Product's Name</th>
                                                        <th>Variant</th>
                                                        <th>Type</th>
                                                        <th>Stock</th>
                                                        <th>Price</th>
                                                        <th>Sales</th>
                                                        <th>Status</th>
                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-15">
                                                                <input class="form-check-input" type="checkbox" id="orderidcheck01">
                                                                <label class="form-check-label" for="orderidcheck01"></label>
                                                            </div>
                                                        </td>
                                                        <td>#52561</td>
                                                        <td><a href="javascript: void(0);" class="text-body">Iphone 12 Max Pro</a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-secondary"></i> Gray
                                                        </td>
                                                        <td>
                                                            Electronic
                                                        </td>
                                                        <td>
                                                           1,564 Items
                                                        </td>
                                                        <td>
                                                            $1200
                                                        </td>
                                                        <td>
                                                            900
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                        
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-15">
                                                                <input class="form-check-input" type="checkbox" id="orderidcheck02">
                                                                <label class="form-check-label" for="orderidcheck02"></label>
                                                            </div>
                                                        </td>
                                                        <td>#52562</td>
                                                        <td><a href="javascript: void(0);" class="text-body">New Red and White jacket </a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-danger"></i> Red
                                                        </td>
                                                        <td>
                                                            Fashion
                                                        </td>
                                                        <td>
                                                           568 Items
                                                        </td>
                                                        <td>
                                                            $300
                                                        </td>
                                                        <td>
                                                            650
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                        
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-15">
                                                                <input class="form-check-input" type="checkbox" id="orderidcheck03">
                                                                <label class="form-check-label" for="orderidcheck03"></label>
                                                            </div>
                                                        </td>
                                                        <td>#52563</td>
                                                        <td><a href="javascript: void(0);" class="text-body">Latest Series Watch OS 8</a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-primary"></i> Dark
                                                        </td>
                                                        <td>
                                                            Electronic
                                                        </td>
                                                        <td>
                                                           1,232 Items
                                                        </td>
                                                        <td>
                                                            $250
                                                        </td>
                                                        <td>
                                                            350
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-15">
                                                                <input class="form-check-input" type="checkbox" id="orderidcheck04">
                                                                <label class="form-check-label" for="orderidcheck04"></label>
                                                            </div>
                                                        </td>
                                                        <td>#52564</td>
                                                        <td><a href="javascript: void(0);" class="text-body">New Horror Book</a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-success"></i> Green
                                                        </td>
                                                        <td>
                                                            Book
                                                        </td>
                                                        <td>
                                                           1,564 Items
                                                        </td>
                                                        <td>
                                                            $1200
                                                        </td>
                                                        <td>
                                                            900
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-15">
                                                                <input class="form-check-input" type="checkbox" id="orderidcheck05">
                                                                <label class="form-check-label" for="orderidcheck05"></label>
                                                            </div>
                                                        </td>
                                                        <td>#52565</td>
                                                        <td><a href="javascript: void(0);" class="text-body">Smart 4k Android TV</a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-primary"></i> Gray
                                                        </td>
                                                        <td>
                                                            Electronic
                                                        </td>
                                                        <td>
                                                           5,632 Items
                                                        </td>
                                                        <td>
                                                            $700
                                                        </td>
                                                        <td>
                                                            600
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-pricing" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-15">
                                                                <input class="form-check-input" type="checkbox" id="orderidcheck06">
                                                                <label class="form-check-label" for="orderidcheck06"></label>
                                                            </div>
                                                        </td>
                                                        <td>#52567</td>
                                                        <td><a href="javascript: void(0);" class="text-body">New Red and White jacket </a> </td>
                                                        <td>
                                                            <i class="mdi mdi-circle font-size-10 me-1 align-middle text-danger"></i> Red
                                                        </td>
                                                        <td>
                                                            Fashion
                                                        </td>
                                                        <td>
                                                           568 Items
                                                        </td>
                                                        <td>
                                                            $300
                                                        </td>
                                                        <td>
                                                            650
                                                        </td>
                                                        
                                                        <td style="width: 130px;">
                                                            <div class="progress" style="height: 6px;">
                                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="75">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="text-muted dropdown-toggle font-size-20" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                                    <i class="mdi mdi-dots-vertical"></i>
                                                                </a>
                        
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
<?php 

require_once "header.php";

?>
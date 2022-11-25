@@include("partials/main.html")

<head>
    @@include("partials/title-meta.html", {"title": "Chartjs"})

    @@include("partials/head-css.html")

</head>

@@include("partials/body.html")

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">

        @@include("partials/topbar.html") @@include("partials/sidebar.html")

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title mb-0 font-size-18">Chartjs</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active">Chartjs</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Line Chart</h4>

                                <div class="row text-center">
                                    <div class="col-4">
                                        <h5 class="mb-0">86541</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">2541</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">102030</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <canvas id="lineChart" height="300"></canvas>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Bar Chart</h4>

                                <div class="row text-center">
                                    <div class="col-4">
                                        <h5 class="mb-0">2541</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">84845</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">12001</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <canvas id="bar" height="300"></canvas>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Pie Chart</h4>

                                <div class="row text-center">
                                    <div class="col-4">
                                        <h5 class="mb-0">2536</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">69421</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">89854</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <canvas id="pie" height="260"></canvas>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Donut Chart</h4>

                                <div class="row text-center">
                                    <div class="col-4">
                                        <h5 class="mb-0">9595</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">36524</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">62541</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <canvas id="doughnut" height="260"></canvas>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Polar Chart</h4>

                                <div class="row text-center">
                                    <div class="col-4">
                                        <h5 class="mb-0">4852</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">3652</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">85412</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <canvas id="polarArea" height="300"> </canvas>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Radar Chart</h4>

                                <div class="row text-center">
                                    <div class="col-4">
                                        <h5 class="mb-0">694</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">55210</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">489498</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <canvas id="radar" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- End Page-content -->

                @@include("partials/footer.html")
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

    </div>
</div>
<!-- end container-fluid -->

@@include("partials/right-sidebar.html")

<!-- JAVASCRIPT -->
@@include("partials/vendor-scripts.html")

<!-- Chart JS -->
<script src="assets/libs/chart.js/Chart.bundle.min.js"></script>
<script src="assets/js/pages/chartjs.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>
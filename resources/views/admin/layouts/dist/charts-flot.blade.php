@@include("partials/main.html")

<head>
    @@include("partials/title-meta.html", {"title": "Flot charts"})

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
                            <h4 class="page-title mb-0 font-size-18">Flot charts</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                    <li class="breadcrumb-item active">Flot charts</li>
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

                                <h4 class="card-title mb-4">Multiple Statistics</h4>

                                <div class="row text-center mb-3">
                                    <div class="col-4">
                                        <h5 class="mb-0">362411</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">8489</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">985412</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <div id="website-stats" class="flot-charts flot-charts-height"></div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Realtime Statistics</h4>

                                <div class="row text-center mb-3">
                                    <div class="col-4">
                                        <h5 class="mb-0">365214</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">6521</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">44587</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <div id="flotRealTime" class="flot-charts flot-charts-height"></div>

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

                                <h4 class="card-title mb-4">Donut Pie</h4>

                                <div class="row text-center mb-3">
                                    <div class="col-4">
                                        <h5 class="mb-0">5484</h5>
                                        <p class="text-muted text-truncate">Activated</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">964984</h5>
                                        <p class="text-muted text-truncate">Pending</p>
                                    </div>
                                    <div class="col-4">
                                        <h5 class="mb-0">98498</h5>
                                        <p class="text-muted text-truncate">Deactivated</p>
                                    </div>
                                </div>

                                <div id="donut-chart">
                                    <div id="donut-chart-container" class="flot-charts flot-charts-height">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">Pie Chart</h4>

                                <div class="row text-center mb-3">
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

                                <div id="pie-chart">
                                    <div id="pie-chart-container" class="flot-charts flot-charts-height">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <!-- End Page-content -->

            @@include("partials/footer.html")
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

@@include("partials/right-sidebar.html")

<!-- JAVASCRIPT -->
@@include("partials/vendor-scripts.html")

<!-- flot plugins -->
<script src="assets/libs/flot-charts/jquery.flot.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.time.js"></script>
<script src="assets/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.resize.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.pie.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.selection.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.stack.js"></script>
<script src="assets/libs/flot.curvedLines/curvedLines.js"></script>
<script src="assets/libs/flot-charts/jquery.flot.crosshair.js"></script>

<!-- flot init -->
<script src="assets/js/pages/flot.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>
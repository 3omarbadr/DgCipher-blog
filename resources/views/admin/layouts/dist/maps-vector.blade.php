@@include("partials/main.html")

<head>

    @@include("partials/title-meta.html", {"title": "Vector Maps"})

    <!-- plugin css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

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
                            <h4 class="page-title mb-0 font-size-18">Vector Maps</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                    <li class="breadcrumb-item active">Vector Maps</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">World Vector Map</h4>
                                <p class="card-title-dsec">Example of world vector maps.</p>
                                <div id="world-map-markers" style="height: 420px"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">USA Vector Map</h4>
                                <p class="card-title-dsec">Example of united states of ameria vector maps.</p>
                                <div id="usa-vectormap" style="height: 350px"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">India Vector Map</h4>
                                <p class="card-title-dsec">Example of india vector maps.</p>
                                <div id="india-vectormap" style="height: 350px"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Australia Vector Map</h4>
                                <p class="card-title-dsec">Example of australia vector maps.</p>
                                <div id="australia-vectormap" style="height: 350px"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Chicago Vector Map</h4>
                                <p class="card-title-dsec">Example chicago of vector maps.</p>
                                <div id="chicago-vectormap" style="height: 350px"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">UK Vector Map</h4>
                                <p class="card-title-dsec">Example of united kingdom vector maps.</p>
                                <div id="uk-vectormap" style="height: 350px"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Canada Vector Map</h4>
                                <p class="card-title-dsec">Example canada of vector maps.</p>
                                <div id="canada-vectormap" style="height: 350px"></div>
                            </div>
                            <!-- end card-body-->
                        </div>
                        <!-- end card-->
                    </div>
                    <!-- end col-->
                </div>
                <!-- end row-->

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

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js"></script>

<!-- Init js-->
<script src="assets/js/pages/vector-maps.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>
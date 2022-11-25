@@include("partials/main.html")

<head>
    @@include("partials/title-meta.html", {"title": "Alerts"})

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
                            <h4 class="page-title mb-0 font-size-18">Alerts</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Alerts</li>
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

                                <h4 class="card-title">Default Alerts</h4>
                                <p class="card-title-desc">Alerts are available for any length of text, as well as
                                    an optional dismiss button. For proper styling, use one of the four
                                    <strong>required</strong> contextual classes (e.g., <code
                                        class="highlighter-rouge">.alert-success</code>). For inline dismissal, use
                                    the alerts jQuery plugin.
                                </p>

                                <div class="">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert—check it out!
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        A simple secondary alert—check it out!
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        A simple success alert—check it out!
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple danger alert—check it out!
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple warning alert—check it out!
                                    </div>
                                    <div class="alert alert-info mb-0" role="alert">
                                        A simple info alert—check it out!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Link color</h4>
                                <p class="card-title-desc">Use the <code class="highlighter-rouge">.alert-link</code>
                                    utility class to quickly
                                    provide matching colored links within any alert.</p>

                                <div class="">
                                    <div class="alert alert-primary" role="alert">
                                        A simple primary alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-secondary" role="alert">
                                        A simple secondary alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-success" role="alert">
                                        A simple success alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-danger" role="alert">
                                        A simple danger alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-warning" role="alert">
                                        A simple warning alert with <a href="#" class="alert-link">an example
                                            link</a>. Give it a click if you like.
                                    </div>
                                    <div class="alert alert-info mb-0" role="alert">
                                        A simple info alert with <a href="#" class="alert-link">an example link</a>.
                                        Give it a click if you like.
                                    </div>
                                </div>
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

                                <h4 class="card-title">Dismissing</h4>
                                <p class="card-title-desc">
                                    Add a dismiss button and the <code>.alert-dismissible</code> class, which adds
                                    extra padding to the right of the alert and positions the <code>.close</code>
                                    button.
                                </p>

                                <div class="">
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        A simple primary alert—check it out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                        A simple secondary alert—check it out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        A simple success alert—check it out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        A simple danger alert—check it out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        A simple warning alert—check it out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
                                        A simple info alert—check it out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title mb-4">With Icon</h4>

                                <div class="">
                                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-bullseye-arrow me-2"></i> A simple primary alert—check it
                                        out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-grease-pencil me-2"></i> A simple secondary alert—check it
                                        out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-check-all me-2"></i> A simple success alert—check it out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-block-helper me-2"></i> A simple danger alert—check it
                                        out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <i class="mdi mdi-alert-outline me-2"></i> A simple warning alert—check it
                                        out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
                                    </div>
                                    <div class="alert alert-info alert-dismissible fade show mb-0" role="alert">
                                        <i class="mdi mdi-alert-circle-outline me-2"></i> A simple info alert—check
                                        it out!
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close">

                                        </button>
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

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>
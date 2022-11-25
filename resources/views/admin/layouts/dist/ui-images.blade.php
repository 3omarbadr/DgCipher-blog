@@include("partials/main.html")

<head>

    @@include("partials/title-meta.html", {"title": "Images"})

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
                            <h4 class="page-title mb-0 font-size-18">Images</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">UI Elements</a></li>
                                    <li class="breadcrumb-item active">Images</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- start row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Image Rounded & Circle</h4>
                                <p class="card-title-desc">Use classes
                                    <code>.rounded</code> and <code>.rounded-circle</code>.
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="rounded mr-2" alt="200x200" width="200"
                                            src="assets/images/small/img-4.jpg" data-holder-rendered="true">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-4 mt-md-0">
                                            <img class="rounded-circle avatar-xl" alt="200x200"
                                                src="assets/images/users/avatar-4.jpg" data-holder-rendered="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Image thumbnails</h4>
                                <p class="card-title-desc">In addition to our border-radius utilities, you can use
                                    <code class="highlighter-rouge">.img-thumbnail</code> to give an image a rounded
                                    1px border appearance.
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <img class="img-thumbnail" alt="200x200" width="200"
                                            src="assets/images/small/img-3.jpg" data-holder-rendered="true">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mt-4 mt-md-0">
                                            <img class="img-thumbnail rounded-circle avatar-xl" alt="200x200"
                                                src="assets/images/users/avatar-3.jpg" data-holder-rendered="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title">Responsive images</h4>
                                <p class="card-title-desc">Images in Bootstrap are made responsive with <code
                                        class="highlighter-rouge">.img-fluid</code>. <code
                                        class="highlighter-rouge">max-width: 100%;</code> and <code
                                        class="highlighter-rouge">height: auto;</code> are applied to the image so
                                    that it scales with the parent element.</p>

                                <div class="">
                                    <img src="assets/images/small/img-2.jpg" class="img-fluid" alt="Responsive image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end row -->

                <!-- start row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Image Sizes</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded avatar-sm">
                                                    <p class="mt-2 mb-lg-0"><code>.avatar-sm</code></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded avatar-md">
                                                    <p class="mt-2  mb-lg-0"><code>.avatar-md</code></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded avatar-lg">
                                                    <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                                        class="rounded-circle avatar-sm">
                                                    <p class="mt-2 mb-lg-0"><code>.avatar-sm</code></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                                        class="rounded-circle avatar-md">
                                                    <p class="mt-2  mb-lg-0"><code>.avatar-md</code></p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div>
                                                    <img src="assets/images/users/avatar-5.jpg" alt=""
                                                        class="rounded-circle avatar-lg">
                                                    <p class="mt-2 mb-lg-0"><code>.avatar-lg</code></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
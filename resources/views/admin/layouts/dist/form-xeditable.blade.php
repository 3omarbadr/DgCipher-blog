@@include("partials/main.html")

<head>

    @@include("partials/title-meta.html", {"title": "Form Xeditable"})

    <!-- Plugins css -->
    <link href="assets/libs/bootstrap-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css" />

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
                            <h4 class="page-title mb-0 font-size-18">Form Xeditable</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Form Xeditable</li>
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

                                <h4 class="card-title">Inline Example</h4>
                                <p class="card-title-desc">This library allows you to create editable elements on
                                    your page. It can be used with any engine (bootstrap, jquery-ui, jquery only)
                                    and includes both popup and inline modes. Please try out demo to see how it
                                    works.</p>

                                <div class="table-responsive">
                                    <table class="table table-striped table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th style="width: 50%;">Inline</th>
                                                <th>Examples</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Simple Text Field</td>
                                                <td>
                                                    <a href="#" id="inline-username" data-type="text" data-pk="1"
                                                        data-title="Enter username">superuser</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Empty text field, required</td>
                                                <td>
                                                    <a href="#" id="inline-firstname" data-type="text" data-pk="1"
                                                        data-placement="right" data-placeholder="Required"
                                                        data-title="Enter your firstname"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Select, local array, custom display</td>
                                                <td>
                                                    <a href="#" id="inline-sex" data-type="select" data-pk="1"
                                                        data-value="" data-title="Select sex"></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Combodate</td>
                                                <td>
                                                    <a href="#" id="inline-dob" data-type="combodate"
                                                        data-value="2015-09-24" data-format="YYYY-MM-DD"
                                                        data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY"
                                                        data-pk="1" data-title="Select Date of birth"></a>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Textarea, buttons below. Submit by ctrl+enter</td>
                                                <td>
                                                    <a href="#" id="inline-comments" data-type="textarea" data-pk="1"
                                                        data-placeholder="Your comments here..."
                                                        data-title="Enter comments">awesome user!</a>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
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

<!-- Plugins js -->
<script src="assets/libs/moment/moment.js"></script>
<script src="assets/libs/bootstrap-editable/js/index.js"></script>

<!-- Init js-->
<script src="assets/js/pages/form-xeditable.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>
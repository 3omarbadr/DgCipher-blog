@@include("partials/main.html")

<head>

    @@include("partials/title-meta.html", {"title": "Commingsoon"})

    @@include("partials/head-css.html")

</head>

<body>
    <div class="home-btn d-none d-sm-block">
        <a href="index.html" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>

    <div class="my-5 pt-sm-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="index.html">
                            <img src="assets/images/logo-dark.png" alt="logo" height="24" />
                        </a>
                        <div class="row justify-content-center mt-5">
                            <div class="col-sm-4">
                                <div class="maintenance-img">
                                    <img src="assets/images/maintenance.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                        </div>
                        <h4 class="mt-5">Let's get started with Qovex</h4>
                        <p class="text-muted">It will be as simple as Occidental in fact it will be Occidental.</p>

                        <div class="row justify-content-center mt-5">
                            <div class="col-md-8">
                                <div data-countdown="2021/12/31" class="counter-number"></div>
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    @@include("partials/vendor-scripts.html")

    <script src="assets/js/app.js"></script>

    <!-- Plugins js-->
    <script src="assets/libs/jquery-countdown/jquery.countdown.min.js"></script>

    <!-- Countdown js -->
    <script src="assets/js/pages/coming-soon.init.js"></script>

</body>

</html>
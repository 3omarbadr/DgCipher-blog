<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.partials.header')

<body data-layout="detached" data-topbar="colored">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <div class="container-fluid">
        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('admin.layouts.partials.topbar')

            @include('admin.layouts.partials.sidebar')

            <div class="main-content">
                <!-- Main content -->
                <div class="page-content">
                    @yield('main')
                </div>
                @include('admin.layouts.partials.footer')
            </div>
        </div>
    </div>

    @include('admin.layouts.partials.right-sidebar')

    @include('admin.layouts.partials.vendor-scripts')

    @yield('scripts')
</body>

</html>
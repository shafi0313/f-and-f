<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard | Jidox - Material Design Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/images/favicon.ico') }}">

        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{ asset('backend/vendor/daterangepicker/daterangepicker.css') }}">

        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{ asset('backend/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">

        <!-- Theme Config Js -->
        <script src="{{ asset('backend/js/config.js') }}"></script>

        <!-- App css -->
        <link href="{{ asset('backend/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons css -->
        <link href="{{ asset('backend/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <!-- Begin page -->
        <div class="wrapper">


            <!-- ========== Topbar Start ========== -->
            @include('admin.layouts.includes.header')
            <!-- ========== Topbar End ========== -->

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.layouts.includes.navigation')
            <!-- ========== Left Sidebar End ========== -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                    <!-- container -->

                </div>
                <!-- content -->

                <!-- Footer Start -->
                @include('admin.layouts.includes.footer')
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Theme Settings -->
        @include('admin.layouts.includes.theme-settings')

        <!-- Vendor js -->
        <script src="{{ asset('backend/js/vendor.min.js') }}"></script>

        <!-- Daterangepicker js -->
        <script src="{{ asset('backend/vendor/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/daterangepicker/daterangepicker.js') }}"></script>

        <!-- Apex Charts js -->
        <script src="{{ asset('backend/vendor/apexcharts/apexcharts.min.js') }}"></script>

        <!-- Vector Map js -->
        <script src="{{ asset('backend/vendor/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}"></script>

        <!-- Dashboard App js -->
        <script src="{{ asset('backend/js/pages/demo.dashboard.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('backend/js/app.min.js') }}"></script>

    </body>
</html>

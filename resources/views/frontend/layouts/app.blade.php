<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the page title -->
    <title>LemanHouse - Real Estate HTML Template</title>
    <!-- include google roboto font cdn link -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- include the site bootstrap stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/fancybox.css') }}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- pageWrapper -->
    <div id="pageWrapper">
        <!-- pageMenuPushWrap -->
        <div class="pageMenuPushWrap pageMenuPushWrap1">
            <!-- bgBaseWrap -->
            <div class="bgBaseWrap">
                <!-- pageHeader -->
                <header id="pageHeader" class="bgWhite offsetBottom">
                    <!-- pageHeaderWrap -->
                    <div class="pageHeaderWrap">
                        <!-- headerTopBar -->
                        {{-- @include('frontend.layouts.includes.header') --}}
                        @include('frontend.layouts.includes.navigation')
                    </div>
                </header>
                <!-- main -->
                <main>
                    @yield('content')
                </main>
            </div>
            <!-- pageFooterBlock -->
            @include('frontend.layouts.includes.footer')
        </div>
        <!-- pagePopupWrap -->
        @include('frontend.layouts.includes.auth-modal')
    </div>
    <!-- include jQuery library -->
    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <!-- include bootstrap JavaScript -->
    <script src="{{ asset('frontend/js/bootstrap-slider.min.js') }}"></script>
    <!-- include custom JavaScript -->
    @include('sweetalert::alert')
    {{-- Sweet alert --}}
    <script src="{{ asset('common/plugins/sweet-alert/sweetalert-2.min.js') }}"></script>
    {{-- Cute alert --}}
    <link href="{{ asset('common/plugins/cute-alert/cute-alert.css') }}" rel="stylesheet">
    <script src="{{ asset('common/plugins/cute-alert/cute-alert.js') }}"></script>
    {{-- Select 2 --}}
    <link src="{{ asset('common/plugins/select2/css/select2.min.css') }}">
    <script src="{{ asset('common/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/init.js') }}"></script>
    <script src="{{ asset('common/js/http.js') }}"></script>
    @stack('scripts')
</body>

</html>

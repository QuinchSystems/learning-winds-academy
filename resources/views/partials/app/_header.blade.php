<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title', "Home") - {{ config('app.name', 'Laravel') }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('app-dependencies/assets/img/favicon.ico') }}" rel="icon">
    <link href="{{ asset('app-dependencies/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('app-dependencies/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-dependencies/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('app-dependencies/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-dependencies/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('app-dependencies/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('app-dependencies/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('app-dependencies/assets/css/style.css') }}?version={{ App\Constant::APP_VERSION }}" rel="stylesheet">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('app-dependencies/assets/css/custom.css') }}?version={{ App\Constant::APP_VERSION }}">
    <link rel="stylesheet" href="{{ asset('admin-dependencies/assets/css/popup.css') }}?version={{ App\Constant::APP_VERSION }}">

    {{--
    <script src="{{ asset('js/app.js') }}?version={{ App\Constant::APP_VERSION }}" defer></script>
    <link href="{{ asset('css/app.css') }}?version={{ App\Constant::APP_VERSION }}" rel="stylesheet">
    --}}

    @stack('css')
</head>

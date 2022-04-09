<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin-dependencies/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('admin-dependencies/assets/img/favicon.ico') }}">
    <title>@yield('page-title') - {{ config('app.name') }}</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('admin-dependencies/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin-dependencies/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('admin-dependencies/assets/css/material-dashboard.css?v=3.0.0') }}"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <link rel="stylesheet" href="{{ asset('admin-dependencies/assets/css/custom.css') }}?version={{ App\Constant::APP_VERSION }}">
    <link rel="stylesheet" href="{{ asset('admin-dependencies/assets/css/popup.css') }}?version={{ App\Constant::APP_VERSION }}">
    @stack('css')
    @method('head_end')
</head>

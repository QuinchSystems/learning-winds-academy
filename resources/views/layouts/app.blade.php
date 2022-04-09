<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('partials.app._header')

<body>
    @include('partials.app._topnav')

    @yield('hero')

    <main id="main">
        @yield('content')
    </main>

    @include('partials.app._footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('partials.app._scripts')
    @include('partials._flash')
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@section('title', 'User Registration')

<head>
    <meta charset="utf-8" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('admin-dependencies/assets/img/favicon.ico') }}">

    {{--
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png"> --}}

    <title>
        @yield('title') - {{ config('app.name', 'Laravel') }}
    </title>
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
    <link id="pagestyle" href="{{ asset('admin-dependencies/assets/css/material-dashboard.css') }}?v=3.0.0"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('app-dependencies/assets/css/custom.css') }}"
</head>

<body class="bg-gray-200">
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">@yield('title')</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form role="form" class="text-start" method="POST" action="{{ route('app.register') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div
                                                class="input-group input-group-outline my-3 {{ !is_null(old('first_name')) ? 'is-filled' : null }}">
                                                <label class="form-label">First Name</label>
                                                <input type="first_name" class="form-control @error('first_name') is-invalid @enderror"
                                                                    value="{{ old('first_name') }}" name="first_name" required autocomplete="first_name"
                                                                    autofocus />
                                                @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div
                                                class="input-group input-group-outline my-3 {{ !is_null(old('last_name')) ? 'is-filled' : null }}">
                                                <label class="form-label">Last Name</label>
                                                <input type="last_name" class="form-control @error('last_name') is-invalid @enderror"
                                                                    value="{{ old('last_name') }}" name="last_name" required autocomplete="last_name" />
                                                @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div
                                                class="input-group input-group-outline my-3 {{ !is_null(old('email')) ? 'is-filled' : null }}">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                                    value="{{ old('email') }}" name="email" required autocomplete="email"
                                                                    />
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div
                                                class="input-group input-group-outline my-3 {{ !is_null(old('username')) ? 'is-filled' : null }}">
                                                <label class="form-label">Username</label>
                                                <input type="username" class="form-control @error('username') is-invalid @enderror"
                                                                    value="{{ old('username') }}" name="username" required autocomplete="username"
                                                                    />
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <div class="mb-3">
                                                    <div class="input-group input-group-outline">
                                                        <label for="password-input" class="form-label">Password</label>
                                                        <input type="password"
                                                               id="password-input"
                                                               class="form-control @error('password') is-invalid @enderror"
                                                               name="password"
                                                               required
                                                               autocomplete="current-password"
                                                        />
                                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="input-group input-group-outline">
                                                        <label for="confirm-password-input" class="form-label">Confirm Password</label>
                                                        <input type="password"
                                                               id="confirm-password-input"
                                                               class="form-control @error('password_confirmation') is-invalid @enderror"
                                                               name="password_confirmation"
                                                               required autocomplete="current-password"
                                                        />

                                                        @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-12 my-2">
                                                <div class="password-validator">
                                                    <div class="must-8-chars">
                                                        <i class="fas fa-check-circle"></i>
                                                        <span>Must be at least 8 characters long.</span>
                                                    </div>
                                                    <div class="must-1-lowercase">
                                                        <i class="fas fa-check-circle"></i>
                                                        <span>Must have at least 1 lower case letter(s).</span>
                                                    </div>
                                                    <div class="must-1-uppercase">
                                                        <i class="fas fa-check-circle"></i>
                                                        <span>Must have at least 1 upper case letter(s).</span>
                                                    </div>
                                                    <div class="must-1-specialchar">
                                                        <i class="fas fa-check-circle"></i>
                                                        <span>Must have at least 1 special character(s)</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
                                            <span>Sign me Up!</span>
                                        </button>
                                    </div>
                                </form>
                                <div class="row my-3">
                                    <div class="col-12 text-center">
                                        <p class="text-muted">
                                            <span>Already have an account?</span>
                                            <a href="{{ route('app.login') }}">Login</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--   Core JS Files   -->
    <script src="{{ asset('admin-dependencies/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin-dependencies/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin-dependencies/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin-dependencies/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('admin-dependencies/assets/js/material-dashboard.min.js') }}?v=3.0.0"></script>
    <script src="{{ asset('app-dependencies/assets/js/register.js') }}"></script>
</body>

</html>

<header id="header" class="fixed-top {{ Route::currentRouteName() === 'welcome' ? '' : 'header-inner-pages' }}">
    <div class="container d-flex align-items-center justify-content-between">

        <h1 class="logo fs-6"><a href="{{ url('/') }}">{{ config('app.name') }}</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                <li class="dropdown">
                    <a href="#">
                        <span>Courses</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        @foreach ($categoryMenu as $category)
                        <li><a href="{{ route('category', ['category' => $category->id]) }}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#">Certification</a></li>
                <li><a class="nav-link scrollto" href="{{ url('/#faq') }}">FAQs</a></li>
                <li><a class="nav-link scrollto " href="{{ route('about') }}">About Us</a></li>
                <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
                @if (auth('app_users')->check())
                    <li class="dropdown">
                        <a href="#">
                            <span>{{ auth('app_users')->user()->username }}</span>
                            <i class="bi bi-chevron-down"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{ route('app.profile') }}">Profile</a>
                            </li>
                            <li>
                                <a class="nav-link scrollto"
                                    href="javascript:;"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                >Logout</a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('app.logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @else
                <li><a class="nav-link scrollto" href="{{ route('app.login') }}">Login</a></li>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="{{ url('/') }}">
            <span class="ms-1 font-weight-bold text-white">{{ config('app.name') }}</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div style="height: auto;" class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white {{ str_contains(Route::currentRouteName(), 'admin.dashboard') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('admin.dashboard') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ str_contains(Route::currentRouteName(), 'admin.categories') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('admin.categories.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">category</i>
                    </div>
                    <span class="nav-link-text ms-1">Categories</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ str_contains(Route::currentRouteName(), 'admin.courses') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('admin.courses.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">book</i>
                    </div>
                    <span class="nav-link-text ms-1">Courses</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ str_contains(Route::currentRouteName(), 'admin.users') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('admin.users.index') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">face</i>
                    </div>
                    <span class="nav-link-text ms-1">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white {{ str_contains(Route::currentRouteName(), 'admin.settings') ? 'active bg-gradient-success' : '' }}"
                    href="{{ route('admin.settings') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">settings</i>
                    </div>
                    <span class="nav-link-text ms-1">Settings</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="javascript:;"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">logout</i>
                    </div>
                    <span class="nav-link-text ms-1">Logout</span>
                </a>
                <form method="POST" id="logout-form" action="{{ route('admin.logout') }}">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</aside>

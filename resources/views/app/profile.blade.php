@extends('layouts.app')

@section('title', "Profile Section")

@section('hero')
<section id="breadcrumbs" class="breadcrumbs">
	<div class="container">
		<ol>
			<li><a href="{{ route('welcome') }}">Home</a></li>
			<li>@yield('title')</li>
		</ol>
		<h2>@yield('title')</h2>
	</div>
</section>
@endsection

@section('content')

    <section class="profile">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Hello, {{ $user->full_name }}</h1>
                    <hr class="my-3" />
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4>Assigned courses</h4>
                    @if ($user->courses->count() > 0)
                        <div class="row">
                            @foreach ($user->courses as $course)
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card shadow">
                                    <div class="bg-image hover-overlay ripple">
                                        <img class="img-fluid" src="{{ asset('app-dependencies/assets/img/hero-bg.jpg') }}" alt="Leadership and career">
                                    </div>
                                    <div class="card-body my-4">
                                        <h5 class="card-title">
                                            {{ $course->display_name }}
                                        </h5>
                                        <a href="https://app.learningwindsacademy.com/login/index.php?username={{ $user->username }}"
                                            class="btn btn-outline-danger"
                                        >
                                            <i class="fas fa-sign-in"></i>
                                            Login to Course
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <p>Please visit <a href="https://app.learningwindsacademy.com/" target="_blank" rel="nofollow">this link</a> and login to access the course</p>
                            </div>
                        </div>
                    @else
                        <p>No courses assigned</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

@endsection

@push('js')
@endpush

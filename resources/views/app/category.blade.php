@extends('layouts.app')

@section('title', $category->name)

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

<section id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 entries">
                <div class="row">
                    @forelse ($category->courses as $course)
                    <article class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card shadow">
                            <img src="{{ asset('app-dependencies/assets/img/cta-bg.jpg') }}"
                                alt="{{ $course->display_name }}" class="card-img-top">
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="{{ route('course', $course->id) }}">{!! $course->display_name !!}</a>
                                </h3>
                                @if ($course->instructor_name)
                                <p class="card-text"><em>Instructor: </em>{{ $course->instructor_name }}</p>
                                @endif
                                <p class="card-text"><strong>Price: {{ $course->price . " " . $course->currency_code
                                        }}</strong></p>
                                <p class="card-text">
                                    {!! Str::limit(strip_tags($course->summary), \App\Constant::EXCERPT_LENGTH) !!}
                                </p>
                                <div class="read-more row">
                                    <div class="col-md-6">
                                        <a class="btn btn-primary" href="{{ route('course', $course->id) }}">Read
                                            More</a>
                                    </div>
                                    <div class="col-md-6 text-end">
                                        @if (auth('app_users')->check())
                                        @if(auth('app_users')->user()->courses->contains($course))
                                        <a
                                            href="https://app.learningwindsacademy.com/login/index.php?username={{ auth('app_users')->user()->username }}">
                                            Login
                                        </a>
                                        @else
                                        <button data-course-id="{{ $course->id }}"
                                            class="course-purchase-button btn btn-success">
                                            <i class="fas fa-cart-plus me-1 text-white"></i>
                                            <span>Purchase</span>
                                        </button>
                                        @endif
                                        @else
                                        <a href="{{ route('course', $course->id) }}" class="btn btn-success text-white">
                                            Buy
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>

                    <div id="course-purchase-modal" class="modal fade" tabindex="-1"
                        aria-labelledby="purchase-modal-form-label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="purchase-modal-form-label">Purchase</h5>
                                </div>
                                <div class="modal-body"></div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>No courses found.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')
<script src="{{ asset('app-dependencies/assets/js/category.js') }}"></script>
@endpush

@extends('layouts.app')

@section('title', "Course Details")

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

                <article class="card shadow">

                    {{-- TODO Delete if needed --}}
                    {{--
                    <div class="entry-img">
                        <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>
                    --}}

                    {{-- TODO Delete if needed --}}
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="{{ route('course', $course->id) }}">{!! $course->display_name !!}</a>
                        </h4>
                        {{-- <ul class="ps-0 ms-0">
                            <li class="d-flex align-items-center"><i class="bi bi-clock me-2"></i> <time
                                    datetime="{{ Carbon\Carbon::parse($course->m_created_at)->format('Y-m-d') }}">{{
                                    Carbon\Carbon::parse($course->m_created_at)->format('jS M,
                                    y h:i A') }}</time></li>
                        </ul> --}}

                        <div class="card-text">
                            <div>
                                {!! $course->summary !!}
                            </div>
                            @if ($course->instructor_name && $course->about_instructor)
                            <hr>
                            <div class="row mt-3 justify-content-center">
                                <div class="{{ $course->instructor_image ? 'col-md-9' : 'col-md-12' }}">
                                    <h4>About Instructor</h4>
                                    <h5 class="fw-bold">{{ $course->instructor_name }}</h5>
                                    <p>{!! $course->about_instructor_html !!}</p>
                                </div>
                                @if ($course->instructor_image)
                                <div class="col-md-3 text-end">
                                    <img src="{{ asset('media/' . $course->instructor_image) }}"
                                        alt="{{ $course->instructor_name }}" class="img-fluid">
                                </div>
                                @endif
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-lg-6">
                                <div>Price: <strong>{{ $course->price }}</strong> <strong>{{ $course->currency_code
                                        }}</strong></div>
                                <div>Category: <a href="{{ route('category', $course->category->id) }}">{{
                                        $course->category->name }}</a> </div>
                            </div>
                            <div class="col-lg-6 text-end">
                                @if (auth('app_users')->check())
                                @if(auth('app_users')->user()->courses->contains($course))
                                <span class="text-success">Already purchased</span>
                                @else
                                <button class="course-purchase-button btn btn-success">
                                    <i class="fas fa-cart-plus me-1 text-white"></i>
                                    <span>Purchase</span>
                                </button>
                                @endif
                                @else
                                <a href="{{ route('app.login') }}" class="btn btn-success text-white">
                                    <i class="fas fa-sign-in-alt text-white"></i>
                                    Login to purchase
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </article>

                </article><!-- End blog entry -->

                <div id="course-purchase-modal" class="modal fade" tabindex="-1"
                    aria-labelledby="purchase-modal-form-label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="purchase-modal-form-label">Purchase</h5>
                            </div>
                            <div class="modal-body">
                                <p class="lead fs-6">
                                    <span>Course:</span>
                                    <strong>{{ $course->display_name }}</strong>
                                </p>
                                <p class="lead fs-6">
                                    <span>Category:</span>
                                    <strong>{{ $course->category->name }}</strong>
                                </p>
                                <p class="lead fs-6">
                                    <span>Price:</span>
                                    <strong>{{ $course->price }} {{ $course->currency_code }}</strong>
                                </p>
                                <form id="purchase-course-form" method="post"
                                    action="{{ route('app.payment', ['course' => $course->id]) }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 text-end">
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="phone" class="form-control"
                                                        id="floatingInput"
                                                        placeholder="Enter 10 digit valid phone number"
                                                        value="{{ old('phone') }}">
                                                    <label for="floatingInput">Enter 10 digit valid Phone number</label>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" id="course-purchase-continue-button" type="button"
                                                class="btn btn-primary">Continue</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('js')
<script src="{{ asset('app-dependencies/assets/js/course.js') }}"></script>
@endpush

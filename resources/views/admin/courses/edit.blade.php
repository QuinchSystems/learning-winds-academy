@extends('layouts.admin')

@section('page-title', 'Edit Course')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-white text-capitalize ps-3 my-0">Edit Course</h6>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route('admin.courses.index') }}"
                                class="fetch-courses-btn btn btn-sm bg-gradient-danger mb-0 me-3">
                                <i class="fa fa-sign-out" style="font-size: 0.8rem"></i>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form role="form" method="POST" action="{{ route('admin.courses.update', ['course' => $course->id]) }}"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="course-id-input">Course Id</label>
                                <input type="text" id="course-id-input" class="form-control"
                                    value="{{ old('course_id', $course->course_id) }}" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="category-id-input">Category Id</label>
                                <input type="text" id="category-id-input" class="form-control"
                                    value="{{ old('category_id', $course->category_id) }}" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="short-name-input">Short name</label>
                                <input type="text" id="short-name-input" class="form-control"
                                    value="{{ old('short_name', $course->short_name) }}" disabled>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="id-number-input">Manual ID</label>
                                <input type="text" id="id-number-input" class="form-control"
                                    value="{{ old('id_number', $course->id_number) }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="full-name-input">Full name</label>
                                <input type="text" id="full-name-input" class="form-control"
                                    value="{{ old('full_name', $course->full_name) }}" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="display-name-input">Display name</label>
                                <input type="text" id="display-name-input" class="form-control"
                                    value="{{ old('display_name', $course->display_name) }}" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="price-input">Price</label>
                                <input type="number" name="price" id="price-input"
                                    class="form-control @error('price') is-invalid @enderror"
                                    value="{{ old('price', $course->price) }}" autofocus>
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label class="form-label" for="currency-code-input">Currency Code</label>
                                <input type="text" id="currency-code-input" class="form-control"
                                    value="{{ old('currency_code', $course->currency_code) }}" disabled>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label" for="summary-input">Summary</label>
                                <textarea id="summary-input" class="form-control"
                                    disabled>{{ old('summary', $course->summary) }}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="instructor-name-input">Instructor name</label>
                                <input type="text" name="instructor_name" id="instructor-name-input"
                                    class="form-control"
                                    value="{{ old('instructor_name', $course->instructor_name) }}" />

                                @error('instructor_name')
                                <div class="text-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 col-12">
                            <div class="d-md-flex">
                                <div class="instructor-image-wrap">
                                    <label for="instructor-image-input" class="form-label">Instructor image</label>
                                    <input class="form-control ps-2 @error('about_instructor') is-invalid @enderror"
                                        type="file" name="instructor_image" id="instructor-image-input" />

                                    @error('instructor_image')
                                    <div class="text-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    <p class="form-text">Supported formats: jpeg, png, jpg, gif, svg</p>
                                </div>
                                <div class="instructor-preview-image-wrap text-center">
                                    @if ($course->instructor_image)
                                    <img src="{{ asset('media/' . $course->instructor_image) }}" alt="instructor image"
                                        class="img-fluid" />
                                    @else
                                    <img src="{{ asset('admin-dependencies/assets/img/blank-profile-picture.svg') }}"
                                        alt="instructor image" class="img-fluid" />
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="about-instructor-input">About instructor</label>
                                <textarea class="form-control ps-2 @error('about_instructor') is-invalid @enderror"
                                    style="height: auto;" name="about_instructor" placeholder="Leave a comment here"
                                    id="about-instructor-input"
                                    rows="5">{{ old('about_instructor', $course->about_instructor) }}</textarea>
                            </div>
                            @error('about_instructor')
                            <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <button type="submit" class="btn btn-btn btn-lg bg-gradient-primary btn-lg mt-4 mb-0">
                                    <div class="fa fa-save"></div>
                                    <span>Update</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

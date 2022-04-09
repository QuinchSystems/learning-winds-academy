@extends('layouts.admin')

@section('page-title', 'All Courses')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-white shadow-white border-radius-lg pt-4 pb-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-capitalize ps-3 my-0">@yield('page-title')</h6>
                        </div>
                        <div class="col text-end">
                            <button type="button"
                                class="fetch-courses-btn btn btn-sm bg-gradient-success mb-0 me-3">
                                <i class="fas fa-download fs-6 me-1"></i>
                                <span class="d-none d-md-inline-block">Fetch Courses</span>
                            </button>
                            <button type="button" class="clean-up-courses-btn btn btn-sm bg-gradient-primary mb-0 me-3">
                                <i class="fas fa-trash fs-6 me-1"></i>
                                <span class="d-none d-md-inline-block">Clean Up Courses</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 pb-2">
                <div class="table-responsive p-0">
                    <table id="courses-table" class="table table-striped">
                        <thead class="text-primary">
                            <tr>
                                <th>Full name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Currency Code</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($courses as $course)
                            <tr>
                                <td>{{ $course->full_name }}</td>
                                <td>
                                    <a href="{{ route('admin.categories.show', $course->category->id) }}">
                                        {{ $course->category->name }}
                                    </a>
                                </td>
                                <td>{{ $course->price }}</td>
                                <td>{{ $course->currency_code }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.courses.edit', ['course' => $course->id]) }}"
                                        class="text-secondary font-weight-bold" title="Edit Course">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center">No records</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('admin-dependencies/assets/js/pages/course.js') }}?version={{ App\Constant::APP_VERSION }}">
</script>
@endpush

@extends('layouts.admin')

@section('page-title', 'All Categories')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-white text-capitalize ps-3 my-0">@yield('page-title')</h6>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route('admin.dashboard') }}"
                                class="fetch-courses-btn btn btn-sm bg-gradient-success mb-0 toast-btn me-3">
                                <i class="fa fa-sign-out fs-6"></i>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table id="courses-table" class="table align-items-center mb-0">
                        <thead class="text-primary">
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Name
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Course Count
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <a href="{{ route('admin.categories.show', $category->id) }}">
                                            {!! $category->name !!}
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex px-2 py-1">{{ $category->coursecount }}</div>
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
@endpush

@extends('layouts.admin')

@section('page-title', $category->name)

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
                            <a href="{{ route('admin.categories.index') }}"
                                class="fetch-courses-btn btn btn-sm bg-gradient-success mb-0 toast-btn me-3">
                                <i class="fa fa-sign-out fs-6"></i>
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 pb-2">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto border">
                        <div class="row border-bottom">
                            <div class="col-6 border-end">ID</div>
                            <div class="col-6">{{ $category->id }}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Moodle Category ID</div>
                            <div class="col-6">{{ $category->m_category_id }}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Manual ID</div>
                            <div class="col-6">{{ $category->idnumber }}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Description</div>
                            <div class="col-6">{!! $category->description !!}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Description Format</div>
                            <div class="col-6">{{ $category->descriptionformat }}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Parent Category</div>
                            <div class="col-6">{{ $category->parent ? $category->parent->name : "Top" }}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Sort Order</div>
                            <div class="col-6">{{ $category->sortorder }}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Course Count</div>
                            <div class="col-6">{{ $category->coursecount }}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Visible</div>
                            <div class="col-6">{{ $category->visible }}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Old Visible</div>
                            <div class="col-6">{{ $category->visibleold }}</div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-6 border-end">Modified on</div>
                            <div class="col-6">{{ Carbon\Carbon::parse($category->timemodified)->format('jS M, y h:i A')
                                }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush

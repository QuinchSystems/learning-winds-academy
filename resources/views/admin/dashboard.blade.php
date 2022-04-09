@extends('layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div
                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">book</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Total Courses</p>
                    <h4 class="mb-0">{{ $coursesCount }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div
                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Total Students</p>
                    <h4 class="mb-0">{{ $usersCount }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div
                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">category</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Total Categories</p>
                    <h4 class="mb-0">{{ $categoriesCount }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div
                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">balance-wallet</i>
                </div>
                <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Total Sales</p>
                    <h4 class="mb-0"><i class="fa fa-inr"></i> {{ $totalSales }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row my-4">
    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-body">
                <h4>Sales</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div>Daily:</div>
                    <div><i class="fa fa-inr"></i> {{ number_format($revenue['daily'], 2) }}</div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <div>Weekly:</div>
                    <div><i class="fa fa-inr"></i> {{ number_format($revenue['weekly'], 2) }}</div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <div>Monthly:</div>
                    <div><i class="fa fa-inr"></i> {{ number_format($revenue['monthly'], 2) }}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-4 mt-lg-0">
        <div class="card shadow">
            <div class="card-body">
                <h4>Course Purchases</h4>
                <div class="d-flex justify-content-between align-items-center">
                    <div>Daily:</div>
                    <div>{{ $coursePurchases['daily']}}</div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <div>Weekly:</div>
                    <div>{{ $coursePurchases['weekly']}}</div>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-items-center">
                    <div>Monthly:</div>
                    <div>{{ $coursePurchases['monthly']}}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row my-4">
    <div class="col-lg-12">
        <div class="card shadow">
            <div class="card-header bg-gray-100">
                <h4 class="card-title">Students vs Courses</h4>
            </div>
            <div class="card-body px-2">
                <div class="chart-container">
                    <canvas id="course-vs-student-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row my-4">
    <div class="col-lg-12">
        <div class="card shadow">
            <div class="card-header bg-gray-100">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="card-title">Daily/Weekly/Monthly Sales</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex justify-content-end">
                            <div class="dropdown sales-filter-dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="salesFilter" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-filter"></i>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="salesFilter">
                                    <li><a class="dropdown-item" data-sales-filter="daily" href="javascript:;">Daily</a></li>
                                    <li><a class="dropdown-item" data-sales-filter="weekly" href="javascript:;">Weekly</a></li>
                                    <li><a class="dropdown-item" data-sales-filter="monthly" href="javascript:;">Monthly</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-2">
                <div class="chart-container">
                    <canvas id="sales-line-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    const STUDENT_COURSE_CHART_DATA = @json($courseVsStudentChartData);
</script>
<script src="{{ asset('admin-dependencies/assets/js/plugins/chartjs.min.js') }}"></script>
<script src="{{ asset('admin-dependencies/assets/js/pages/dashboard.js') }}"></script>
@endpush

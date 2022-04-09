@extends('layouts.admin')

@section('page-title', 'All App Users')

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
                                class="fetch-users-btn btn btn-sm bg-gradient-success mb-0 me-3">
                                <i class="fas fa-download fs-6 me-1"></i>
                                <span class="d-none d-md-inline-block">Fetch Users</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body px-4 pb-2">
                <div class="table-responsive">
                    <table id="courses-table" class="table table-striped">
                        <thead class="text-primary">
                            <tr>
                                <th>
                                    Username
                                </th>
                                <th>
                                    First Name
                                </th>
                                <th>
                                    Last Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th class="text-center">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                            <tr>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">Action</td>
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
<script src="{{ asset('admin-dependencies/assets/js/pages/app-user.js') }}?version={{ App\Constant::APP_VERSION }}">
</script>
@endpush

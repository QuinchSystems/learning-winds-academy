@extends('layouts.admin')

@section('page-title', 'Settings')

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 col-sm-12 col-12 mx-auto">
        <div class="card">
            <div class="card-header p-3 pt-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <div class="row">
                        <div class="col">
                            <h6 class="text-white text-capitalize ps-3 my-0">
                                <i class="fa fa-cog me-1"></i>
                                <span>Settings</span>
                            </h6>
                        </div>
                        <div class="col text-end">
                            <a href="{{ route('admin.dashboard') }}"
                                class="fetch-courses-btn btn btn-sm bg-gradient-success mb-0 toast-btn me-3">
                                <i class="fa fa-sign-out me-1" style="font-size: 1rem;"></i>
                                <span>Back</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.change-password') }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <div>
                                    <label for="current-password-input" class="control-label me-2">
                                        Current Password
                                    </label>
                                    <div class="pretty p-switch p-fill">
                                        <input type="checkbox" id="changne-password-handle" />
                                        <div class="state">
                                            <label class="ms-1">Show Password </label>
                                        </div>
                                    </div>
                                </div>

                                <input type="password" name="current_password" id="current-password-input"
                                    class="border border-1 form-control px-2 password-input @error('current_password') is-invalid @enderror"
                                    placeholder="Current Password" value="{{ old('current_password') }}">

                                @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="password-input" class="control-label">Current Password</label>
                                <input type="password" name="password" id="password-input"
                                    class="border border-1 form-control px-2 password-input @error('password') is-invalid @enderror"
                                    placeholder="Password" value="{{ old('password') }}">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="confirm-password-input" class="control-label">Password Confirmation</label>
                                <input type="password" name="password_confirmation" id="confirm-password-input"
                                    class="border border-1 form-control px-2 password-input"
                                    placeholder="Password Confirmation" value="{{ old('password_confirmation') }}">
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn bg-gradient-primary my-4 mb-2">
                                <i class="fa fa-lock me-2"></i>
                                <span>Change Password</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('admin-dependencies/assets/js/pages/settings.js') }}"></script>
@endpush

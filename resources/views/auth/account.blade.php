@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <h5 class="header-title mt-0 mb-1">My Account</h4>
                        </div>
                    </div>
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <form action="{{ route('account.update') }}" method="post" id="update-account">
                        @csrf
                        <fieldset>
                            <legend>Account Information</legend>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="form-control-label">Full Name</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="uil uil-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter your fullaname" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="form-control-label">Username</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="uil uil-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" value="{{ Auth::user()->username }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="form-control-label">Email</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="uil uil-user"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" name="email" id="email" placeholder="Enter your email" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-flex justify-content-end">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-sm btn-rounded update-account" type="button">Update Account</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('account.update') }}" method="post" id="update-password">
                        @csrf
                        <fieldset>
                            <legend>Update Password</legend>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="form-control-label">Password Lama</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="uil uil-user"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" name="password_lama" id="password_lama" placeholder="Please insert password lama" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="form-control-label">Password Baru</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="uil uil-user"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" name="password_baru" id="password_baru" placeholder="Please insert password baru" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label class="form-control-label">Konfirmasi Password</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="uil uil-user"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control" name="konfirmasi_password" id="konfirmasi_password" placeholder="Please insert konfirmasi password" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group d-flex justify-content-end">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-sm btn-rounded update-password" type="button">Update Password</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('body').on('click', '.update-account', function(e) {
            Swal.fire({
                title: 'Are you sure update account ?',
                // text: 'Your procurement are send to contract!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    e.preventDefault()
                    $("#update-account").submit();
                }
            })
        })

        $('body').on('click', '.update-password', function(e) {
            Swal.fire({
                title: 'Are you sure update password ?',
                // text: 'Your procurement are send to contract!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.value) {
                    e.preventDefault()
                    $("#update-password").submit();
                }
            })
        })
    })
</script>
@endpush
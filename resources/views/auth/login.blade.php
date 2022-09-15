<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login C-LOG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo-kai-icon.png') }}">

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        body.authentication-bg {
            background: url("assets/images-new/C-Log Login Background Rev 2.png");
            background-size: cover;
            background-repeat: no-repeat;
            /* background-size: 100% 100%; */
        }
    </style>
</head>

<body class="authentication-bg">
    <div class="container">
    <div class="row pt-5">
    </div>
    <div class="row pt-5">
    </div>
    <div class="row pt-3">
        <div class="col-xl-7">
        </div>
        <div class="col-xl-5">
            <div class="col-md-12">
                <div class="card-body">
                    <div class="card">
                        <div class="row pt-3">
                            <div class="col-md-12">
                                <div class="mx-auto p-3 d-flex justify-content-center">
                                    <a href="index.html">
                                        <img src="{{ asset('assets/images/c-log.png') }}" />
                                        <h3 class="d-inline align-middle ml-1 text-logo"></h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12 p-3 d-flex justify-content-center"">
                                <h6 class=" h5 mb-0 mt-4">Welcome Back !</h6>
                                <p class="text-muted mt-1 mb-4"></p>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('process.login') }}" class="authentication-form p-3" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Username</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="uil uil-user"></i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" required>
                                        </div>
                                    </div>

                                    <div class="form-group mt-4">
                                        <label class="form-control-label">Password</label>
                                        <div class="input-group input-group-merge">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="uil uil-lock"></i>
                                                </span>
                                            </div>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember
                                                me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block btn-rounded" type="submit"> Log In
                                        </button>
                                    </div>     
                                    <br>
                                    <!-- <div class="col-xl-6">
                                    <img src="{{ asset('assets/images/applestore.png') }}" alt="" width="100" />   
                                    </div>
                                    <div class="col-xl-6">
                                    <img src="{{ asset('assets/images/googleplay.png') }}" alt="" width="55" />
                                    </div>                        -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
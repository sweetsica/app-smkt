<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Login | SMKT - Admin & Dashboard Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="SMKT | Admin & Dashboard Template" name="description" />
    <meta content="Sweetsica" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">



    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">

    <div class="accountbg"></div>
    <div class="home-btn d-none d-sm-block text-white">
        <a href="{{route('index')}}" class="text-white"><i class="fas fa-home h2"></i></a>
    </div>
    <div class="wrapper-page">
        <div class="card card-pages shadow-none">

            <div class="card-body">
                <div class="text-center m-t-0 m-b-15">
                    <a href="{{route('index')}}" class="logo logo-admin"><img src="assets/images/logo-dark.png" alt="" height="24"></a>
                </div>
                <h5 class="font-18 text-center">Sign in to continue to Stexo.</h5>

                <form class="form-horizontal m-t-30" action="{{route('index')}}">

                    <div class="form-group mb-3">
                        <div class="col-12">
                            <label>Username</label>
                            <input class="form-control" type="text" required="" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="col-12">
                            <label>Password</label>
                            <input class="form-control" type="password" required="" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="col-12">
                            <div class="checkbox checkbox-primary">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1"> Remember me</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3 text-center mt-3">
                        <div class="col-12">
                            <button class="btn btn-primary w-100 btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                        </div>
                    </div>

                    <div class="form-group mb-3 row mt-4 mb-0">
                        <div class="col-sm-7">
                            <a href="pages-recoverpw.html" class="text-muted"><i class="fa fa-lock me-2"></i> Forgot your password?</a>
                        </div>
                        <div class="col-sm-5 text-end">
                            <a href="pages-register.html" class="text-muted">Create an account</a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('admin/assets/libs/jquery-countdown/jquery.countdown.min.js')}}"></script>

    <!-- Countdown js -->
    <script src="{{asset('admin/assets/js/pages/coming-soon.init.js')}}"></script>

    <script src="{{asset('admin/assets/js/app.js')}}"></script>

</body>

</html>

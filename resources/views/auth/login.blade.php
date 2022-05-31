<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Digicon CRM Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="icon" type="images" href="{{ asset('digicon_login/Digicon_Logo.jpeg') }}">
    <!-- App css -->
    <link href="{{ asset('digicon_login/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('digicon_login/assets/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('digicon_login/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('digicon_login/assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('digicon_login/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Responsive CSS -->
    <link href="{{ asset('digicon_login/assets/css/responsive.css') }}" rel="stylesheet">
    <!--Font Awesome JS -->
    <script src="{{ asset('digicon_login/assets/js/fontawesomelogin.js') }}"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #05A452 !important;
        }

        .login-button {
            background-color: #05A452;
        }

        .login-button p {
            font-family: 'Poppins', sans-serif;
            margin: 5px;
            color: white;
            background-color: #05A452;
        }

    </style>
</head>

<body class="account-body ">
    <!-- Log In page -->
    <div class="container">
        <div class="row">
            <div class="col-12 align-self-center">
                <div class="auth-page">
                    <div class="auth-card card shadow-lg">
                        <div class="card-body">
                            <div class="px-3">
                                <div class="text-center">
                                    <a href="" class="logo logo-admin">
                                        <img src="{{ asset('digicon_login/Digicon_Logo.jpeg') }}" width="20%"
                                            alt="logo" class="auth-logo"></a>
                                </div>
                                <!--end auth-logo-box-->
                                <div class="text-center auth-logo-text">
                                    <h4 class="mt-0 mb-3 mt-4">Digicon CRM</h4>
                                    <h5 class="mb-2 mt-2">Sign In</h5>
                                </div>
                                <!--end auth-logo-text-->
                                <form method="POST" class="form-horizontal auth-form my-4"
                                    action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="email"><b>User ID</b></label>
                                        <input id="email" type="text" class="form-control" name="email" value=""
                                            required autofocus placeholder="Enter User ID">
                                        <span class="text-danger">
                                            @error('email')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="password"><b>Password</b>
                                            <!-- <a href="{{ route('password.request') }}" class="float-right">
                                                Forgot Password?
                                            </a> -->
                                        </label>
                                        <input id="password" type="password" class="form-control" name="password"
                                            required data-eye placeholder="Enter Password">
                                        <span class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" name="remember" id="remember"
                                                class="custom-control-input">
                                            <label for="remember" class="custom-control-label">Remeber Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group m-0">
                                        <button type="submit" class="btn btn-success btn-block">
                                            Login
                                        </button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        Don't have an account? <a href="{{ route('register') }}">Register</a>
                                    </div>
                                </form>
                                <!--end form-->
                            </div>
                            <!--end /div-->
                        </div>
                        <!--end card-body-->
                    </div>
                    <!--end card-->

                </div>
                <!--end auth-page-->
            </div>
            <!--end col-->
        </div>
        <!--end row-->
    </div>
    <!--end container-->
    <!-- End Log In page -->
    <!-- jQuery  -->
    <script src="{{ asset('digicon_login/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('digicon_login/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('digicon_login/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('digicon_login/assets/js/metismenu.min.js') }}"></script>
    <script src="{{ asset('digicon_login/assets/js/waves.js') }}"></script>
    <script src="{{ asset('digicon_login/assets/js/feather.min.js') }}"></script>
    <script src="{{ asset('digicon_login/assets/js/jquery.slimscroll.min.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('digicon_login/assets/js/app.js') }}"></script>
</body>

</html>

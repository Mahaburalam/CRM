<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('digicon_login/bootstrap-3.1.1/css/bootstrap.min.css') }}">
</head>

<body>

    <div class="container">
        <div class="row" style="margin-top:45px">
            <div class="col-md-4 col-md-offset-4">
                <h4>Digicon CRM Register | Custom </h4>
                <hr>
                <form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('register') }}">

                    @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if (Session::get('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="email">User ID</label>
                        <input id="email" type="text" class="form-control" name="email" placeholder="Enter User ID" value="{{ old('email') }}">
                        <span class="text-danger">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Enter name" value="{{ old('name') }}">
                        <span class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="name">User Role</label>
                        <div class="controls">
                            <select name="role" class="form-control inputstyle" required="true" aria-invalid="false">

                                <option value="" selected="" disabled="">Select User Role</option>
                                <option value="1">Admin</option>
                                <option value="2">Agent</option>

                            </select>
                        </div>
                        <!-- <input id="name" type="text" class="form-control" name="name" autofocus
        placeholder="Enter Name" value="{{ old('name') }}"> -->
                        <span class="text-danger">
                            @error('role')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password" data-eye placeholder="Enter Password">
                        <span class="text-danger">
                            @error('password')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirm Password</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required data-eye placeholder="Enter confirm password">
                        <span class="text-danger">
                            @error('password_confirmation')
                            {{ $message }}
                            @enderror
                        </span>

                    </div>
                    <div class="form-group">
                        <div class="custom-checkbox custom-control">
                            <input type="checkbox" name="agree" id="agree" class="custom-control-input">
                            <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and
                                    Conditions</a></label>
                            <div class="invalid-feedback">
                                You must agree with our Terms and Conditions
                            </div>
                        </div>
                    </div>

                    <div class="form-group m-0">
                        <button type="submit" class="btn btn-primary btn-block">
                            Register
                        </button>
                    </div>
                    <div class="mt-4 text-center">
                        Already have an account? <a href="{{ route('login') }}">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
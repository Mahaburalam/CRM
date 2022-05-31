@extends('admin.master')
@section('admin')
<style>
    .inputstyle {

        border-color: #808B96;
    }
</style>

<!-- Start right Content here -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div>
            <div class="container-fluid">

                <div class="row">
                    <!-- Basic example -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 m-b-30" style="color: black;">Add User</h4>
                                <form method="POST" class="my-login-validation" autocomplete="off" action="{{ route('store_user.view') }}">

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
                                        <label for="email"><b>User ID</b><span style="color: red;"> *</span></label>
                                        <input id="email" type="text" class="form-control inputstyle" name="email" placeholder="Enter User ID" value="{{ old('email') }}">
                                        <span class="text-danger">
                                            @error('email')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="name"><b>User Name</b><span style="color: red;"> *</span></label>
                                        <input id="name" type="text" class="form-control inputstyle" name="name" autofocus placeholder="Enter Name" value="{{ old('name') }}">
                                        <span class="text-danger">
                                            @error('name')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <div class="form-group">
                                        <label for="name"><b>User Role</b><span style="color: red;"> *</span></label>
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
                                        <label for="password"><b>Password</b><span style="color: red;"> *</span></label>
                                        <input id="password" type="password" class="form-control inputstyle" name="password" data-eye placeholder="Enter Password">
                                        <span class="text-danger">
                                            @error('password')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="password-confirm">Confirm Password</label>
                                        <input id="password-confirm" type="password" class="form-control inputstyle" name="password_confirmation" required data-eye placeholder="Enter confirm password">
                                        <span class="text-danger">
                                            @error('password_confirmation')
                                            {{ $message }}
                                            @enderror
                                        </span>

                                    </div> -->

<!-- 
                                    <div class="form-group">
                                        <div class="custom-checkbox custom-control">
                                            <input type="checkbox" name="agree" id="agree" class="custom-control-input">
                                            <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and
                                                    Conditions</a></label>
                                            <div class="invalid-feedback">
                                                You must agree with our Terms and Conditions
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="form-group m-0">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                            Submit
                                        </button>
                                    </div>
                                    <!-- <div class="mt-4 text-center">
    Already have an account? <a href="{{ route('login') }}">Login</a>
</div>  -->
                                </form>
                            </div><!-- card-body -->
                        </div><!-- card -->
                    </div><!-- col-->
                </div><!-- end row -->
            </div><!-- container -->
        </div><!-- Page content Wrapper -->
    </div><!-- content -->
</div><!-- End Right content here -->

@endsection
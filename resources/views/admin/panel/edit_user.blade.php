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

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0 m-b-30" style="color: black;">User Update</h4>
                                <form method="post" action="{{route('update_user_details.view',$editData->id)}}">
                                    @csrf
                                    <div class="form-group"><label for="email"><b>User ID</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="email" class="form-control inputstyle" id="email" value="{{$editData->email}}" required>
                                    </div>
                                    <div class="form-group"><label for="name"><b>User Name</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="name" class="form-control inputstyle" id="name" value="{{$editData->name}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"><b>User Role</b><span style="color: red;"> *</span></label>
                                        <div class="controls">
                                            <select name="role" class="form-control inputstyle" required="true" aria-invalid="false" value="{{$editData->role}}" required>

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
                                    <!-- <div class="form-group"><label for="updated_by"><b>Updated By</b></label>

                                        <input type="text" name="updated_by" class="form-control inputstyle" id="updated_by" value="{{$editData->updated_by}}" readonly required>
                                    </div> -->
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
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
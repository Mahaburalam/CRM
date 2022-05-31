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
                                <h4 class="m-t-0 m-b-30" style="color: black;">Add Department</h4>
                                <form method="POST" action="{{route('store_department.view')}}">
                                    @csrf
                                    <div class="form-group"><label for="dept_name"><b>Department Name</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="dept_name" class="form-control inputstyle" id="dept_name">
                                        <span style="color: red;">@error('dept_name'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group"><label for="dept_head"><b>Department Head</b><span style="color: red;"> *</span></label>

                                        <input type="text" name="dept_head" class="form-control inputstyle" id="dept_name">
                                        <span style="color: red;">@error('dept_head'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group"><label for="updated_by"><b>Updated By</b><span style="color: red;"> *</span></label>

                                        <input type="text" name="updated_by" class="form-control inputstyle" id="updated_by" value="{{Auth::user()->name}}" readonly>
                                        <span style="color: red;">@error('updated_by'){{$message}}@enderror</span>
                                    </div>

                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
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
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
                                <h4 class="m-t-0 m-b-30" style="color: black;">Department Update</h4>
                                <form method="post" action="{{route('update_department_details.view',$editData->id)}}">
                                    @csrf
                                    <div class="form-group"><label for="dept_id"><b>Deparment ID</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="dept_id" class="form-control inputstyle" id="dept_id" value="{{$editData->dept_id}}" readonly required>
                                    </div>
                                    <div class="form-group"><label for="dept_name"><b>Department Name</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="dept_name" class="form-control inputstyle" id="dept_name" value="{{$editData->dept_name}}" required>
                                    </div>
                                    <div class="form-group"><label for="dept_head"><b>Department Head</b><span style="color: red;"> *</span></label>

                                        <input type="text" name="dept_head" class="form-control inputstyle" id="dept_head" value="{{$editData->dept_head}}" required>
                                    </div>
                                    <div class="form-group"><label for="updated_by"><b>Updated By</b><span style="color: red;"> *</span></label>

                                        <input type="text" name="updated_by" class="form-control inputstyle" id="updated_by" value="{{$editData->updated_by}}" readonly required>
                                    </div>
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
@extends('admin.master')
@section('admin')

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
                                <h4 class="m-t-0 m-b-30" style="color: black;">Call Type Update</h4>
                                <form method="post" action="{{route('update_calltype_details.view',$editData->id)}}">
                                    @csrf
                                    <div class="form-group"><label for="calltype_id"><b>Call Type ID</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="calltype_id" class="form-control" id="calltype_id" value="{{$editData->calltype_id}}" readonly required>
                                    </div>
                                    <div class="form-group"><label for="calltype_name"><b>Call Type Name</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="calltype_name" class="form-control" id="calltype_name" value="{{$editData->calltype_name}}" required>
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
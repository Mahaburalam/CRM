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
                                <h4 class="m-t-0 m-b-30" style="color: black;">Business Division Update</h4>
                                <form method="post" action="{{route('update_business_division_details.view',$editData->id)}}">
                                    @csrf
                                    <div class="form-group"><label for="business_division_id"><b>Business Division ID</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="business_division_id" class="form-control inputstyle" id="business_division_id" value="{{$editData->business_division_id}}" readonly required>
                                    </div>
                                    <div class="form-group"><label for="calltype_name"><b>Call Type Name</b><span style="color: red;"> *</span></label>

                                    <div class="controls">
                                            <select name="calltype_name" class="form-control inputstyle" required="true" aria-invalid="false" value="{{$editData->calltype_name}}">

                                                <option value="" selected="" disabled="">Select CallType Name</option>

                                                @foreach ($alldata as $key => $calltypes)
                                                <option value="{{ $calltypes->calltype_name }}" 
                                                {{$calltypes->calltype_name ==$editData->calltype_name? 'selected' : ''}}>{{ $calltypes->calltype_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group"><label for="business_division_name"><b>Business Division Name</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="business_division_name" class="form-control inputstyle" id="business_division_name" value="{{$editData->business_division_name}}" required>
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
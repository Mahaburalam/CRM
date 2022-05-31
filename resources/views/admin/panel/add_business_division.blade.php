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
                                <h4 class="m-t-0 m-b-30" style="color: black;">Add Business Division</h4>
                                <form method="POST" action="{{route('store_business_division.view')}}">
                                    @csrf
                                    <div class="form-group"><label for="calltype_name"><b>Call Type Name</b><span style="color: red;"> *</span></label>

                                        <div class="controls">
                                            <select name="calltype_name" class="form-control inputstyle" required="true" aria-invalid="false">

                                                <option value="" selected="" disabled="">Select CallType Name</option>

                                                @foreach ($alldata as $key => $calltypes)
                                                <option value="{{ $calltypes->calltype_name }}">{{ $calltypes->calltype_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>

                                        <!-- <input type="text" name="calltype_name" class="form-control inputstyle" id="calltype_name"> -->
                                        <span style="color: red;">@error('calltype_name'){{$message}}@enderror</span>
                                    </div>
                                    <div class="form-group"><label for="business_division_name"><b>Business Division Name</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="business_division_name" class="form-control inputstyle" id="calltype_name">
                                        <span style="color: red;">@error('business_division_name'){{$message}}@enderror</span>
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
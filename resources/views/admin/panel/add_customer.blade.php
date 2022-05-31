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
                                <h4 class="m-t-0 m-b-30" style="color: black;">Add Customer</h4>
                                <form method="POST" action="{{route('store_customer.view')}}">
                                    @csrf
                                    <div class="form-group"><label for="cus_name"><b>Customer Name</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="cus_name" class="form-control inputstyle " id="cus_name">
                                        <span style="color: red;">@error('cus_name'){{$message}}@enderror</span>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-6"><label for="cus_f_name"><b>Customer Father's Name</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_f_name" class="form-control inputstyle" id="cus_f_name">
                                            <span style="color: red;">@error('cus_f_name'){{$message}}@enderror</span>
                                        </div>
                                        <div class="form-group col-6"><label for="cus_m_name"><b>Customer Mother's Name</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_m_name" class="form-control inputstyle" id="cus_m_name">
                                            <span style="color: red;">@error('cus_m_name'){{$message}}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4 "><label for="cus_contact_no"><b>Contact No</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_contact_no" class="form-control inputstyle" id="cus_contact_no">
                                            <span style="color: red;">@error('cus_contact_no'){{$message}}@enderror</span>
                                        </div>
                                        <div class="form-group col-4"><label for="cus_nid"><b>Customer NID</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_nid" class="form-control inputstyle" id="cus_nid">
                                            <span style="color: red;">@error('cus_nid'){{$message}}@enderror</span>
                                        </div>
                                        <div class="form-group col-4"><label for="cus_segment"><b>Customer Segment</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_segment" class="form-control inputstyle" id="cus_segment">
                                            <span style="color: red;">@error('cus_segment'){{$message}}@enderror</span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-4"><label for="cus_area"><b>Area</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_area" class="form-control inputstyle" id="cus_area">
                                            <span style="color: red;">@error('cus_area'){{$message}}@enderror</span>
                                         </div>
                                        <div class="form-group col-4"><label for="cus_district"><b>District</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_district" class="form-control inputstyle" id="cus_district">
                                            <span style="color: red;">@error('cus_district'){{$message}}@enderror</span>
                                        </div>
                                        <div class="form-group col-4"><label for="cus_division"><b>Division</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_division" class="form-control inputstyle" id="cus_division">
                                            <span style="color: red;">@error('cus_division'){{$message}}@enderror</span>
                                        </div>
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
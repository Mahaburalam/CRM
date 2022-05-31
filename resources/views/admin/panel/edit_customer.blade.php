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
                                <h4 class="m-t-0 m-b-30" style="color: black;">Customer Update</h4>
                                <form method="post" action="{{route('update_customer_details.view',$editData->id)}}">
                                    @csrf
                                    <div class="form-group"><label for="cus_id"><b>Customer ID</b></label>
                                        <input type="text" name="cus_id" class="form-control" id="cus_id" value="{{$editData->cus_id}}" readonly>
                                    </div>
                                    <div class="form-group"><label for="cus_name"><b>Customer Name</b><span style="color: red;"> *</span></label>
                                        <input type="text" name="cus_name" class="form-control inputstyle " id="cus_name" value="{{$editData->cus_name}}" required>
                                        <span style="color: red;">@error('cus_name'){{$message}}@enderror</span>
                                    </div>
                                    <div class="row">

                                        <div class="form-group col-6"><label for="cus_f_name"><b>Customer Father's Name</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_f_name" class="form-control inputstyle" id="cus_f_name" value="{{$editData->cus_f_name}}" required>

                                        </div>
                                        <div class="form-group col-6"><label for="cus_m_name"><b>Customer Mother's Name</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_m_name" class="form-control inputstyle" id="cus_m_name" value="{{$editData->cus_m_name}}" required>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-4 "><label for="cus_contact_no"><b>Contact No</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_contact_no" class="form-control inputstyle" id="cus_contact_no" value="{{$editData->cus_contact_no}}" required>

                                        </div>
                                        <div class="form-group col-4"><label for="cus_nid"><b>Customer NID</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_nid" class="form-control inputstyle" id="cus_nid" value="{{$editData->cus_nid}}" required>

                                        </div>
                                        <div class="form-group col-4"><label for="cus_segment"><b>Customer Segment</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_segment" class="form-control inputstyle" id="cus_segment" value="{{$editData->cus_segment}}" required>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-4"><label for="cus_area"><b>Area</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_area" class="form-control inputstyle" id="cus_area" value="{{$editData->cus_area}}" required>

                                        </div>
                                        <div class="form-group col-4"><label for="cus_district"><b>District</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_district" class="form-control inputstyle" id="cus_district" value="{{$editData->cus_district}}" required>

                                        </div>
                                        <div class="form-group col-4"><label for="cus_division"><b>Division</b><span style="color: red;"> *</span></label>

                                            <input type="text" name="cus_division" class="form-control inputstyle" id="cus_division" value="{{$editData->cus_division}}" required>

                                        </div>
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
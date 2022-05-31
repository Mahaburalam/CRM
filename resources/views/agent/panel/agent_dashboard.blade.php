@extends('agent.master')
@section('agent')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- First -->
<section class="container-fluid my-2">

@if(Session::has('account_info_add'))
<span style="color:green">{{Session::get('account_info_add')}}</span>
@endif
    <div class="row">

        <div class=" col-lg-6 col-md-6 col-xl-6 col-sm-6">
            <div class="card">
                <!-- <div class="card-body"> -->
                <input class="form-control-sm" type="text" value="" aria-label="readonly input example" placeholder="IVR Path / Footprint | short code > 1 for bangla  > 0 for agent" readonly>
                <!-- </div> -->
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xl-3 col-sm-3">
            <div class="card p-mode-bg">
                <div class="d-flex justify-content-between align-items-center">
                    <h6 style="margin: 0 10px;">Present Mode</h6>

                    <!-- <h5 class="ms-3">Present Mode</h5> -->
                    <select name="present_mode" class="form-select p-mode dropdown" aria-label="Default select example">
                        <option selected value="in_call">In Call</option>
                        <option value="break">Break</option>
                        <option value="meeting">Meeting</option>
                        <option value="training">Training</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-xl-3 col-sm-3">
            <div class="card">
                <div class="btn-group d-flex justify-content-between" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-success btn-sm">Answer</button>
                    <button type="button" class="btn btn-warning text-white btn-sm">Transfer</button>
                    <button type="button" class="btn btn-secondary btn-sm">Hold</button>
                    <button type="button" class="btn btn-danger btn-sm">Release</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- middle -->
<section class="container-fluid my-1 section-class1">
    <div class="row" style="font-size: 12px">
        <!-- 1 -->
        <div class="col-md-3 col-sm-3">
            <div class="card inputcard">

                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                    <!-- <table class="table table-bordered border-dark">
                        <thead>
                            <tr>
                                <th>In Call Number</th>
                                <td><input type="text" class="form-control-sm first" name="ac_name" placeholder="In call number" readonly></td>
                            </tr>
                            <tr>
                                <th>Current Call Duration</th>
                                <td><input type="text" class="form-control-sm first" name="ac_name" placeholder="Current Call Duration"></td>
                            </tr>
                            <tr>
                                <th>Login Duration</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Break Duration</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>AHT FTD</th>
                                <td></td>
                            </tr>
                            <th colspan="2" class="text-center">Customer Information</th>
                            <tr>
                                <th>Customer Name</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Fathers Name</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Mothers Name</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Contact Number</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Customer Segment</th>

                                <td>

                                    <select class="form-select p-mode dropdown border border-dark" aria-label="Default select example">

                                        <option value="VIP">VIP</option>
                                        <option value="Premium">Premium</option>
                                        <option value="Brong">Brong</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Employee">Employee</option>
                                        <option value="General">General</option>

                                    </select>

                                </td>

                            </tr>
                            <tr>
                                <th>NID Number</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Division</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>District</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Area</th>
                                <td></td>
                            </tr>
                        </thead>
                    </table> -->

                    <table class="table table-bordered border-dark table-sm">
                        <thead>
                            <tr>
                                <th>In Call Number</th>
                                <div class="form-group ">
                                    <td><input type="text" class="form-control-sm first" name="in_call_number" placeholder="In Call Number" readonly>
                                    </td>
                            </tr>
                            <tr>
                                <th>Current Call Duration</th>
                                <td>

                                    <input type="text" class="form-control-sm first" name="current_call_duration" placeholder="Current Call Duration" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>Login Duration</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="login_duration" placeholder="Login Duration" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>Break Duration</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="break_duration" placeholder="Break Duration" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>AHT FTD</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="aht_ftd" placeholder="AHT FTD" readonly>
                                </td>
                            </tr>

                            <tr>
                                <th colspan="2" class="text-center">Customer Information</th>
                                <!-- <hr> -->
                            </tr>
                            <tr>
                                <th>Customer's Name</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="customer_name" placeholder="Customer's Name" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>Father's Name</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="father_name" placeholder="Father's Name" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>Mother's Name</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="mother_name" placeholder="Mother's Name" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Contact Number</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="contact_number" placeholder="Contact Number" readonly>
                                </td>
                            </tr>

                            <tr>
                                <th>Customer Segment</th>
                                <td>
                                    <!-- <input type="text" class="form-control-sm first" name="customer_segment" placeholder="Customer Segment" readonly> -->
                                    <select name="customer_segment" class="form-control-sm first" aria-label="Default select example">
                                        <option value="VIP" selected>VIP</option>
                                        <option value="Premium">Premium</option>
                                        <option value="Bronge">Bronge</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Employee">Employee</option>
                                        <option value="General">General</option>
                                    </select>






                                </td>
                            </tr>

                            <tr>
                                <th>NID Number</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="nid_number" placeholder="NID Number" readonly>
                                </td>
                            </tr>

                            <tr>
                                <th>Division</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="division" placeholder="Division" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>District</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="district" placeholder="District" readonly>
                                </td>
                            </tr>
                            <tr>
                                <th>Area</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="area" placeholder="Area" readonly>
                                </td>
                            </tr>
                </div>
                </thead>
                </table>
            </div>
        </div>
    </div>
    <!-- 2 -->


    <div class="col-md-3 col-sm-3">

        <form method="POST" action="{{route('user_account.info')}}">
            @csrf
            <div class="card inputcard">
                <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                    <table class="table table-bordered border-dark table-sm">
                        <thead>
                            <tr>
                                <th colspan="2" class="text-center">User Type</th>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">Account information</th>
                                <!-- <hr> -->
                            </tr>

                            <tr>
                                <th>A/C Holder Name<span style="color: red;"> *</span></th>
                                <div class="form-group ">
                                    <td><input type="text" class="form-control-sm first" name="ac_name" placeholder="A/C Holder Name">
                                    <span style="color: red;">@error('ac_name'){{$message}}@enderror</span>
                                </td>
                            </tr>
                            <tr>
                                <th>A/C Status<span style="color: red;"> *</span></th>
                                <td>

                                    <input type="text" class="form-control-sm first" name="ac_status" placeholder="A/C Status">
                                    <span style="color: red;">@error('ac_status'){{$message}}@enderror</span>
                                </td>
                            </tr>
                            <tr>
                                <th>A/C Type<span style="color: red;"> *</span></th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="ac_type" placeholder="A/C Type">
                                    <span style="color: red;">@error('ac_type'){{$message}}@enderror</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Profit Status<span style="color: red;"> *</span></th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="profit_status" placeholder="Profit Status">
                                    <span style="color: red;">@error('profit_status'){{$message}}@enderror</span>
                                </td>
                            </tr>
                            <tr>
                                <th>KYC Status<span style="color: red;"> *</span></th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="kyc_status" placeholder="KYC Status">
                                    <span style="color: red;">@error('kyc_status'){{$message}}@enderror</span>
                                </td>
                            </tr>
                            <tr>
                                <th>ID Number<span style="color: red;"> *</span></th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="ac_id" placeholder="ID Number">
                                    <span style="color: red;">@error('ac_id'){{$message}}@enderror</span>
                                </td>
                            </tr>
                            <tr>
                                <th>A/C Balance<span style="color: red;">*</span></th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="ac_balance" placeholder="A/C Balance">
                                    <span style="color: red;">@error('ac_balance'){{$message}}@enderror</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Date Of Birth<span style="color: red;">*</span></th>
                                <td>
                                    <input type="date" class="form-control-sm " id="ac_dob" placeholder="Date Of Birth" name="ac_dob">
                                    <span style="color: red;">@error('ac_dob'){{$message}}@enderror</span>
                                </td>
                            </tr>
                            <tr>
                                <th>Limit Status<span style="color: red;"> *</span></th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="ac_limit_status" placeholder="Limit Status">
                                    <span style="color: red;">@error('ac_limit_status'){{$message}}@enderror</span>
                                </td>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">NO A/C Found</th>
                                <!-- <hr> -->
                            </tr>
                            <tr>
                                <th>More Information</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="ac_more_info_1" placeholder="More Information">
                                </td>
                            </tr>
                            <tr>
                                <th>More Information</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="ac_more_info_2" placeholder="More Information">
                                </td>
                            </tr>
                            <tr>
                                <th>More Information</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="ac_more_info_3" placeholder="More Information">
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    More Information</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="ac_more_info_4" placeholder="More Information">
                                </td>
                            </tr>

                            <tr>
                                <th>More Information</th>
                                <td>
                                    <input type="text" class="form-control-sm first" name="ac_more_info_5" placeholder="More Information">
                                </td>
                            </tr>
                </div>
                </thead>
                </table>
            </div>
    </div>
    </div>

    <!-- 3 -->

    <div class="col-md-3 col-sm-3">
        <div class="card inputcard">
            <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">


                <table class="table table-bordered border-dark table-sm">
                    <thead>
                        <tr>
                            <th>Customer Segment<span style="color: red;">*</span></th>

                            <td>
                                <select name="ac_category" class="form-control-sm first" aria-label="Default select example">
                                    <option value="Related" selected>A/C Related</option>
                                    <option value="Bill">Bill Pay Dispute</option>
                                    <option value="Complain">Bill Pay Complain</option>
                                </select>
                                <span style="color: red;">@error('ac_category'){{$message}}@enderror</span>
                            </td>
                        </tr>

                        <tr>
                            <th>Sub - Category<span style="color: red;"> *</span></th>

                            <td>
                                <select name="ac_sub_category" class="form-control-sm first" aria-label="Default select example">
                                    <option value="a/c problem" selected>A/C Open Problem</option>
                                    <option value="nid used">NID Used Problem</option>
                                </select>
                                <span style="color: red;">@error('ac_sub_category'){{$message}}@enderror</span>
                            </td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-center">Sub Sub-Category</th>
                            <!-- <hr> -->
                        </tr>
                        <tr>
                            <th>DFF2<span style="color: red;"> *</span></th>

                            <td>
                                <select name="ac_sub_sub_category_1" class="form-control-sm first" aria-label="Default select example">
                                    <option value="Option 1" selected>Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                                <span style="color: red;">@error('ac_sub_sub_category_1'){{$message}}@enderror</span>
                            </td>
                        </tr>
                        <tr>
                            <th>DFF2<span style="color: red;"> *</span></th>
                            <td>
                                <select name="ac_sub_sub_category_2" class="form-control-sm first" aria-label="Default select example">
                                    <option value="Option 1" selected>Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                </select>
                                <span style="color: red;">@error('ac_sub_sub_category_2'){{$message}}@enderror</span>
                            </td>
                        </tr>
            </div>
            </thead>
            </table>

            <!-- <table class="table table-bordered border-dark ">
                <thead>
                    <tr>
                        <th>Category</th>
                        <td>
                            <select name="ac_category" class="form-control-sm first" aria-label="Default select example">
                                <option value="Related" selected>A/C Related</option>
                                <option value="Bill">Bill Pay Dispute</option>
                                <option value="Complain">Bill Pay Complain</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>Sub - Category</th>
                        <td>
                            <select name="ac_sub_category" class="form-control-sm first" aria-label="Default select example">
                                <option value="a/c problem" selected>A/C Open Problem</option>
                                <option value="nid used">NID Used Problem</option>
                            </select>
                        </td>
                    </tr>
                    <th colspan="2" class="text-center">Sub Sub-Category</th>
                    <tr>
                        <td>DFF2</td>
                        <td> <select name="ac_sub_sub_category_1" class="form-control-sm first" aria-label="Default select example">
                                <option value="Option 1" selected>Option 1</option>
                                <option value="Option 2">Option 2</option>

                            </select></td>
                    </tr>
                    <tr>
                        <td>DFF2</td>
                        <td> <select name="ac_sub_sub_category_2" class="form-control-sm first" aria-label="Default select example">
                                <option value="Option 1" selected>Option 1</option>
                                <option value="Option 2">Option 2</option>

                            </select></td>
                    </tr>
                    <tr>
                        <td>DFF2</td>
                        <td>DFF2</td>
                    </tr>

                </thead>
            </table> -->
            <div class="form-group">
                <label for="remarks" style="margin: 5px 0px;"><b>Remarks</b></label>
                <textarea class="form-control" id="remarks" name="remarks" rows="2" maxlength="120"></textarea>
            </div>

            <br> <button type="submit" class="block btn btn-sm btn-success" style="background-color: #05A452;color: white;">Submit</button>
        </div>
    </div>
    </div>
    </form>
     <!-- Form End -->
    <!-- 4 -->
    <div class="col-md-3 col-sm-3">
        <div class="card inputcard">
            <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                <table class="table table-bordered border-dark ">
                    <thead>
                        <tr>
                            <th>Ticket Number</th>
                            
                            <th colspan="2" class="text-center">
                            <input type="text" class="form-control-sm first" name="profit_status" placeholder="Ticket Number">

                            <button type="button" class="btn btn-success btn-sm my-2 btn-block">Search</button>



                            </th>
                            <!-- <td>
                                <button type="button" class="btn btn-outline-success btn-sm">Search</button>
                            </td> -->
                        </tr>
                        <tr>
                            <td><strong>Date & Time</strong></td>
                            <td><strong>Ticket Number</strong></td>
                            <!-- <td><strong>Category</strong></td> -->
                            <!-- <td><strong>Sub-Category</strong></td> -->
                            <!-- <td><strong>Sub Sub-Category</strong></td> -->
                            <!-- <td>Resolution Date & time </td> -->
                            <td><strong>Ticket Status</strong></td>
                        </tr>
                        <tr>
                            <td>16.02.2022</td>
                            <td>kadjksa456878</td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>19.02.2022</td>
                            <td>eflwlb228855</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(Session::has('account_info_add'))

<script>
swal("Congratulations","{{!! Session::get('account_info_add') !!}}","success",{
    button:"OK"
});
    </script>

@endif




</section>

@endsection
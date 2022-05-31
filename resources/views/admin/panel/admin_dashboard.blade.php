@extends('admin.master')
@section('admin')

<!-- Start right Content here -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-heading">
                                <h4 class="card-title text-muted font-weight-light mb-0">Total Subscription</h4>
                            </div>
                            <div class="card-body p-t-10">
                                <h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger m-r-10"></i><b>8952</b>
                                </h2>
                                <p class="text-muted m-b-0 m-t-20"><b>48%</b> From Last 24 Hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-heading">
                                <h4 class="card-title text-muted font-weight-light mb-0">Order Status</h4>
                            </div>
                            <div class="card-body p-t-10">
                                <h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-up-bold-circle-outline text-primary m-r-10"></i><b>6521</b>
                                </h2>
                                <p class="text-muted m-b-0 m-t-20"><b>42%</b> Orders in Last 10 months</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-heading">
                                <h4 class="card-title text-muted font-weight-light mb-0">Unique Visitors</h4>
                            </div>
                            <div class="card-body p-t-10">
                                <h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-up-bold-circle-outline text-primary m-r-10"></i><b>452</b>
                                </h2>
                                <p class="text-muted m-b-0 m-t-20"><b>22%</b> From Last 24 Hours</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <div class="card-heading">
                                <h4 class="card-title text-muted font-weight-light mb-0">Monthly Earnings</h4>
                            </div>
                            <div class="card-body p-t-10">
                                <h2 class="m-t-0 m-b-15"><i class="mdi mdi-arrow-down-bold-circle-outline text-danger m-r-10"></i><b>5621</b>
                                </h2>
                                <p class="text-muted m-b-0 m-t-20"><b>35%</b> From Last 1 Month</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0">Revenue</h4>
                                <ul class="list-inline widget-chart m-t-20 text-center">
                                    <li><i class="mdi mdi-arrow-up-bold-circle-outline text-primary"></i>
                                        <h4 class=""><b>5248</b></h4>
                                        <p class="text-muted m-b-0">Marketplace</p>
                                    </li>
                                    <li><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                                        <h4 class=""><b>321</b></h4>
                                        <p class="text-muted m-b-0">Last week</p>
                                    </li>
                                    <li><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                                        <h4 class=""><b>964</b></h4>
                                        <p class="text-muted m-b-0">Last Month</p>
                                    </li>
                                </ul>
                                <div id="morris-bar-example" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0">Email Sent</h4>
                                <ul class="list-inline widget-chart m-t-20 text-center">
                                    <li><i class="mdi mdi-arrow-up-bold-circle-outline text-primary"></i>
                                        <h4 class=""><b>3654</b></h4>
                                        <p class="text-muted m-b-0">Marketplace</p>
                                    </li>
                                    <li><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                                        <h4 class=""><b>954</b></h4>
                                        <p class="text-muted m-b-0">Last week</p>
                                    </li>
                                    <li><i class="mdi mdi-arrow-up-bold-circle-outline text-primary"></i>
                                        <h4 class=""><b>8462</b></h4>
                                        <p class="text-muted m-b-0">Last Month</p>
                                    </li>
                                </ul>
                                <div id="morris-area-example" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0">Revenue</h4>
                                <ul class="list-inline widget-chart m-t-20 text-center">
                                    <li><i class="mdi mdi-arrow-up-bold-circle-outline text-primary"></i>
                                        <h4 class=""><b>5248</b></h4>
                                        <p class="text-muted m-b-0">Marketplace</p>
                                    </li>
                                    <li><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                                        <h4 class=""><b>321</b></h4>
                                        <p class="text-muted m-b-0">Last week</p>
                                    </li>
                                    <li><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                                        <h4 class=""><b>964</b></h4>
                                        <p class="text-muted m-b-0">Last Month</p>
                                    </li>
                                </ul>
                                <div id="morris-bar-example" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="m-t-0">Email Sent</h4>
                                <ul class="list-inline widget-chart m-t-20 text-center">
                                    <li><i class="mdi mdi-arrow-up-bold-circle-outline text-primary"></i>
                                        <h4 class=""><b>3654</b></h4>
                                        <p class="text-muted m-b-0">Marketplace</p>
                                    </li>
                                    <li><i class="mdi mdi-arrow-down-bold-circle-outline text-danger"></i>
                                        <h4 class=""><b>954</b></h4>
                                        <p class="text-muted m-b-0">Last week</p>
                                    </li>
                                    <li><i class="mdi mdi-arrow-up-bold-circle-outline text-primary"></i>
                                        <h4 class=""><b>8462</b></h4>
                                        <p class="text-muted m-b-0">Last Month</p>
                                    </li>
                                </ul>
                                <div id="morris-area-example" style="height: 300px"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- end row -->
            </div><!-- container -->
        </div><!-- Page content Wrapper -->
    </div><!-- content -->
</div><!-- End Right content here -->
@endsection
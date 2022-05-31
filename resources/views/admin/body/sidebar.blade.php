<script src="{{ asset('admin/assets/js/jquery-3.6.0.min.js')}}"></script>
<div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

                <!--- Divider -->

                <div id="sidebar-menu">
                        <ul>
                        <li><a href="{{route('admin.dashboard')}}"><i class="mdi mdi-home"></i><span> Dashboard <span class="badge badge-primary float-right"></span></span></a>     
                                </li>
                        
                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="mdi mdi-album"></i><span>Product</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul class="list-unstyled">
                                                <li><a href="{{route('add_product.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Add Product</a></li>
                                                <li><a href="{{route('show_product.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Show Product</a></li>
                                        </ul>
                                </li>
                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-building"></i> <span>Department</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul class="list-unstyled">
                                                <li><a href="{{route('add_department.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Add Department</a></li>
                                                <li><a href="{{route('show_department.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Show Department</a></li>


                                        </ul>
                                </li>

                                <!-- <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-user-group"></i><span>Employee</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i>Add Employee</a></li>
                                                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i>Show Employee</a></li>
                                        </ul>
                                </li>
                                </li> -->

                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-user"></i><span>User</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul class="list-unstyled">
                                                <li><a href="{{route('add_user.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Add User</a></li>
                                                <li><a href="{{route('show_user.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Show User</a></li>
                                        </ul>
                                </li>

                                <!-- <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-arrow-up"></i><span>Escalation</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>

                                </li>
                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-ticket"></i><span>Tickets</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>

                                </li> -->

                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-circle-info"></i><span>Customer Info</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul class="list-unstyled">
                                                <li><a href="{{route('add_customer.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Add Customer</a></li>
                                                <li><a href="{{route('show_customer.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Show Customer</a></li>
                                        </ul>
                                </li>
                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-phone"></i><span>Call Type</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul class="list-unstyled">
                                                <li><a href="{{route('add_calltype.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Add CallType</a></li>
                                                <li><a href="{{route('show_calltype.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Show CallType</a></li>
                                        </ul>
                                </li>
                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="mdi mdi-assistant"></i><span>Business Division</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul class="list-unstyled">
                                                <li><a href="{{route('add_business_division.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Add Business Division</a></li>
                                                <li><a href="{{route('show_business_division.view')}}"><i class="fa-solid fa-circle-arrow-right"></i>Show Business Division</a></li>
                                        </ul>
                                </li>
                                <!--  <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-info"></i><span>Dealer Info</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>

                                </li>
                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-exclamation"></i><span>Type of Issue</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>

                                </li>
                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-bag-shopping"></i><span> Sale Info</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>

                                </li> -->
                                <li class="has_sub"><a href="javascript:void(0);" class="waves-effect">
                                                <i class="fa-solid fa-newspaper"></i><span> Report</span><span class="float-right"><i class="mdi mdi-plus"></i></span></a>
                                        <ul class="list-unstyled">
                                                <li><a href="#"><i class="fa-solid fa-circle-arrow-right"></i>View Report</a></li>

                                        </ul>
                                </li>
                        </ul>
                </div>
                <div class="clearfix"></div>
        </div><!-- end sidebarinner -->
</div><!-- Left Sidebar End -->
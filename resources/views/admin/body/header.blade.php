
<div class="topbar">

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="#" class="logo"><span>Digicon</span> CRM</a>
        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <ul class="list-inline menu-left mb-0">
                <li class="float-left"><button class="button-menu-mobile open-left waves-light waves-effect">
                        <i class="mdi mdi-menu"></i></button></li>


                <li class="nav-item d-sm-inline-block mx-3">
                    <a href="{{route('admin.dashboard')}}" style="text-decoration:none; color:white">
                        <h3>Admin Dashboard</h3>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-right float-right list-inline">
                <!-- <li class="hide-phone app-search text-center mt-3 mx-3">
                    <form class="d-flex">
                        <input class="form-control search-bar" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light ml-2 search-button" type="submit">Search</button>
                    </form>
                </li> -->
                <li class="d-none d-sm-block"><a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box">
                        <i class="mdi mdi-fullscreen">

                        </i>
                    </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                        <img src="{{ asset('admin_dash/assets/images/users/avatar.jpg')}}" alt="user-img" class="rounded-circle">
                        <span class="profile-username">{{Auth::user()->name}}<br>
                        {{Auth::user()->email}}
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- <li>
                            <a href="#" class="dropdown-item">Profile</a>
                        </li> -->
                        <li class="dropdown-divider"></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</div><!-- Top Bar End -->
<!-- Header Start -->

<!-- <div class="top-navbar" style="background-color: #05A452;">
    <div class="container-fluid">

        <nav class="navbar ">
            <a class="navbar-brand mx-3">Digicon CRM</a>
                <div class="float-right mx-4">
                <p style="color: white;">Agent - {{Auth::user()->name}}</p>
                <a class="btn btn-outline-light btn-sm mx-4" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                </div>
         
         
        </nav>
      
    </div>
</div> -->

<div class="navbar ">
    <div class="logo">
        <h4 class="text-light">Digicon CRM</h4>
    </div>
    <div class="nav_right ">
        <ul>
            <li class="nr_li dd_main my-1" style="list-style: none">
                <!-- <img src="profile_pic.png" alt="profile_img"> -->
                 <p class="my-4 mx-3" style="font-size: 17px;">Agent ID: {{Auth::user()->name}}</p>
                <div class="dd_menu">
                    <!-- <div class="dd_left">
                        <ul>
								
								<li>Logout</li>
								
							</ul>
						</div> -->
                    <div class="dd_right">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" style="color:green;font-size: 15px;text-decoration: none;">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                    </div>
                </div>
            </li>
            <!-- <li class="nr_li">
					<i class="fas fa-envelope-open-text"></i>
				</li> -->
        </ul>
    </div>
</div>


<script>
    var dd_main = document.querySelector(".dd_main");

    dd_main.addEventListener("click", function() {
        this.classList.toggle("active");
    })
</script>
<!-- Header Start -->
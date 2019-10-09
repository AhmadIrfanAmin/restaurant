

<body>



    <!-- Begin page -->

    <div id="wrapper">
        <!-- Topbar Start -->

        <div class="navbar-custom">

            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">

                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                        <img src="{{ URL::asset('public/assets/images/users/user-1.jpg')}}" alt="user-image" class="rounded-circle" />

                        <span class="pro-user-name ml-1">

                            Marcia J. <i class="mdi mdi-chevron-down"></i> 

                        </span>

                    </a>

                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                        <!-- item-->

                        <div class="dropdown-item noti-title">

                            <h5 class="m-0 text-white">

                                Welcome !

                            </h5>

                        </div>



                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <i class="fe-user"></i>

                            <span>My Account</span>

                        </a>



                        

                        <div class="dropdown-divider"></div>



                        <!-- item-->

                        <a href="javascript:void(0);" class="dropdown-item notify-item">

                            <i class="fe-log-out"></i>

                            <span>Logout</span>

                        </a>



                    </div>

                </li>



                





            </ul>



            <!-- LOGO -->
            <div class="logo-box">
                <a href="{{ url('admin/dashboard') }}" class="logo text-center">
                    <span class="logo-lg">
                       <img src="{{ URL::asset('public/assets/images/logo-light.png')}}" alt="logo-image" style="width: 60%;height: auto;" />
                       <!-- <span class="logo-lg-text-light">Upvex</span> -->
                   </span>
                   <span class="logo-sm">
                     <span class="logo-sm-text-dark">BC</span>
                 </span>
             </a>
         </div>



         <ul class="list-unstyled topnav-menu topnav-menu-left m-0">

            <li>

                <button class="button-menu-mobile waves-effect waves-light">

                    <span></span>

                    <span></span>

                    <span></span>

                </button>

            </li>

            

            

            

        </ul>

    </div>

    <!-- end Topbar -->



    <!-- ========== Left Sidebar Start ========== -->

    <div class="left-side-menu">



        <div class="slimscroll-menu">



            <!--- Sidemenu -->

            <div id="sidebar-menu">



                <ul class="metismenu" id="side-menu">



                    <li class="menu-title">Navigation</li>



                    <li>

                        <a href="{{ url('staff-panel/dashboard') }}">

                            <i class="la la-dashboard"></i>

                            

                            <span> Dashboards </span>

                        </a>

                        

                    </li>
                      <li>

                        <a href="{{ url('staff-panel/medical-bills') }}">

                            <i class="fas fa-tag"></i>

                            

                            <span> Medical Bills </span>

                        </a>

                        

                    </li>
                      <li>

                        <a href="{{ url('staff-panel/patients') }}">

                            <i class="fas fa-users"></i>

                            

                            <span> Manage Patients </span>

                        </a>

                        

                    </li>




                 
                    <li>

                        <a href="{{ url('staff-panel/rounding-list') }}">

                            <i class="fas fa-tag"></i>

                            

                            <span> Rounding List </span>

                        </a>

                        

                    </li>




                    




                   




                



            

        

        





        

        

    </ul>



</div>

<!-- End Sidebar -->



<div class="clearfix"></div>



</div>

<!-- Sidebar -left -->



</div>

            <!-- Left Sidebar End -->
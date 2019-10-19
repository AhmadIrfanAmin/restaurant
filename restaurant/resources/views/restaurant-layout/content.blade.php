
@include('restaurant-layout.head')
@include('restaurant-layout.header')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Restaurant</a></li>
                               
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <h4 class="page-title">
                            @section('sidebar')
                            @show
                        </h4>
                    </div>
                </div>
            </div>     
            <!-- end page title --> 
            @include('restaurant-layout.flash-message')
            @yield('content')
            @include('restaurant-layout.footer')




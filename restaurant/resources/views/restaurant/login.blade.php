<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />

    <title>Restaurant</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->

    <link rel="shortcut icon" href="assets/images/favicon.ico">



    <!-- App css -->

    <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets/css/icons.min.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets/css/app.min.css')}}" rel="stylesheet">



</head>



<body class="authentication-bg authentication-bg-pattern">



    <div class="account-pages mt-5 mb-5">

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-8 col-lg-6 col-xl-5">

                    <div class="card">



                        <div class="card-body p-4">



                            <div class="text-center w-75 m-auto">




                                <span>
                                    <img src="{{ URL::asset('public/assets/images/logo-light.png')}}" alt="logo-image" height="90" />
                                    </span>
                                

                                <p class="text-muted mb-4 mt-3">Enter your username and password to access restaurant panel.</p>

                            </div>



                            <h5 class="auth-title">Sign In</h5>



                            <form action="#">



                                <div class="form-group mb-3">

                                    <label for="emailaddress">Username</label>

                                    <input class="form-control" type="email" id="emailaddress" required="" placeholder="Username">

                                </div>



                                <div class="form-group mb-3">

                                    <label for="password">Password</label>

                                    <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">

                                </div>

                                <div class="form-group mb-0 text-center">

                                    <button class="btn btn-danger btn-block" type="submit"> Log In </button>

                                </div>



                            </form>



                        </div> <!-- end card-body -->

                    </div>

                    <!-- end card -->

                    <!-- end row -->

                </div> <!-- end col -->

            </div>

            <!-- end row -->

        </div>

        <!-- end container -->

    </div>

    <!-- end page -->





    <footer class="footer footer-alt">

        2019 &copy; by <a href="" class="text-muted">Restaurant</a> 

    </footer>



    <!-- Vendor js -->

    <script src="{{ URL::asset('public/assets/js/vendor.min.js')}}"></script>



    <!-- App js -->

    <script src="{{ URL::asset('public/assets/js/app.min.js')}}"></script>

    

</body>

</html>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8" />

    <title>Restaurant</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->

    <link rel="shortcut icon" href="assets-restaurant/images/favicon.ico">



    <!-- App css -->

    <link href="{{asset('public/assets-restaurant/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets-restaurant/css/icons.min.css')}}" rel="stylesheet">

    <link href="{{asset('public/assets-restaurant/css/app.min.css')}}" rel="stylesheet">



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

                                    <img src="{{ URL::asset('images/restaurant/').'/'.$restaurant_info->photo}}" alt="logo-image" height="90" />
                                </span>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access restaurant panel.</p>
                                </div>
                                <h5 class="auth-title">Sign In</h5>
                                 <form method="POST" action="{{ route('restaurant.login') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Username</label>
                                        <input id="email" type="text" class="form-control"  name="username" value="{{ old('username') }}" required autocomplete="off" autofocus placeholder="Enter your Username">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">

                                        <label for="password">Password</label>

                                        <input id="password" type="password" class="form-control"   name="password" required placeholder="Enter your password">

                                       
                                    </div>

                                    <div class="form-group mb-0 text-center">

                                     <button type="submit" class="btn btn-danger btn-block">
                                        {{ __('Login') }}
                                    </button>

                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- end page -->

        <footer class="footer footer-alt">

            2019 &copy; by <a href="" class="text-muted">Dlv Express</a> 

        </footer>
        <!-- Vendor js -->
        <script src="{{ URL::asset('public/assets-restaurant/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{ URL::asset('public/assets-restaurant/js/app.min.js')}}"></script>



    </body>

    </html>
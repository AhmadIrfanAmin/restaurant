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
                                    <h3>Dlv Express</h3>


                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>

                                </div>



                                <h5 class="auth-title">Sign In</h5>



                                 <form method="POST" action="{{ route('login') }}">
                                    @csrf



                                    <div class="form-group mb-3">

                                        <label for="emailaddress">Email address</label>

                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your Email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>



                                    <div class="form-group mb-3">

                                        <label for="password">Password</label>

                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>



                                    <div class="form-group mb-3">

                                        <div class="custom-control custom-checkbox checkbox-info">

                                             <input class="custom-control-input" type="checkbox" name="remember" id="checkbox-signin" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>

                                        </div>

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



                        {{-- <div class="row mt-3">

                            <div class="col-12 text-center">

                                <p> <a href="pages-recoverpw.html" class="text-muted ml-1">Forgot your password?</a></p>

                                <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-muted ml-1"><b class="font-weight-semibold">Sign Up</b></a></p>

                            </div> <!-- end col -->

                        </div> --}}

                        <!-- end row -->



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

        <script src="{{ URL::asset('public/assets/js/vendor.min.js')}}"></script>



        <!-- App js -->

        <script src="{{ URL::asset('public/assets/js/app.min.js')}}"></script>



    </body>

    </html>
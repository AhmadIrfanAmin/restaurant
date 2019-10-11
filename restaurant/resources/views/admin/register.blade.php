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

								<p class="text-muted mb-4 mt-3">Don't have an account? Create your free account now.</p>

							</div>



							<h5 class="auth-title">Create Account</h5>



							<form action="#">



								<div class="form-group">

									<label for="fullname">Name</label>

									<input class="form-control" type="text" id="fullname" placeholder="Enter your name" required>

								</div>

								<div class="form-group">

									<label for="emailaddress">Email address</label>

									<input class="form-control" type="email" id="emailaddress" required placeholder="Enter your email">

								</div>

								<div class="form-group">

									<label for="password">Password</label>

									<input class="form-control" type="password" required id="password" placeholder="Enter your password">

								</div>

								<div class="form-group">

									<label for="password">Confirm Password</label>

									<input class="form-control" type="password" required id="confirm-password" placeholder="Enter confirm password">

								</div>

								

								<div class="form-group mb-0 text-center">

									<button class="btn btn-danger btn-block" type="submit"> Sign Up </button>

								</div>



							</form>



							



						</div> <!-- end card-body -->

					</div>

					<!-- end card -->



					<div class="row mt-3">

						<div class="col-12 text-center">

							<p class="text-muted">Already have account?  <a href="pages-login.html" class="text-muted ml-1"><b class="font-weight-semibold">Sign In</b></a></p>

						</div> <!-- end col -->

					</div>

					<!-- end row -->



				</div> <!-- end col -->

			</div>

			<!-- end row -->

		</div>

		<!-- end container -->

	</div>

	<!-- end page -->





	<footer class="footer footer-alt">

		2019 &copy; by <a href="" class="text-muted">BCapture</a>  

	</footer>



	<!-- Vendor js -->

	<script src="{{ URL::asset('public/assets/js/vendor.min.js')}}"></script>



	<!-- App js -->

	<script src="{{ URL::asset('public/assets/js/app.min.js')}}"></script>

	

</body>

</html>
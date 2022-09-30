<!doctype html>
<html lang="en">
  <head>
  	<title>Assets Ms</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	{{-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet"> --}}
	<link rel="stylesheet" href="{{asset('back/vendors/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('front/login/css/style.css')}}">
    <style>

        body{
            /* background-image: url("back/images/mp.jpg"); */
            /* background-repeat: no-repeat; */
            background-color:  #343a40;
            /* height: 1500px; */
        }
    </style>


	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h1 class="heading-section text-light">  <strong>Assets Management System</strong> </h1>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4"> <strong> Assets Ms</strong></h3>
						<form action="{{ route('login') }}" method="POST" class="login-form">
                            @csrf
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left  @error('email') is-invalid @enderror" placeholder="Email" name="email" required>
                          @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" name="password" class="form-control rounded-left  @error('password') is-invalid @enderror lock" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary rounded submit px-3"> <i class="fa fa-sign-in"></i> Login</button>
	            </div>
	           
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{asset('front/login/js/jquery.min.js')}}"></script>
  <script src="{{asset('front/login/js/popper.js')}}"></script>
  <script src="{{asset('front/login/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/login/js/main.js')}}"></script>

	</body>
</html>


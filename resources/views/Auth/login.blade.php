<link rel="stylesheet" href="{{asset ('assets/css/login.css')}}">
<link rel="stylesheet" href="{{asset ('assets/css/button.css')}}">

<title>Login</title>
<div class="container" id="container">
	<!-- Form Regis -->
	<div class="form-container sign-up-container">
		<form action="{{route ('simpanRegister')}}" method="POST">
			@csrf
			<h1>Create Account</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<span>or use your email for registration</span>
			<input id="name" name="name" autocomplete="off" type="text" placeholder="Name" required/>
			<input id="email" name="email" autocomplete="off" type="email" placeholder="Email" required/>
			<input id="password" name="password" type="password" placeholder="Password" required/>
			<button>Sign Up</button>
		</form>
	</div>

	<!-- Form Login -->
	@if (session('status'))
		<div class="alert alert-danger">
			{{session('status')}}
		</div>
	@endif

	<div class="form-container sign-in-container">
		<form method="POST" action="{{route ('postlogin')}}">
			@csrf
			<h1>Sign in</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<span>or use your account</span>
			<input id="email" name="email" autocomplete="off" type="email" placeholder="Email" required/>
			<input id="password" name="password" type="password" placeholder="Password" required/>
			<!-- <a href="#">Forgot your password?</a> -->
			<button>Sign In</button>
		</form>
	</div>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="{{asset ('assets/js/login.js')}}"></script>

<!-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> -->
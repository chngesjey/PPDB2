<link rel="stylesheet" href="{{asset ('assets/loginSign/login.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css"
        integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

<title>Login</title>
<div class="login-box">
  <h2>Login</h2>
  <form action="{{ route('postlogin') }}" method="post">
    	@csrf
    <div class="user-box">
		<label for="email"></label>
	<input type="text" name="email" class="form-control" placeholder="your-email@gmail.com" id="email">
	</div>
    <div class="user-box">
		<label for="password"></label>
	<input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
    </div>
    <a href="/dashboard">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Log in
    </a>
	
    <a href="/register">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Register
    </a>
  </form>
</div>

<script src="{{asset ('assets/loginSign/login.js')}}"></script>

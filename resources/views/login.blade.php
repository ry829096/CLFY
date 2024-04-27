<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('css/logincss/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form method="POST" action="{{ route('login') }}">
                @csrf
            <input type="text" placeholder="Username" name="email" required>
          <input type="password" placeholder="Password" name="password" required>
          <div class="line">
          <label><input type="checkbox" name="remember" name="checkbox">  Remember Me</label>
          <div class="forgot-password">
            <a href="#">Forgot Password?</a>
          </div>
        </div>
          <input type="submit" value="Login">
        </form>
       
        <div class="social-login">
          <a href="#" class="facebook"><i class="fa-brands fa-facebook-f"></i> Facebook</a>
          <a href="#" class="google"><i class="fa-brands fa-google"></i> Google</a>
        </div>
      </div>
</body>
</html>
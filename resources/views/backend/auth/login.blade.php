<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title', 'Humble Tree Cloud | Admin Panel')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('backend/assets/css/login.css') }}">
</head>
<body>
    <div class="login-form">
        <form action="{{ URL::to('/backend/auth/authenticate') }}" method="POST">
            @csrf
        <h1>Login</h1>
        {{-- @if ($errors->any())
            {!! implode('', $errors->all('<li>:message</li>')) !!}
        @endif --}}
        <div class="imgcontainer">
                <img src="https://cdn3.iconfinder.com/data/icons/essential-rounded/64/Rounded-31-512.png" alt="Avatar" class="avatar">
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="E-mail Address" class="form-control @if($errors->has('email')) {{'is-invalid'}} @endif">
            <span class="input-icon"><i class="fa fa-envelope"></i></span>
            @if($errors->has('email'))
                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
            @endif
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control @if($errors->has('password')) {{'is-invalid'}} @endif">
            <span class="input-icon"><i class="fa fa-lock"></i></span>
            @if($errors->has('password'))
                <div class="invalid-feedback">{{ $errors->first('password') }}</div>
            @endif
        </div>
        <button class="login-btn" type="submit">Login</button>
        <a class="reset-psw" href="{{ URL::to('/backend/register') }}">Click here to Register</a>
        <div class="seperator"><b>or</b></div>
        <p>Sign in with your social media account</p>
        <!-- Social login buttons -->
        <div class="social-icon">

            <button type="button"><i class="fa fa-twitter"></i></button>
            <button type="button"><i class="fa fa-facebook"></i></button>
            <button type="button"><i class='fa fa-instagram'></i></button>
            <button type="button"><i class='fa fa-whatsapp'></i></button>
        </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>

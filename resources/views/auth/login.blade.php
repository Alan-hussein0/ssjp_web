@extends('layouts.app')

@section('content')

  <link rel="apple-touch-icon" href="apple-icon.png">
  <link rel="shortcut icon" href="favicon.ico">

  <link rel="stylesheet" href="assets1/css/normalize.css">
  <link rel="stylesheet" href="assets1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets1/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets1/css/themify-icons.css">
  <link rel="stylesheet" href="assets1/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets1/css/cs-skin-elastic.css">
  <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
  <link rel="stylesheet" href="assets1/scss/style.css">

<section class="property-single nav-arrow-b my-5 bg-dark">
    <div class="container my-5">
        <div class="row">
            <div class="sufee-login d-flex align-content-center flex-wrap">
                <div class="container my-5 p-2">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="index.html">
                                <img class="align-content" src="images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
                                @csrf

                                <div class="form-group">
                                    <label for="email" class="">{{ __('Email Address') }}</label>

                                    {{-- <div class="col-md-6"> --}}
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    {{-- </div> --}}
                                </div>

                                <div class="form-group">
                                    <label for="password" class="">{{ __('Password') }}</label>
                            

                                    {{-- <div class="col-md-6"> --}}
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >                                
                                            
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    {{-- </div> --}}
                                </div>

                                
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">تسجيل الدخول</button>

                                <div class="register-link m-t-15 mt-2 text-center" >
                                    <p>ليس لديك حساب سابق؟ <a href="{{ route('register') }}"> للتسجيل من هنا</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

@endsection
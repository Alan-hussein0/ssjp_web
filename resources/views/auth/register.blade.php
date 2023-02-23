
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

<section class="bg-dark">
<div class="sufee-login d-flex align-content-center flex-wrap my-4">
    <div class="container">
        <div class="login-content">
            <div class="login-logo">
                <a href="index.html">
                    <img class="align-content" src="images/logo.png" alt="">
                </a>
            </div>
            <div class="login-form">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="name">{{ __('Name') }}</label>
                        <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">البريد الالكتروني</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="col-md-6 mb-2">
                        <div class="form-group mt-3">
                            <label class="pb-2" for="bedrooms">الرتبة</label>
                            <select class="form-control form-select form-control-a" id="bedrooms" name="rank">
                                <option value="student">طالب</option>
                                <option value="researcher">باحث</option>
                                <option value="another">اخر</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label class="pb-2" for="bedrooms">مجال الاهتمام</label>
                            <select class="form-control form-select form-control-a" id="bedrooms" name="department">
                                <option value="Business management and accounting">الأعمال، الإدارة والمحاسبة</option>
                                <option value="nursing">التمريض</option>
                                <option value="Engineering">الهندسة</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">
                        {{ __('Register') }}    
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
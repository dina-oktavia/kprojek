@extends('login_register.global')

@section('title')
    Reset Your Password
@endsection

@section('style')
<style>
  .image img{
    width: 470px;
    margin-top: 20px;
    margin-left: 20px;
  }
  </style>
@endsection

@section('content')
{{-- navbar --}}
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="/">
    <img src="https://i.ibb.co/xF71hsd/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <b> E-ABSEN POLIWANGI</b>
  </a>
  <a class="nav-item nav-link" href="register">SIGN UP</a>
</nav>
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">
          <div class="col-lg-6 d-none d-lg-block">
          <div class="image">
              <img src="{{ url('/dashboard/dist/img/forgot.png') }}">
              </div>
          </div>
    <div class="col-lg-6" style="margin-top: 20px;">
      <div class="p-5">
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
          <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
        </div>
        @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
        @endif
        <form class="user" action="{{ route('password.email') }}" method="POST">
          @csrf
          <div class="form-group">
            <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email Address">
            {{-- pesan error --}}
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary btn-user btn-block">
            {{ __('Send Password Reset Link') }}
          </button>
        </form>
      </div>
    </div>
  </div>
    
@endsection
          
@extends('layouts.global-admin')

@section('title')
    Login to E-Absen Poliwangi (Dosen)
@endsection

@section('style')
<style>
  .image img{
    width: 600px;
    margin-left: -55px;
  }
  </style>
@endsection

@section('content')
     {{-- navbar --}}
     <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="/dosen">
        <img src="https://i.ibb.co/xF71hsd/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <b> E-ABSEN POLIWANGI</b>
      </a>
    </nav>
          <div class="card-body p-0">

            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
              <div class="image">
              <img src="{{ url('/dashboard/dist/img/login.png') }}">
              </div>
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                    <h2><b>LOGIN</b></h2>
                    <p>Login to continue to <a href="">E-ABSEN POLIWANGI</a></p>
    
                  <form class="dosens" action="{{route('dosen.login')}}" enctype="application/x-www-form-urlencoded" method="POST">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}" id="exampleInputEmail" aria-describedby="emailHelp" required autocomplete="email" autofocus placeholder="Enter Your Email Address" >
                      {{-- pesan error --}}
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                      {{-- pesan error --}}
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password">Forgot Password?</a>
                  </div>
                </div>
              </div>
            </div>
@endsection
          
@extends('login_register.global')

@section('title')
    Sign Up to E-Absen Poliwangi
@endsection


@section('style')
<style>
  .image img{
    width: 500px;
    margin-top: -10px;
    margin-left: -30px;
  }
  </style>
@endsection


@section('content')
    <!-- Image and text -->
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="/">
        <img src="https://i.ibb.co/xF71hsd/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        E-ABSEN POLIWANGI
      </a>
    </nav>
  <div class="card-body p-0">

    <!-- Nested Row within Card Body -->
    <div class="row">
          <div class="col-lg-5 d-none d-lg-block">
          <div class="image">
              <img src="{{ url('/dashboard/dist/img/signup.png') }}">
              </div>
          </div>
      <div class="col-lg-7">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
          </div>
          <form class="user" action="{{route('register')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="text" name="name" class="form-control form-control-user @error('name') is-invalid @enderror" value="{{ old('name') }}" id="exampleFirstName" required autocomplete="name" autofocus placeholder="username">
                {{-- pesan error jika field tdk diisi --}}
                @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}" id="exampleInputEmail" placeholder="Email Address">
              {{-- pesan error jika field tdk diisi --}}
              @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Password">
                {{-- pesan error jika field tdk diisi --}}
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              </div>
              <div class="col-sm-6">
                <input type="password" name="password_confirmation" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleRepeatPassword" placeholder="Repeat Password">
                {{-- pesan error jika field tdk diisi --}}
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
              Register Account
            </button>
        </div>
      </div>
    </div>
@endsection
        
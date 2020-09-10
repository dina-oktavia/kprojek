@extends('layouts.dashboard')

@section('title')
    History
@endsection

 @section('style')
  <style>
  .brand-text b{
    font-size: 20px;
  }
  .navbar-brand img{
      margin-left: 10px;
  }
  .card{
      background-color: #F5F5F5;
  }
</style>
@endsection

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5" style="height: 500px;">
        {{-- navbar --}}
            <nav class="navbar navbar-light" style="background-color: #63D0FF; border-radius: 10px 10px 0px 0px;">
            <a class="navbar-brand" href="/">
                <img src="{{ url('/dashboard/dist/img/camera.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                <b style="color: white; margin-left:20px;">Direction your QRcode to the camera</b>
            </a>
        </nav>

        <div class="card" style="width: 350px; height: 300px; background-color:#2F2E41; margin-left: 270px; margin-top: 70px; border-radius: 10px;">
          <div class="card-body">
          
          </div>
        </div>

@endsection
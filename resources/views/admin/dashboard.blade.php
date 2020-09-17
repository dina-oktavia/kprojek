@extends('layouts.admin')

@section('title')
    Admin E-Absen Poliwangi 
@endsection

@section('style')
<style>
  .brand-text b{
    font-size: 20px;
  }
  .kata p{
    font-weight: bold;
    font-size: 15px;
    margin-left: 30px;
    margin-top: 20px;
  }
  .dropdown{
    margin-left: 80px;
    margin-top: -25px;
  }
  .btn{
    background-color: #63D0FF;
    height: 25px;
    font-size: 11px;
    color: white;
    font-weight: bold;
  }
  .scroll {
    height: 400px;
    overflow: scroll;
    padding-top: 10px;
  } 
</style>
@endsection


@section('content')
  {{-- <h1>hay admin</h1> --}}

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center" style=" margin-top: -30px;">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5" style="height: 500px;">
        {{-- navbar --}}
            <nav class="navbar navbar-light" style="background-color: #63D0FF; border-radius: 10px 10px 0px 0px;">
            <a class="navbar-brand" href="history">
                <img src="{{ url('/dashboard/dist/img/calendar.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                <b style="color: white; margin-left:20px;">Attendance History</b>
            </a>
            </nav>

          <div class="kata">
          <p style=" margin-bottom: -15px; font-size: 12px;">Years
          <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                2019-2020
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>          
          </p>
          <p style="font-size: 12px;">Grade
          <div class="dropdown" style=" margin-top: -40px;">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Odd
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>   
          </p>
      </div>

<!-- card -->
<div class="scroll">
<div class="row row-cols-1 row-cols-md-5" style="width: 800px; margin-left: 50px;">
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-1A</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-1B</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-1C</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-1D</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-1E</a> 
    </div>
  </div>
  </div>

  <div class="row row-cols-1 row-cols-md-5" style="width: 800px; margin-left: 50px; margin-top: -30px;">
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-2A</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-2B</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-2C</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-2D</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-2E</a> 
    </div>
  </div>
  </div>
 

  <div class="row row-cols-1 row-cols-md-5" style="width: 800px; margin-left: 50px; margin-top: -30px;">
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-3A</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-3B</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-3C</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-3D</a> 
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <img src="{{ url('/dashboard/dist/img/teach.png') }}" class="card-img-top">
      <a href="class" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 145px; border:none;"> TI-3E</a> 
    </div>
  </div>
  </div>
</div>
  
@endsection



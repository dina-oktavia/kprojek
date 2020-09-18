@extends('layouts.dashboard')

@section('title')
    Attendance History
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
            <a class="navbar-brand" href="history">
                <img src="{{ url('/dashboard/dist/img/calendar.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                <b style="color: white; margin-left:20px;">Attendance History</b>
            </a>
            </nav>

        <div class="container" style="margin-top: 10px;">
        <div class="row">
          <div class="col-md">
            <div class="card mb-4" style="margin-left:20px; background-color: white;">
              <img src="{{ url('/dashboard/dist/img/1.png') }}" class="card-img-top">
              <a href="attendance2" type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 270px;"> Administrasi Server</a> 
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-4" style="width: 280px; margin-left: 2px;">
              <img src="{{ url('/dashboard/dist/img/2.png') }}" class="card-img-top" style="width: 280px; height: 170px;">
              <button type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 280px;"> Grafika Komputer</button>
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-4" style="margin-right: 20px; height: 170px; ">
              <img src="{{ url('/dashboard/dist/img/3.png') }}" class="card-img-top" style="height: 170px;">
              <button type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 265px;"> Jaringan Komputer Lanjut</button>
            </div>
          </div>
          <div class="contrainer">
            <div class="row">
          <div class="col-md-4">
            <div class="card mb-4" style="margin-left: 26px; height:200px; width:270px;">
              <img src="{{ url('/dashboard/dist/img/4.png') }}" class="card-img-top" style="height: 170px;">
              <button type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 270px;"> Kewirausahaan Teknologi</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4" style="margin-left: 10px; height: 170px; width:278px;">
              <img src="{{ url('/dashboard/dist/img/5.png') }}" class="card-img-top" style="height:170px;">
              <button type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 280px;"> Pemograman Web</button>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4" style="width: 280px; height:170px; margin-left: 5px;">
              <img src="{{ url('/dashboard/dist/img/6.png') }}"class="card-img-top" style="height: 170px;">
              <button type="button" class="btn btn-primary btn-sm" style="height: 30px; width: 280px;"> Pengembangan Aplikasi Mobile</button>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
</div>

@endsection

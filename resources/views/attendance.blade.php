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
            <div class="card mb-4">
              <img src="{{ url('/dashboard/dist/img/1.png') }}" class="card-img-top">
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-4">
              <img src="{{ url('/dashboard/dist/img/2.png') }}" class="card-img-top">
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-4">
              <img src="{{ url('/dashboard/dist/img/3.png') }}" class="card-img-top">
            </div>
          </div>
          <div class="contrainer">
            <div class="row">
          <div class="col-md">
            <div class="card mb-4">
              <img src="{{ url('/dashboard/dist/img/4.png') }}" class="card-img-top">
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-4">
              <img src="{{ url('/dashboard/dist/img/5.png') }}" class="card-img-top">
            </div>
          </div>
          <div class="col-md">
            <div class="card mb-4">
              <img src="{{ url('/dashboard/dist/img/6.png') }}"class="card-img-top">
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
</div>


@endsection
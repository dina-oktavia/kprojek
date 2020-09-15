@extends('layouts.dashboard')

@section('title')
    Upload Permission Letter
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
  .text h4{
      text-align: center;
      margin-top: 40px;
      font-weight: bold;
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
                <img src="{{ url('/dashboard/dist/img/download.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                <b style="color: white; margin-left:20px;">Upload Permission Letter</b>
            </a>
        </nav>
    <div class="text">
        <h4>UPLOAD YOUR PERMISSION LETTER <br>DOWN HERE</h4>
 <div class="card text-center"  style="background:#67D3FF; width: 600px; height: 200px; margin-left: 150px; margin-top: 50px;">
  <div class="card-header"  style="width: 600px; height: 200px;">
  <div class="card-body">
  <div class="image">
  <img src="{{ url('/dashboard/dist/img/upload.png') }}" style="width:60px;">
  </div>
  <div class="btn-group" role="group" style=" margin-top: 15px;">
    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; color: black; border-radius: 5px;box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.25);">
    <img src="{{ url('/dashboard/dist/img/upload.png') }}" style="width:20px;"> Choose File
    </button>
    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      <a class="dropdown-item" href="#">Dropdown link</a>
      <a class="dropdown-item" href="#">Dropdown link</a>
    </div>
  </div>
</div>
    <h5 class="card-title" style="margin-left: 230px; color: white; font-size: 13px; margin-top: -15px;">Drag your file here</h5>
  </div>
</div>
    </div>
@endsection

@extends('layouts.dosen')

@section('title')
    Dosen E-Absen Poliwangi 
@endsection

@section('style')
<style>
  .brand-text b{
    font-size: 20px;
  }
</style>
@endsection


@section('content')
  {{-- <h1>hay admin</h1> --}}
<div class="col-md-6">
      <img src="{{ url('/dashboard/dist/img/home.png') }}" class="card-img" style="width: 800px; margin-left: -90px;">
    </div>
    <div class="col-md-5">
      <div class="card-body" style="margin-top: 100px;" >
        <h2 class="card-title" style="font-size: 30px; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); #B3A3A3; color: #73BCF3; line-height: 45px;">WELCOME  TO <br> E-ABSEN POLIWANGI </h2>
        <h1 class="card-text" style="font-weight: bold; font-size: 45px;">SCAN FOR YOUR <br>ATTENDANCE </h1>
        <p class="card-text"><small class="text-muted">E-ABSEN Poliwangi  is a website created to facilitate Banyuwangi State Polytechnic students in conducting a web-based online attendance process using QRCode.</small></p>
      </div>
    </div>
  </div>
</div>
@endsection



@extends('layouts.dashboard')

@section('title')
    History
@endsection

 @section('style')
  <style>
  .brand-text b{
    font-size: 20px;
  }
  .card{
      width:100%;
      height: 570px;
      margin-top: 0;
  }
  .card img{
      margin-top: 30px;
  }
  .btn{
      background-color: #62CBFF;
      color: white;
      border-radius: 5px;
      box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.15);
  }
  .card-body{
      margin-top: 90px;
      margin-right: 50px;
  }
  .card-body a{
    margin-bottom: 20px;
  }
</style>
@endsection

@section('content')
  <div class="row no-gutters">
    <div class="col-md-7">
      <img src="{{ url('/dashboard/dist/img/bg.png') }}" class="card-img">
    </div>
    <div class="col-md-5">
      <div class="card-body">
      <a href="attendance" type="button" class="btn btn-lg btn-block">Attendance History</a>
      <a href="percentage" type="button" class="btn btn-lg btn-block">Percentage of Attendance</a>
      <a href="upload" type="button" class="btn btn-lg btn-block">Upload Permission Letter</a> 
      </div>
    </div>
  </div>
@endsection

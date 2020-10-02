@extends('layouts.admin')

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
      <img src="{{ url('/dashboard/dist/img/app.png') }}" class="card-img">
    </div>
    <div class="col-md-5">
      <div class="card-body">
      <a href="student" type="button" class="btn btn-lg btn-block">Student</a>
      <a href="lecture" type="button" class="btn btn-lg btn-block">Lecture</a>
      <a href="admin" type="button" class="btn btn-lg btn-block">Admin</a> 
      </div>
    </div>
  </div>
@endsection

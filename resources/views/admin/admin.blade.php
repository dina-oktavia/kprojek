@extends('layouts.admin')

@section('title')
    Attendance History (Admin)
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
  .text h5{
    font-size: 13px;
    font-weight: bold;
    margin-left: 30px;
    margin-top: 20px;
  }
  .dropdown{
    margin-left: 30px;
    margin-top: 20px;
  }
  .btn{
    background-color: #63D0FF;
    height: 25px;
    font-size: 11px;
    color: white;
    font-weight: bold;
  }
</style>
@endsection

@section('content')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center" style=" margin-top: -20px;">

<div class="col-xl-10 col-lg-12 col-md-9">

  <div class="card o-hidden border-0 shadow-lg my-5" style="height: 500px;">
  {{-- navbar --}}
      <nav class="navbar navbar-light" style="background-color: #63D0FF; border-radius: 10px 10px 0px 0px;">
      <a class="navbar-brand" href="history">
          <img src="{{ url('/dashboard/dist/img/user.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
          <b style="color: white; margin-left:20px;">Data User (Lecture)</b>
      </a>
      </nav>

      <!-- text -->
      <div class="text">
        <h5>Department : Informatic Engineering<br>Total : 1 persons</h5>
        <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                2020/2021
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div> 
      </div>
          
            <!--table  -->
            <table class="table table-hover table-bordered" style="margin-top: 10px; width:850px; margin-left: 30px; font-size:12px;">
                <thead style="background-color: #63D0FF;">
                  <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">NIP/NIK</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Status</th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="text-center" >1</th>
                    <td class="text-center">198503302003121002</td>
                    <td class="text-center" >Rubby Charlotte</td>
                    <td class="text-center" >User</td>
                    <td class="text-center" >active</td>
                    <td class="text-center">
                      <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>

                    <!-- btn -->
              <div class="save" style="margin-left: 400px;">
                      <button type="button" class="btn btn-sm" style="background-color: #63D0FF; font-size: 13px; margin-right: 30px;">
                      <img src="{{ url('/dashboard/dist/img/add.png') }}" style="width: 13px; margin-left:2px; margin-top: -5px; margin-right: 10px;">Add Admin
                      </button>
              </div>
        </div>
      </div>
    </div>
</div>
@endsection
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

        <div class="card o-hidden border-0 shadow-lg my-5" style="height: 700px;">
        {{-- navbar --}}
            <nav class="navbar navbar-light" style="background-color: #63D0FF; border-radius: 10px 10px 0px 0px;">
            <a class="navbar-brand" href="/">
                <img src="{{ url('/dashboard/dist/img/calendar.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                <b style="color: white; margin-left:20px;">Attendance History</b>
            </a>
            </nav>
        <div class="text" style=" margin-top: 20px;">
            <h5 style=" margin-left: 30px; font-size: 15px; font-weight:bold;">Years    
             <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px; font-size: 12px;">
                    2020/2021
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    </div>
                </div>
                </div></h5>     
            <h5  style=" margin-left: 30px; font-size: 15px; font-weight:bold;">Grade
            <div class="btn-group" role="group">
                    <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px; font-size: 12px;">
                    Odd
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    </div>
                </div>
                </div></h5>
            </div>

            <!--table  -->
            <table class="table table-hover table-bordered" style="margin-top:-100px; width:850px; margin-left: 30px; height: 100px;">
                <thead style="background-color: #63D0FF;">
                  <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Class</th>
                    <th scope="col">Time</th>
                    <th class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th>1</th>
                    <td>Ruby Charlotte</td>
                    <td>2D</td>
                    <td>6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                      <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff;">Print Out</button>
                    </td>
                  </tr>
                  <tr>
                    <th>2</th>
                    <td>Ruby Charlotte</td>
                    <td>2D</td>
                    <td>6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                      <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff;">Print Out</button>
                    </td>
                  </tr>
                  <tr>
                    <th>3</th>
                    <td>Ruby Charlotte</td>
                    <td>2D</td>
                    <td>6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                      <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff;">Print Out</button>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>
</div>


@endsection
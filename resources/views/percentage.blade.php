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
    height: 25px;361855491003
    font-size: 11px;
    color: white;
    font-weight: bold;
  }
</style>
@endsection

@section('content')
<div class="container" style="margin-top: -30px;">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5" style="height: 520px;">
        {{-- navbar --}}
            <nav class="navbar navbar-light" style="background-color: #63D0FF; border-radius: 10px 10px 0px 0px;">
            <a class="navbar-brand" href="/">
                <img src="{{ url('/dashboard/dist/img/chart.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                <b style="color: white; margin-left:20px;">Percentage of Attendance</b>
            </a>
            </nav>

<!-- isinya -->
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

<!-- table -->
            <table class="table table-hover table-bordered" style="margin-top: -13px; width:850px; margin-left: 30px; font-size: 13px;">
                <thead style="background-color: #63D0FF;">
                  <tr class="text-center">
                    <th scope="col">Courses</th>
                    <th scope="col">1</th>
                    <th scope="col">2</th>
                    <th scope="col">4</th>
                    <th scope="col">5</th>
                    <th scope="col">6</th>
                    <th scope="col">7</th>
                    <th scope="col">8</th>
                    <th scope="col">9</th>
                    <th scope="col">10</th>
                    <th scope="col">11</th>
                    <th scope="col">12</th>
                    <th scope="col">13</th>
                    <th scope="col">14</th>
                    <th scope="col">15</th>
                    <th class="text-center">
                      <img src="{{ url('/dashboard/dist/img/percentage.png') }}" style="width: 20px;">
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="text-center">Administrasi Server</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr class="text-center">
                    <th>Grafika Komputer</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr class="text-center">
                    <th>Jaringan Komputer Lanjut</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  <tr class="text-center">
                    <th>Kewirausahaan Teknologi </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr class="text-center">
                    <th>Pemrograman Web </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr class="text-center">
                    <th>Pengembangan Aplikasi Mobile </th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
              </table>
                        <!-- btn -->
              <div class="save" style="margin-left: 400px;">
                      <button type="button" class="btn btn-sm" style="background-color: #63D0FF">Download
                        <img src="{{ url('/dashboard/dist/img/direct.png') }}" style="width: 15px; margin-left:7px; margin-top: -5px;">
                      </button>
              </div>
        </div>
      </div>
    </div>
</div>
                    
@endsection

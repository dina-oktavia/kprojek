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
html {
  font-family: verdana;
  font-size: 10pt;
  line-height: 25px;
}
table {
  border-collapse: collapse;
  width: 300px;
  overflow-x: scroll;
  display: block;
}
thead {
  background-color: #EFEFEF;
}
  thead, tbody {
    display: block;
  }
  tbody {
    overflow-y: scroll;
    overflow-x: hidden; 
    height: 250px;
  }
td,
th {
  min-width: 170px;
  height: 25px;
  border: dashed 1px lightblue;
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
          <img src="{{ url('/dashboard/dist/img/calendar.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
          <b style="color: white; margin-left:20px;">Attendance History</b>
      </a>
      </nav>

      <!-- text -->
      <div class="text">
        <h5>Courses : Grafika Komputer <br>Class : TI 2-D </h5>
        <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Today
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
                    <th scope="col1" style="width: 10px;">No</th>
                    <th scope="col2">Name</th>
                    <th scope="col3">Status</th>
                    <th scope="col4">Time</th>
                    <th class="text-center"></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                      <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                    <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                    <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                    <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                    <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                    <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                    <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                    <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                    <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <th class="text-center" >1</th>
                    <td>Ruby Charlotte</td>
                    <td class="text-center" >Present</td>
                    <td class="text-center" >6 Jul 2020 at 07.15 a.m</td>
                    <td class="text-center">
                    <button class="btn badge-pill" style="background-color: #63D0FF; border-radius: 3px; color:#fff; margin-right: 10px;">Edit</button>
                      <button class="btn badge-pill" style="background-color: #D83434; border-radius: 3px; color:#fff;">Delete</button>
                    </td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>
</div>
@endsection
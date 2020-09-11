@extends('layouts.admin')

@section('title')
    Profile
@endsection

@section('style')
<style>
    .card-container{
        width: 300px;
        height: 500px;
        background: #FFF;
        border-radius: 6px;
        position: absolute;
        top: 50%;
        left: 20%;
        transform: translate(-50%, -50%);
        box-shadow: 0px 1px 10px 1px #000;
        overflow: hidden;
        display: inline-block;
    }
    .upper-container{
        height: 100px;
        background:#7F00FF;
    }
    .image-container{
        background: white;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        transform: translate(110px,70px)
    }
    .image-container img {
        background: white;
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }
    .lower-container{
        height: 400px;
        background:white;
        padding: 20px;
        padding-top:67px;
        text-align: center;
    }
    .lower-container h3, h4{
        box-sizing: border-box;
        line-height: .6;
        font-weight: lighter;
    }
    .lower-container h4{
        font-size: 20px;
        font-weight: normal;
    }
    .qrcode img{
        width: 200px;
        margin-top: 25px;
    }
    .lower-container p{
        font-size: 16px;
        color: gray;
        margin-bottom: 30px;
    }
    
</style>
@endsection

@section('content')
  <div class="card-container">
        <div class="upper-container">
            <div class="image-container">
                <img src="{{ url('/dashboard/dist/img/avatar3.png') }}" alt="">
            </div>
        </div>
        <div class="lower-container">
            <div>
                <h3><b>RUBBY CHARLOTTE</b> </h3>
                <h4>341855401098</h4>
            </div>
            <div class="qrcode">
                <img src="{{ url('/dashboard/dist/img/qrcode.png') }}">
            </div>
            <div>
                <p>scan this code for absences</p>
            </div>
        </div>
        </div>  
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
    </div>
  </div>
</div>
</section>

@endsection

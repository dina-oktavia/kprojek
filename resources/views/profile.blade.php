@extends('layouts.dashboard')

@section('title')
    Profile
@endsection

@section('style')
<style>
    .wrappers{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 900px;
        height: 500px;
        display: flex;
        box-shadow: 0 1px 20px 0 rgba(69,90,100,0.80);
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        border-top-right-radius: 5px;
        border-bottom-right-radius: 5px;
    }
    .wrappers .left{
        width: 35%;
        padding: 30px 25px;
        border-top-left-radius: 5px;
        border-bottom-left-radius: 5px;
        text-align: center;
        background-color: #63D0FF;
    }
    .wrappers .left img{
        margin-bottom: 10px;
        border-radius: 5px;
    }
    .wrappers .left h4{
        margin-bottom: 10px;
        color: #fff;
        font-size: 30px;
        font-weight: bold;
    }
    .wrappers .left p{
        font-size: 20px;
        margin-top: -10px;
        color: #fff;
        font-weight: bold;
    }
    .wrappers .left .qrcode p{
        font-size: 12px;
        margin-top: -5px;
        color: #fff;
        font-weight: bold;
    }
    .kanan{
        width: 65%;
        border-top-right-radius:5px;
        border-bottom-right-radius:5px;
        padding: 30px 25px;
    }
    .detail,
    .project,
    .prifacy{
        margin-bottom: 15px;
    }
    .detail h3,
    .project h3,
    .prifacy h3{
        color:  #63D0FF;
        font-weight: bold;
        font-size: 25px;
        border-bottom: 1px solid;
    }
    .data h4,
    .project h4,
    .prifacy {
        font-size: 20px;
        margin-bottom: -4px;
        margin-left: 25px;
    }
    .data p,
    .project p{
        font-size: 15px;
        margin-top: -5px;
        color:  #837474;
        margin-left: 60px;
    }
</style>
@endsection

@section('content')
 
 <div class="wrappers">
    <div class="left">
        <img src="{{ url('/dashboard/dist/img/user.jpg') }}" alt="" width="100">
        <h4>Margot Robbie</h4>
        <p>361855401098</p>
        <div class="qrcode">
        <img src="{{ url('/dashboard/dist/img/qrcode.png') }}" alt="" width="210">
        <p>scan this code for absences</p>
        </div>
    </div>
        <div class="kanan">
            <div class="detail">
                <h3>Details</h3>
                <a href=""style="color:#63D0FF; margin-left: 450px;">Edit Profile</a>
                <div class="detail-data">
                    <div class="data">
                        <h4 style="margin-top:-20;">Email</h4>
                        <p style="color:#63D0FF;">margotrobbie@gmail.com</p>
                    </div>
                    <div class="data">
                        <h4>City</h4>
                        <p>Banyuwangi</p>
                    </div>
                </div>
            </div>
            <div class="project">
                <h3>Login Activity</h3>
                <div class="project-data">
                    <div class="data">
                        <h4>First access to site </h4>
                        <p>Thursday, 9 May 2019, 09:27  (1 year 82 days)</p>
                    </div>
                    <div class="data">
                        <h4>Last access to site</h4>
                        <p>Wednesday, 29 July 2020, 20:58  (30 minutes)</p>
                    </div>
                </div>
            </div>
            <div class="prifacy">
                <h3 style=" margin-left: -25px;">Privacy and policies</h3>
                <div class="prifacy-data">
                    <div class="data">
                        <h4 style="color=#63D0FF; margin-left:-5px;">Data retention summary</h4>
                    </div>
                </div>
            </div>
        </div>
 </div>
</section>

@endsection
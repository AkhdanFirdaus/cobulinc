@extends('layouts.app')
@section('content')
<div class="container">
    <div class="wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="feature-box">
                    <!-- <h1 class="hadding">Welcome FahrizSite</h1> -->
                    <h1> Welcome To Solusi</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid id illum, quidem, dignissimos
                        repellat labore natus laborum, ratione itaque ducimus ullam nesciunt illo tempora exercitationem
                        porro magni numquam eligendi sapiente! </p>

                    <a href="" class="btn-one">Read More</a>
                    <a href="" class="btn-two">Contact Us </a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{asset('img/human.png')}}" alt="" class="feature-img">

            </div>
        </div>
    </div>
</div>
@endsection

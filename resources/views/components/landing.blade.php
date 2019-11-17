@extends('layouts.app')
@section('content')
<!--  -->

<!--==========================
        Intro Section
      ============================-->
<section id="intro" class="clearfix">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last slideInUp animated delay-1s fast">
                <h2>Solusi<br>for Your <span>Activity!</span></h2>
                <div>
                    <a href="{{route('login')}}" class="btn-get-started scrollto">Get Started</a>
                </div>
                <!-- <img src="{{asset('img/undraw_multitasking_hqg3.svg')}}" alt="" width="100%"> -->

            </div>

            <div class="col-md-6 intro-img order-md-last order-first lightSpeedIn animated">
                <img src="{{asset('img/undraw_multitasking_hqg3.svg')}}" alt="" width="100%">


            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">








    @endsection

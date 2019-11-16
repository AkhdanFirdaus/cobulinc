@extends('layouts.app')
@section('content')
<!--  -->

<!--==========================
        Intro Section
      ============================-->
<section id="intro" class="clearfix">
    <div class="container d-flex h-100">
        <div class="row justify-content-center align-self-center">
            <div class="col-md-6 intro-info order-md-first order-last">
                <h2>Solusi<br>for Your <span>Activity!</span></h2>
                <div>
                    <a href="{{route('login')}}" class="btn-get-started scrollto">Get Started</a>
                </div>
                <img src="{{asset('img/human.png')}}" alt="">
            </div>

            <div class="col-md-6 intro-img order-md-last order-first">
                <img src="img/intro-img.svg" alt="" class="img-fluid">
            </div>
        </div>

    </div>
</section><!-- #intro -->

<main id="main">



    <!--==========================
          Features Section
        ============================-->
    <section id="features">
        <div class="container">

            <div class="row feature-item">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="img/features-1.svg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                    <p>
                        Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae
                        perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia
                        recusandae non ad at et a.
                    </p>
                    <p>
                        Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis
                        deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro
                        rerum eum eum.
                    </p>
                </div>
            </div>




            @endsection

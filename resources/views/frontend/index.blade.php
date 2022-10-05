@extends('layouts.app')

@section('content')

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>



<!-- SLIDER -->
<div class="owl-carousel owl-theme hero-slider">
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                @foreach($guitars as $guitar)
                    <div class="col-12 text-center text-white">
                    <img src="{{asset('/storage/images/'.$guitar['image']) }}" class="d-block w-100" alt="...">
                        
                    </div>
                </div>
            </div>
        </div>
                @endforeach
</div>


<section class="text-center">
        <h4 class="mb-5"><strong>View your favorite Guitars</strong></h4>
        <div class="row">
        @foreach($guitars as $guitarlist)
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
              <a href="{{ url('/guitar/'.$guitarlist->id)}}">
                <img src="{{asset('/storage/images/'.$guitarlist['image']) }}" class="img-fluid">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$guitarlist['name']}}</h5>
                <p class="card-text">
                {{$guitarlist['price']}}
                </p>
                
              </div>
            </div>
          </div>

        @endforeach
      
        
      </section>

      



        <section id="milestone">
        <div class="container">
            <div class="row text-center justify-content-center gy-4">
                <div class="col-lg-2 col-sm-6">
                <i class="fa fa-beer medium-icon-wrapp"></i>
                    <h1 class="display-4">90K+</h1>
                    <p class="mb-0">Happy Clients</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                <i class="fa fa-heart medium-icon-wrapp"></i>
                    <h1 class="display-4">45M</h1>
                    <p class="mb-0">Products Ordered</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                <i class="fa fa-anchor medium-icon-wrapp"></i>
                    <h1 class="display-4">190</h1>
                    <p class="mb-0">Clients Served</p>
                </div>
                <div class="col-lg-2 col-sm-6">
                <i class="fa fa-user medium-icon-wrapp"></i>
                    <h1 class="display-4">380K</h1>
                    <p class="mb-0">YouTube Subscribers</p>
                </div>
            </div>
        </div>
    </section>


    <section id="services" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Our Services</h6>
                        <h1>What We Do?</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="container">
                      <div class="box shadow1">
                    <i class='fa fa-bullhorn medium-icon'></i>
                        <h5>Digital Marketing</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="container">
                    <div class="box shadow1">
                    <i class='fa fa-laptop medium-icon'></i>
                        <h5>Website Designing</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="container">
                    <div class="box shadow1">
                    <i class='fa fa-apple medium-icon'></i>
                        <h5>Online Selling</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="container">
                    <div class="box shadow1">
                    <i class="fa fa-play-circle medium-icon"></i>
                        <h5>Videography</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                 </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="container">
                    <div class="box shadow1">
                    <i class='fa fa-apple medium-icon'></i>
                        <h5>Brand Identity</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="container">
                    <div class="box shadow1">
                    <i class='fa fa-apple medium-icon'></i>
                        <h5>Business</h5>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                            classical Latin literature from</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <p></p>
    <p></p>
    <p></p>
      @endsection


      </body>
      
</html>


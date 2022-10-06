@extends('layouts.app')

@section('content')

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        
<!-- SLIDER -->
<div class="owl-carousel owl-theme hero-slider">
      @foreach($guitars as $guitarlist)
        <div class="slide slide1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-white">
                    <img src="{{asset('/storage/images/'.$guitarlist['image']) }}" class="img-fluid">
                        <h6 class="text-white text-uppercase">design Driven for professional</h6>
                        <h1 class="display-3 my-4">We craft digital<br />experiances</h1>
                        
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
                
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                
              </div>
            </div>
          </div>

        @endforeach

        
      </section>



      


        <!--services section-->

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
    

      <!-- Facts Start -->
    <div class="container-fluid overflow-hidden my-5 px-lg-0">
      <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 px-4 ps-lg-0">
              <h1 class="text-white mb-4">For Individuals And Organisations</h1>
              <p class="text-light mb-5">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <a href="" class="align-self-start btn btn-secondary py-3 px-5"
                >More Details</a
              >
            </div>
          </div>
          <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 px-4 pe-lg-0">
              <div class="row g-5">
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Happy Clients</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Projects Succeed</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Awards Achieved</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Team Members</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Facts End -->


     <!-- Features Start -->
     <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="row g-3">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                  <i class="fa fa-money medium-icon" aria-hidden="true"></i>
                    <h5 class="mb-0">Easy Process</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                 
                  <i class="fa fa-motorcycle medium-icon"></i>
                    <h5 class="mb-0">Fast Delivery</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                  <i class="fa fa-cc-paypal medium-icon"></i>
                    <h5 class="mb-0">Policy Controlling</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                  <i class="fa fa-cc-paypal medium-icon"></i>
                    <h5 class="mb-0">Money Saving</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >

              <img
                class="position-absolute w-100 h-100"
                src="{{URL::asset('/images/guitarimg8.jpg')}}"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Features End -->

    <!--sliders guitars-->
    <section class="bg-light" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="intro">
                        <h6>Guitars</h6>
                        <h1>Purchase Your Own Guitar</h1>
                        <p class="mx-auto">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="projects-slider" class="owl-theme owl-carousel">
            <div class="project">
                <div class="overlay"></div>
                <img src="{{URL::asset('/images/guitarimg2.jpg')}}" alt="profile Pic" height="440" width="200">
                <div class="content">
                    <h2>Consulting</h2>
                    <h6>Make Your Rehearsals</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="{{URL::asset('/images/guitarimg3.jpg')}}" alt="profile Pic" height="440" width="200">
                
                <div class="content">
                    <h2>Consulting</h2>
                    <h6>Come And Learn</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="{{URL::asset('/images/guitarimg5.jpg')}}" alt="profile Pic" height="440" width="200">
                <div class="content">
                    <h2>Consulting </h2>
                    <h6>Make Your Rehearsals</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="{{URL::asset('/images/guitarimg6.jpg')}}" alt="profile Pic" height="440" width="200">
                <div class="content">
                    <h2>Consulting </h2>
                    <h6>Come And Enjoy</h6>
                </div>
            </div>
            <div class="project">
                <div class="overlay"></div>
                <img src="{{URL::asset('/images/guitarimg7.jpg')}}" alt="profile Pic" height="440" width="200">
                <div class="content">
                    <h2>Consulting </h2>
                    <h6>Make Your Rehearsals</h6>
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


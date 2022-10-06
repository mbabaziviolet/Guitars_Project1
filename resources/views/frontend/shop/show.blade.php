@extends('layouts.app')

@section('content')



<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                    <div class="category-card-img">
                                <img src="{{asset('/storage/images/'.$guitars['image']) }}" class="w-200" alt="guitars">
                            </div>
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                        <h5>{{$guitars->name}}</h5>
                            <label class="label-stock bg-success">In Stock</label>
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / Category / Product / HP Laptop
                        </p>
                       
                                <h5>{{$guitars->price}}</h5>

                                <div class="wrapper">
      <span class="minus">
        <span></span>
      </span>
      <span class="num">1</span>
      <span class="plus">
        <span></span>
        <span></span>
      </span>
    </div>
                           
                         
                      
                        <div class="mt-2">
                            <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                            <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
                        </div>
                        <div class="mt-3">
                          
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    
<div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Visit Our Shop</h1>
                    <p class="text-white mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-primary rounded-pill py-3 px-5" href="{{ url('/contact-us')}}">Contact Us Now</a>
                </div>
            </div>
        </div>
    </div>
                     

    <h1 class="display-5 mb-3"> </h1>
                        <p></p>

@endsection
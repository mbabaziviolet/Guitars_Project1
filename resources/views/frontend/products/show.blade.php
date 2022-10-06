@extends('layouts.app')

@section('content')



<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                <h4 class="mb-4">Our Products</h4>
                    <div class="bg-white border">
                    <div class="category-card-img">
                                <img src="{{asset('/storage/images/'.$products['image']) }}" class="w-200" alt="products">
                            </div>
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                        <h5>{{$products->slug}}</h5>
                            <label class="label-stock bg-success">In Stock</label>
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / Category / Product / HP Laptop
                        </p>
                       
                                <h5>{{$products->price}}</h5>
                                <h5>{{$products->description}}</h5>

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
                            
                            

                        <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                             
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        
                       
                    </div>
                </div>
            </div>


        
@endsection
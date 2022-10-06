@extends('layouts.app')

@section('title','All Categories')
@section('content')

<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <div class="bg-white border">
                    <div class="category-card-img">
                                <img src="{{asset('/storage/images/'.$categories['image']) }}" class="w-200" alt="guitars">
                            </div>
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="product-view">
                        <h4 class="product-name">
                        <h5>{{$categories->name}}</h5>
                            <label class="label-stock bg-success">In Stock</label>
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / Category / Product / HP Laptop
                        </p>
                       
                                <h5>{{$categories->price}}</h5>

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
                            <h5 class="mb-0">{{$categories->brand}}</h5>
                            
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
        </div>
    </div>

@endsection
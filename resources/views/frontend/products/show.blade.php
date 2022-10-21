

@extends('layouts.app')

@section('content')


<!--the show page for a specific product-->
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
                    <a href="/our-products">Go Back</a>
                        <h4 class="product-name">
                        <h5>{{$products->slug}}</h5>
                            <label class="label-stock bg-success text-white">In Stock</label>
                        </h4>
                        <hr>
                        <p class="product-path">
                            Home / Category / Product / Guitars
                        </p>
                       
                                <h5>ugx
                              {{number_format($products['price'])}}</h5>
                                <h6>{{$products->description}}</h6>

    
  
                         
<!--                       
                        <div class="mt-2">
                            <a href="" class="btn btn1"> <i class="fa fa-shopping-cart"></i> Add To Cart</a>
                            <a href="" class="btn btn1"> <i class="fa fa-heart"></i> Add To Wishlist </a>
                        </div> -->
                        <div class="mt-3">
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $products['id'] }}" name="id">
                     
                        <input type="hidden" value="1" name="quantity">
                        <input type="hidden" value="{{ $products->name }}" name="name">
                        <input type="hidden" value="{{ $products->price }}" name="price">
                        <input type="hidden" value="{{ $products->image }}"  name="image">
                        <button class=" btn btn-primary px-2 py-1  bg-blue-800 rounded"><i class="fa fa-shopping-cart"></i> Add To Cart</button>
                    </form>          
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
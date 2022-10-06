@extends('layouts.app')

@section('content')

<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Products</h4>
                </div>

                
                <div class="col-6 col-md-3">
                    <div class="category-card">
                            <div class="category-card-img">
                                <img src="{{asset('/storage/images/'.$products['image']) }}" class="w-100" alt="products">
                            </div>
                            <div class="category-card-body">
                                <h5>{{$products->name}}</h5>
                                <h5>{{$products->price}}</h5>
                               
                                <div class="product-card-img">
                            
                            
                            <div class="mt-2">
                           
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                             
                            </div>
                            
                        </div>
                            </div>
                        </a>
                    </div>
                </div>
                 

            </div>
        </div>
    </div>

        
@endsection
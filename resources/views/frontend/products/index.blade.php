@extends('layouts.app')

@section('content')


<!--the  products index page-->
<div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >
            
              <img
                class="position-absolute w-100 h-100"
                src="{{URL::asset('/images/guitarbst.jpg')}}"
                alt="" >

                
            </div>
    

<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Products</h4>
                </div>
<!--looping through all the guitars-->
                @forelse($products as $productlist)
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="{{ url('/our-products/'.$productlist->id)}}">
                            <div class="category-card-img">
                                <img src="{{asset('/storage/images/'.$productlist['image']) }}" class="w-100" alt="products">
                            </div>
                            <div class="category-card-body">
                                <h5>{{$productlist->name}}</h5>
                                <h5>ugx
                {{number_format($productlist['price'])}}</h5>
                               
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
                @empty

                <div class="col-md-12">
                    <h4>No Products Available</h4>
                </div>

                @endforelse

                

            </div>
        </div>
    </div>

        
@endsection
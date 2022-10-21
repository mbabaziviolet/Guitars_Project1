@extends('layouts.app')

@section('content')


<!--the  products index page-->


<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Search Results</h4>
                </div>
<!--looping through all the products-->
                @forelse($searchProducts as $productlist)
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
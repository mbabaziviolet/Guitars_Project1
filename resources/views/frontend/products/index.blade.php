@extends('layouts.app')

@section('content')



 <div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >
            
              <img
                class="position-absolute w-100 h-100"
                src="https://media.istockphoto.com/photos/blue-electric-guitar-floating-in-blue-background-minimal-concept-idea-picture-id1317627262?k=20&m=1317627262&s=612x612&w=0&h=pUQAlHqbb5F0KDlMD5OWL11p4yfAvKMpkDCs9rlbQzg="
                alt="" ><h1>heee</h1>

                style="object-fit: cover"
              />
            </div>
<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Products</h4>
                </div>

                @forelse($products as $productlist)
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="{{ url('/our-products/'.$productlist->id)}}">
                            <div class="category-card-img">
                                <img src="{{asset('/storage/images/'.$productlist['image']) }}" class="w-100" alt="products">
                            </div>
                            <div class="category-card-body">
                                <h5>{{$productlist->name}}</h5>
                                <h5>{{$productlist->price}}</h5>
                               
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
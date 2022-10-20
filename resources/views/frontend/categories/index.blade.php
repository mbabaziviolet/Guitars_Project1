@extends('layouts.app')

@section('title','All Categories')
@section('content')

<!--the  categories index page-->
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
                    <h4 class="mb-4">Our Categories</h4>
                </div>
<!--loopingthrough all the guitars-->
                @forelse($categories as $categorylist)
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="{{ url('/collections/'.$categorylist->id)}}">
                            <div class="category-card-img">
                                <img src="{{asset('/storage/images/'.$categorylist['image']) }}" class="w-100" alt="guitars">
                            </div>
                            <div class="category-card-body">
                                <h5>{{$categorylist->name}}</h5>
                                <h5>ugx
                {{number_format($categorylist['price'])}}</h5>
                                <div class="product-card-img">
                           
                            <div>
                                
                            </div>
                            <div class="mt-2">
                                <a href="" class="btn btn1">Add To Cart</a>
                                <a href="" class="btn btn1"> <i class="fa fa-heart"></i> </a>
                               
                            </div>
                            
                        </div>
                            </div>
                        </a>
                    </div>
                </div>
                @empty

                <div class="col-md-12">
                    <h4>No guitars Available</h4>
                </div>

                @endforelse

                

            </div>
        </div>
    </div>

@endsection
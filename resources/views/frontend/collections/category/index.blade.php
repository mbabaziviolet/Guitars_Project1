@extends('layouts.app')

@section('title','All Categories')
@section('content')

<div class="py-3 py-md-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mb-4">Our Categories</h4>
                </div>

                @forelse($guitars as $guitarItem)
                <div class="col-6 col-md-3">
                    <div class="category-card">
                        <a href="{{ url('/collections/'.$guitarItem->name)}}">
                            <div class="category-card-img">
                                <img src="{{asset('/storage/images/'.$guitarItem['image']) }}" class="w-100" alt="guitars">
                            </div>
                            <div class="category-card-body">
                                <h5>{{$guitarItem->name}}</h5>
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
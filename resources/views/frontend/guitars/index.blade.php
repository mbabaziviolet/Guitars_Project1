@extends('layouts.app')

@section('content')

<section class="text-center">
        <h4 class="mb-5"><strong>View your favorite Guitars</strong></h4>
        <div class="row">
        @foreach($guitars as $guitarlist)
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
              <a href="{{ url('/'.$guitarlist->id)}}">
                <img src="{{asset('/storage/images/'.$guitarlist['image']) }}" class="img-fluid">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">{{$guitarlist['name']}}</h5>
                <p class="card-text">
                {{$guitarlist['price']}}
                </p>
                </a>
              </div>
            </div>
          </div>

        @endforeach


</section>

@endsection
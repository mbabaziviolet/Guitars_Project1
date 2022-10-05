@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>


  <section style="padding-top:60px;">
  <div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Contact Us
                </div>
                <div class="card-body">
                    @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message_sent')}}
                    </div>

                    @endif
                    <form method="POST" action="{{route('contact.send')}}"enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control"/>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control"/>

                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="Phone" class="form-control"/>

                        </div>

                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea name="msg"  class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary float-right">Submit</button>

                    </form>

                   
                </div>
            </div>
        </div>

    </div>
  </div>

  </section>
  
  <p></p>
  <p></p>
  <p></p>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>








@endsection
</body>

</html>
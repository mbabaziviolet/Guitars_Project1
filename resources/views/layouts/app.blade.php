<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Styles -->
    <!--handling the styling part of the page-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

   
</head>
<body>
    <div id="app">

    @include('layouts.inc.frontend.navbar')

     

        <main>
            @yield('content')
        </main>

      @include('layouts.inc.frontend.footer')


    </div>
   

 

    <!-- Scripts -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}" defer></script>
    <!-- <script src="{{ asset('assets/js/jquery.min.js') }}" defer></script> -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" defer></script>

    <script src="{{ asset('assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('assets/js/app.js') }}" defer></script>




   



</body>
</html>






















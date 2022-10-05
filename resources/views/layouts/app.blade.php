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
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

   
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

 

  <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    
    <!-- Custom scripts -->
    <script type="text/javascript" src="js/script.js"></script>

    <script type="text/javascript" src="src/js/mdb.free.js"></script> 




   



</body>
</html>














<!-- <!doctype html> -->

<!-- <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Guitars</title> -->
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    < Google Fonts Roboto -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" /> -->
    <!-- MDB -->
    <!-- <link rel="stylesheet" href="css/mdb.min.css" /> -->
    <!-- Custom styles -->
    <!-- <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/custom.css" /> -->
<!-- </head> --> 


<!-- <body> -->
      <!--Main Navigation-->
  <!-- <header>
    <style> -->
      <!-- /* Carousel styling */
      #introCarousel,
      .carousel-inner,
      .carousel-item,
      .carousel-item.active {
        height: 100vh;
      } -->

      <!-- .carousel-item:nth-child(1) {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      .carousel-item:nth-child(2) {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      }

      .carousel-item:nth-child(3) {
        background-image: url('https://mdbootstrap.com/img/Photos/Others/images/78.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
      } -->

      <!-- /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #introCarousel {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      } -->
    <!-- </style>


    
    
<body> -->

      <!-- <div>
        <main class="py-4">
            @yield('content')
        </main>
    </div> -->
    


    <!-- Copyright -->
    <!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">Guitars.com</a>
    </div> -->
    <!-- Copyright -->
  <!-- </footer> -->
  <!--Footer-->
    <!-- MDB -->
    <!-- <script type="text/javascript" src="js/mdb.min.js"></script> -->
    
    <!-- Custom scripts -->
    <!-- <script type="text/javascript" src="js/script.js"></script>

    <script type="text/javascript" src="src/js/mdb.free.js"></script> -->

    



<!-- </body>
</html> -->














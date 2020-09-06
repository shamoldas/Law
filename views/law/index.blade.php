{{-- Main Layout --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="Non dynamic content">

   <title>Law</title>

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('css/lawstyle.css')}}">


</head>

<body>
   <div id="app">

  

      <!-- Navbar -->
      @include('includes.navbar')

      <!-- Hero -->
       @include('includes.header')

      <div class="container">

         <div class="row">

            <div class="col-lg-12">

               <!-- Main Content -->
               @yield('content')
               
            </div>

         </div>

      </div>

   </div>

   <!-- Footer -->
   @include('includes.footer')

   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
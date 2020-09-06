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

   <link rel="stylesheet" type="text/css" href="{{url('css/dynamicfooter.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('css/lawstyle.css')}}">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


</head>

<body>
   <div id="app">

      <!-- Navbar -->
      @include('includes.userlayout')

      <!-- Hero -->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
       @include('userprofile.navbar')
     
    </div>
    <div class="col-sm-8 text-left"> 

         <div class="row">
               <!-- Main Content -->
               @yield('content')
         

         </div>
    
    </div>
    <div class="col-sm-2 sidenav">

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
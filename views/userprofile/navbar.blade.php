  <link rel="stylesheet" type="text/css" href="{{url('css/writerdashboard.css')}}">



<!--<nav class="navbar navbar-light" style="background-color: #e3f2fd;">-->



<!--
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Projects</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>

-->
<div class="container-fluid text-center" style="background-color: #B8CC38  ;">    
  <div class="row content">
    <div class="col-sm-2 sidenav" >
      <ul>

         <a class="fa fa-user" href="{{url('userprofile')}}">Profile</a>
         <li><a href="{{url('profile')}}"><i aria-hidden="true"></i><span class="hidden-xs hidden-sm">Contact</span></a></li>
          <li><a href="{{url('application')}}">Application</a></li>
          <li><a href="{{url('blogpost')}}">Blog Post</a></li>
         <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Services</span></a></li>



           <li><a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Statistics</span></a></li>

          <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Users</span></a></li>
          <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Setting</span></a></li>

           




        

           <li> <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                     {{ Auth::user()->name }}<i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm"></span></a></li>





          
         


      </ul> 
    
    </div>
   
  </div>
</div>

</nav>
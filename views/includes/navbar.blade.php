
<!--<nav class="navbar navbar-light" style="background-color: #e3f2fd;">-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav justify-content-end">
	   <li class="nav-item active">
        <a class="nav-link " href="{{url('law')}}" ><strong>ShamolDas/Law </strong><span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('aboutme')}}">ABOUT ME</a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{url('ourteam')}}">OUR TEAM</a>
      </li>

        <li class="nav-item">
        <a class="nav-link" href="{{url('practices')}}">PRACTICES AREA</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('appointment.index')}}">APPOINTMENT</a>
      </li>
      


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRACTICES AREA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Library</a>
          <a class="dropdown-item" href="{{url('dynamic')}}">Living & Culture</a>
          <a class="dropdown-item" href="#">Medical</a>
          <a class="dropdown-item" href="#">Transport</a>
          <a class="dropdown-item" href="#">TSC</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="{{url('contactus')}}">CONTACT US</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('writer')}}">BLOG</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{url('home')}}">Login</a>
      </li>

    </ul>
  </div>
</nav>



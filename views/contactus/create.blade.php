
@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Contact Us</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('contactus')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" />
   </div>
   <div class="form-group">
    <input type="text" name="email" class="form-control" placeholder="Email Address" />
   </div>

   <div class="form-group">
    <input type="text" name="subject" class="form-control" placeholder="Subject" />
   </div>

   <div class="form-group">
    <input type="text" name="message" class="form-control" placeholder="Message" />
   </div>

   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
    <a href="{{route('contactus.index')}}" class="btn btn-primary">Home</a>
   </div>
  </form>
 </div>
</div>
@endsection

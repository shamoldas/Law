@extends('userprofile.userlayout')
@section('content')


<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Profile</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('UserprofileController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Enter  Name" />
   </div>
   <div class="form-group">
    <input type="text" name="email" class="form-control" value="{{$user->email}}" placeholder="Email Address" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection

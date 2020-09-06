@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Contact Us</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('contactus.create')}}" class="btn btn-primary">Add</a>

   <br />
   <br />
  </div>

   <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Subject</th>
    <th>Message</th>
   </tr>
    @foreach($contactuses as $row)

   <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['email']}}</td>
    <td>{{$row['subject']}}</td>
    <td>{{$row['message']}}</td>
  
   </tr>
   @endforeach
 
  </table>
 
 </div>
</div>
<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>
@endsection

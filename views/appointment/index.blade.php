@extends('includes.layout')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Appointment Form</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('appointment.create')}}" class="btn btn-primary">Book Appointment</a>

   <br />
   <br />
    <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Date</th>
    <th>Category</th>

   </tr>
   @foreach($appointments as $row)
   <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['emaill']}}</td>
    <td>{{$row['date']}}</td>
    <td>{{$row['category']}}</td>
  
   
   </tr>
   @endforeach
  </table>
  </div>
 
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

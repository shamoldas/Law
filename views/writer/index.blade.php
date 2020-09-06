@extends('includes.layout')

@section('content')


<section>
<div class="container">
 <div class="text pt-6">


   @foreach($contact as $row)
                <h3>Author:{{$row['name']}}</h3>
                <h4 class="position mb-2">Title:<td>{{$row['job_title']}}</td></h4>
                <p><td>{{$row['address']}}</td></p>
      @endforeach
               
</div>
</div>
</section>







<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Contact List</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('writer.create')}}" class="btn btn-primary">Add</a>

   <br />
   <br />
    <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Job_Title</th>
    <th>Address</th>

   </tr>
   @foreach($contact as $row)
   <tr>
    <td>{{$row['name']}}</td>
    <td>{{$row['email']}}</td>
    <td>{{$row['phone']}}</td>
    <td>{{$row['job_title']}}</td>
    <td>{{$row['address']}}</td>
  
   
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

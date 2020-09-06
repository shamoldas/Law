@extends('userprofile.userlayout')
@section('content')

<br>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <hr><center><h3 style="color: green;"><b>Our Team Contact List</b></h3></center><hr/>

          </div>
        </div>
      </div>
 

  <table class="table table-bordered table-striped">
   <tr>
    <th>Name</th>
    <th>Designation</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Address</th>
   </tr>
    @foreach($users as $row)
  <tr>
    <td>{{$row['name']}}</td>
    <td></td>
    <td>{{$row['email']}}</td>
  
   
   </tr>
   @endforeach
 </table>

   

@endsection
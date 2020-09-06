@extends('userprofile.userlayout')
@section('content')




<br>
<form method="post">
  <table class="table table-bordered">
    <h3> {{ Auth::user()->name }}</h3>
  <tr>
  
  </tr>
        
        <tr>
          <td> Your name</td>
          <td><input class="form-control" value="{{ Auth::user()->name }}" /></td>
        </tr>
        <tr>
          <td> Your email </td>
          <td><input class="form-control" type="email" readonly="true" value="{{ Auth::user()->email }}" /></td>
        </tr>
        
      
        
        <tr>
          <td> Your Mobile </td>
          <td><input class="form-control" type="text" "/></td>
        </tr>
        
        <tr>
          <td> Your Designation</td>
          <td><input class="form-control"  /></td>
        </tr>
        
        
        <tr>
          <td> Your Address</td>
          <td><input class="form-control" value=""  type="text" name=""/></td>
        </tr>
        
        
      </table>
       <ul><a href="{{action('UserprofileController@edit', Auth::user()->id)}}" class="btn btn-warning">Edit</a></ul>

</form>

@endsection

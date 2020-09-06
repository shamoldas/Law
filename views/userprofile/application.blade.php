@extends('userprofile.userlayout')
@section('content')

<br>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <hr><center><h3 style="color: green;"><b>Application</b></h3></center><hr/>

          </div>
        </div>
      </div>

<div class="container"> 
  <div class="row">
    <form method="post">
      <table class="table table-bordered">
        
        <tr>
          <td> Your name</td>
          <td><input class="form-control" /></td>
        </tr>
        <tr>
          <td> Your email </td>
          <td><input class="form-control" type="email" readonly="true" /></td>
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

          <tr>
          
          
              <td colspan="2" align="center">
              <input type="submit" class="btn btn-primary" value="Submit"/>
              
              </td>
        </tr>
        
        
      </table>
    </form>

  </div>
  
</div>



@endsection
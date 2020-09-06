@extends('userprofile.userlayout')
@section('content')

<br>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12">
             <hr><center><h3 style="color: green;"><b>Blog Post</b></h3></center><hr/>

          </div>
        </div>
      </div>






  <form method="post" action="{{url('writer')}}">
   {{csrf_field()}}
      <table class="table table-bordered">
      	
  <Tr>
    <Td colspan="2"><?php echo @$err;?></Td>
  </Tr>
        
        <tr>
          <td> Your name</td>
          <td><input class="form-control" value="{{ Auth::user()->name }}" /></td>
        </tr>
        <!--
        <tr>
          <td> Your email </td>
          <Td><input class="form-control" type="email" readonly="true" value=" {Auth::user()->email }}" /></td>
        </tr>
        

        
        <tr>
          <td> Your Designation</td>
          <Td><input class="form-control"  /></td>
        </tr>
      -->

        <tr>
          <td>Title</td>
          <Td><input name="job_title" class="form-control" placeholder="Blog/Message title here"  /></td>
        </tr>
        
        
        <tr >
          <td> Your Blog/message</td>
        
          <td><label for="exampleFormControlTextarea1">Write Here</label>
    <textarea  name="address" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea></td>
        </tr>

        <tr>
					
					
					<td colspan="2" align="center">
					<input type="submit" class="btn btn-primary" value="Submit"/>
					
					</td>
		</tr>
        
        
      </table>
    </form>

@endsection

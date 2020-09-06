

@extends('includes.layout')

@section('content')
<div class="row">

  <div class="row align-items-center">

 <div class="col-md-6">
  <br />
  <h3 aling="center">Appointment Form</h3>
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

  <form method="post" action="{{url('appointment')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Enter Your Name" />
   </div>
   <div class="form-group">
    <input type="email" name="emaill" class="form-control" placeholder="Email Address" />
   </div>

    <div class="form-group">
    <input type="text" name="mobile" class="form-control" placeholder="Mobile Number" />
   </div>
    <div class="form-group">
    <!--<input type="text" name="date" class="form-control" placeholder="Date" />-->
     <input type="text" name="date" class="date form-control" placeholder="Date" />
   </div>








    <div class="form-group">
    <input type="text" name="category" class="form-control" placeholder="Category/Type" />
    <!--
      <select required="required" class="form-control" name="category">
    <option>
      <label>Family Law</label>
      <label>Business Law</label>
      <label>Criminal Law</label>
      <label>Drag Law</label>
      <label>IT Law</label>
    </option>
    </select>
  -->

   </div>


       <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
        </div>


<!--
    <div class="form-group">
    <input type="text" name="message" class="form-control" placeholder="Your Message " />
   </div>
-->

   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
    <a href="{{route('law.index')}}" class="btn btn-primary">Home</a>
   </div>
  </form>
 </div>

<script type="text/javascript">
    $('.date').datepicker({  
       format: 'mm-dd-yyyy'
     });  
</script> 

<script type="text/javascript">

    $('.timepicker').datetimepicker({

        format: 'HH:mm:ss'

    }); 

</script> 
<script  type="text/javascript" >
  $(function () {
    $('.datetimepicker').datetimepicker();
});
</script>

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('#datetimepicker').datetimepicker();
 });
</script> 
@endsection





<div class="col-md-6 ">
           
                <h2 class="subheading">Appointment</h2>
                <h3 class="mb-4">Make An Appointment</h3>

           
              <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
              <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
           



</div>
</div>
@endsection

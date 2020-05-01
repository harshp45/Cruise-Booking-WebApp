<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('css/style.css')}}"  >
  
</head>


<body>
@include ('navbar1')
 

<div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <form class="form-horizontal"  action="/listcruises/{{$ps->cruise_id}}" method="post" align="center">

            <table class="table table-hover">
            <tr>
       
        <td colspan="4" align="right"><button class="btn btn-primary"><a href="/listcruises">Home</a></button></td>
      </tr>  
<fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    {{csrf_field()}}
    
    <div class="control-group">
        <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Name</label></td>
      
     <td>   <input type="text" id="username" name="username" placeholder="Enter Name" class="input-xlarge" value="{{$ps->cruise_name}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="Email">Type</label></td>
      
     <td>   <input type="text" id="username" name="type" placeholder="Enter Type" class="input-xlarge" value="{{$ps->cruise_type}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    
    



    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Image</label></td>
      
     <td align="center">   <input type="file" id="image" name="image" placeholder="Enter Contact Details" value="{{$ps->cruise_image}}" ></td>
        <!--     -->
      <p></p>
</tr>
    </div>

    
    <div class="control-group">
        <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Source</label></td>
      
     <td>   <input type="text" id="source" name="source" placeholder="Enter Source" class="input-xlarge" value="{{$ps->cruise_source}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="Email">Destination</label></td>
      
     <td>   <input type="text" id="username" name="destination" placeholder="Enter Destination" class="input-xlarge" value="{{$ps->cruise_destination}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    
    

        <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Nights</label></td>
      
     <td>   <input type="text" id="username" name="nights" placeholder="Enter No of Nights" class="input-xlarge" value="{{$ps->cruise_no_of_nights}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>

    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Departure Date</label></td>
      
     <td align="center">   <input type="date" id="image" name="departuredate" placeholder="Enter Contact Details" value="{{$ps->cruise_departure_date}}" ></td>
        <!--     -->
      <p></p>
</tr>
    </div>


        <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="Email">Departure Port</label></td>
      
     <td>   <input type="text" id="username" name="departureport" placeholder="Enter Departure" class="input-xlarge" value="{{$ps->cruise_departure_port}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    
    

        <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Arrival Port</label></td>
      
     <td>   <input type="text" id="username" name="arrivalport" placeholder="Enter Arrival" class="input-xlarge" value="{{$ps->cruise_arrival_port}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>

            <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Price</label></td>
      
     <td>   <input type="text" id="username" name="price" placeholder="Enter Arrival" class="input-xlarge" value="{{$ps->cruise_price}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>

        <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Provider</label></td>
      
     <td>   <input type="text" id="username" name="provider" placeholder="Enter User" class="input-xlarge" value="{{$ps->cruise_provider}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>

</div>

   

    <div class="control-group">
      <!-- Button --> <tr>
      <!-- Username -->
      
      <td colspan="2">          <!--   <button class="btn btn-success">Register</button></td>
    -->
    <input type="submit" value="Update">
       <p></p>
 </tr>

    </div>
    </table>
  </fieldset>
</form>
</table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
	
	
</body>
<script src="js/demo.js"></script>
</html>
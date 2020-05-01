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
@include ('navbar')

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif 

<div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <form class="form-horizontal" action='/listplaces/{{$ps->place_id}}' method="post" align="center">
            <table class="table table-hover">
            <tr >
       
        <td colspan="4" align="right"><button class="btn btn-primary" ><a href="/listplaces">Home</a></button></td>
      </tr>  
<fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    
    {{csrf_field()}}

    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="Email">Location</label></td>
      
     <td>   <input type="text" id="username" name="name" placeholder="Enter Location" class="input-xlarge" value="{{$ps->place_location}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Description</label></td>
      
     <td>   <input type="text" id="username" name="description" placeholder="Enter Description" class="input-xlarge" value="{{$ps->place_description}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    
<div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Image</label></td>
      
     <td align="center">   <input type="file" id="image" name="contact" placeholder="Enter Contact Details" value="{{$ps->place_image}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>

        <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">City</label></td>
      
     
      <td>   <select name="city">
     @foreach($city as $c)
      
      
  <option value="{{$c->city_id}}">{{$c->city_name}}</option>
  @endforeach
        <!--     -->
      <p></p>
</tr>
    </div>

   

    <div class="control-group">
      <!-- Button --> <tr>
      <!-- Username -->
      
      <td colspan="2">   <button class="btn btn-success">Register</button></td>
         <!--     -->
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
<script src="{{asset('js/demo.js')}}"></script>
</html>
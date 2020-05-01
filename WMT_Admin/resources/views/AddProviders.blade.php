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
            <form class="form-horizontal" action='/listproviders' method="POST" align="center">
            <table class="table table-hover">
            <tr >
       
       <td colspan="4" align="right"><button class="btn btn-primary"><a href="/listproviders">Home</button></a></td>
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
     
    <td>   <input type="text" id="username" name="name" placeholder="Enter Name" class="input-xlarge"></td>
       <!--     -->
     <p></p>
</tr>
   </div>

   <div class="control-group">
   <tr>
     <!-- Username --><td align="right">
     <label class="control-label"  for="Email">Email</label></td>
     
    <td>   <input type="email" id="username" name="email" placeholder="Enter Email" class="input-xlarge"></td>
       <!--     -->
     <p></p>
</tr>
   </div>

      <div class="control-group">
   <tr>
     <!-- Username --><td align="right">
     <label class="control-label"  for="Email">Password</label></td>
     
    <td>   <input type="text" id="username" name="password" placeholder="Enter Email" class="input-xlarge"></td>
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

</select></td>
       <!--     -->
     <p></p>
</tr>
   </div>

      <div class="control-group">
   <tr>
     <!-- Username --><td align="right">
     <label class="control-label"  for="username">Address</label></td>
     
    <td>   <input type="text" id="username" name="address" placeholder="Enter Address" class="input-xlarge"></td>
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
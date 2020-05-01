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
 

<div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <form class="form-horizontal" action='/liststate' method="post" align="center">
            <table class="table table-hover">
            <tr >
       
        <td colspan="4" align="right"><button class="btn btn-primary" ><a href="/listcity">Home</a></button></td>
      </tr>  
<fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    
    {{csrf_field()}}

    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="Email">Name</label></td>
      
     <td>   <input type="text" id="username" name="name" placeholder="Enter Location" class="input-xlarge"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="Email">State</label></td>
      
     <td>   <select name="country">
     @foreach($country as $c)
      
      
  <option value="{{$c->country_name}}">{{$c->country_name}}</option>
  @endforeach

</select></td>
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
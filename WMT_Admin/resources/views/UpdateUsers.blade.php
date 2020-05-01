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
            <form class="form-horizontal" action='/listusers/{{$ps->user_id}}' method="post" align="center">
            <table class="table table-hover">
            <tr >
       
        <td colspan="4" align="right"><button class="btn btn-primary" ><a href="/listusers">Home</a></button></td>
      </tr>  
<fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    
    <div class="control-group">
    {{csrf_field()}}
        <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Name</label></td>
      
     <td>   <input type="text" id="username" name="fname" placeholder="Enter Name" class="input-xlarge" value="{{$ps->user_name}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="Email">Email</label></td>
      
     <td>   <input type="email" id="username" name="email" placeholder="Enter Email" class="input-xlarge" value="{{$ps->user_email_id}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">DOB</label></td>
      
     <td>   <input type="date" id="username" name="dob" placeholder="" class="input-xlarge" value="{{$ps->user_dob}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>

        <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Password</label></td>
      
     <td>   <input type="text" id="username" name="password" placeholder="" class="input-xlarge" value="{{$ps->user_pasword}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>
 
    <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Gender</label></td>
      
     <td>   <input type="radio" id="username" name="gender" value="Male" placeholder="" class="input-xlarge" {{ $ps->user_gender == 'Male' ? 'checked' : '' }}>Male&nbsp&nbsp<input type="radio" id="username" name="gender" placeholder="" value="Female" class="input-xlarge" {{ $ps->user_gender == 'Female' ? 'checked' : '' }}>Female</td>
        <!--     -->
      <p></p>
</tr>
    </div>

        <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Mobile No</label></td>
      
     <td>   <input type="text" id="username" name="mobile" placeholder="Enter Contact Details" class="input-xlarge" value="{{$ps->user_mobile_no}}"></td>
        <!--     -->
      <p></p>
</tr>
    </div>

       <div class="control-group">
    <tr>
      <!-- Username --><td align="right">
      <label class="control-label"  for="username">Address</label></td>
      
     <td>   <input type="text" id="username" name="address" placeholder="Enter Address" class="input-xlarge" value="{{$ps->user_address}}"></td>
        <!--     -->
      <p></p>
</tr>
</div>
<!-- <div class="control-group">
    <tr>
      <!-- Username --<td align="right">
      <label class="control-label"  for="username">Image</label></td>
      
     <td align="center">   <input type="file" id="image" name="contact" placeholder="Enter Contact Details" ></td>
        
      <p></p>
</tr>
    </div> -->

   

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
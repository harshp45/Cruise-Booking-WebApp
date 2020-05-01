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
  
    
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <table class="table table-hover">
    <thead>
      <tr >
        <td colspan="8"><input type="text" placeholder="Search" width="50"></td>
        <td colspan="2"><a href="/addusers"><button class="btn btn-primary">Add</button></a></td>
      </tr>
      <tr class="th">
        
        <th>Id</th>
        <th>Email</th>
        <th>Name</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Mobile No</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr> -->
        <!-- <td><img src="images/DSC_0803.JPG" height="50" width="50"></td>
        <td>1</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>John</td>
        <td>male</td>
        <td>965696</td>
        <td>nldjchigskhfksjm</td>
        <td><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-trash"></span></td> -->
        @foreach($users as $c)
      <tr>
      
      <td>{{$c->user_id}}</td>
      <td>{{$c->user_email_id}}</td>
      <td>{{$c->user_name}}</td>
      <td>{{$c->user_dob}}</td>
      <td>{{$c->user_gender}}</td>
      <td>{{$c->user_mobile_no}}</td>
      <td>{{$c->user_address}}</td>
        
        <td><a href="/listusers/edit/{{$c->user_id}}"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<a href="/listusers/delete/{{$c->user_id}}"><span class="glyphicon glyphicon-trash"></span></a></td> 
      </tr>
      @endforeach 
        
      <!-- </tr>
      <tr>
        <td><img src="images/DSC_0803.JPG" height="50" width="50"></td>
        <td>1</td>
        <td>john@example.com</td>
        <td>Doe</td>
        <td>John</td>
        <td>male</td>
        <td>965696</td>
        <td>nldjchigskhfksjm</td>
        <td><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-trash"></span></td>
      </tr> -->
    </tbody>
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
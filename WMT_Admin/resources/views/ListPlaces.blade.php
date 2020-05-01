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
            <table class="table table-hover">
    <thead>
    <tr >
        <td colspan="5"><input type="text" placeholder="Search" width="50"></td>
        <td colspan="1"><a href="/addplaces"><button class="btn btn-primary">Add</button></a></td>
      </tr>
      <tr class="th">
        <th>Image</th>
        <th>Id</th>
        <th>Location</th>
        <th>Description</th>
        <th>City</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr>
      <td><img src="images/DSC_0803.JPG" height="50" width="50"></td>
      <td>1</td>
        <td>CN Tower</td>
        <td>Toronto</td>
        <td>CN Tower is the main attraction.</td>
        
        <td><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-trash"></span></td>
      </tr> -->
      @foreach($places as $c)
      <tr>
      <td><img src="{{$c->place_image}}" height="50" width="50"></td>
      <td>{{$c->place_id}}</td>
      <td>{{$c->place_location}}</td>
      <td>{{$c->place_description}}</td>
      <td>{{$c->city_name}}</td>      
        
        <td><a href="/listplaces/edit/{{$c->place_id}}"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<a href="/listplaces/delete/{{$c->place_id}}"><span class="glyphicon glyphicon-trash"></span></a></td> 
      </tr>
      @endforeach
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
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
        <td colspan="6"><input type="text" placeholder="Search" width="50"></td>
        <td colspan="1"><a href="/addaccesories"><button class="btn btn-primary">Add</a></button></td>
      </tr>
      <tr class="th">
        <th>Image</th>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Category</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr>
      <td><img src="images/DSC_0803.JPG" height="50" width="50"></td>
        <td>1</td>
        <td>Snrking</td>
        <td>Shallow diving equipment</td>
        <td>male</td>
        <td>123</td>
        <td><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-trash"></span></td>
      </tr> -->
      
      @foreach($acc as $c)
      <tr>
      <td><img src="{{$c->accessories_image}}" height="50" width="50"></td>
      <td>{{$c->accessories_id}}</td>
      <td>{{$c->accessories_name}}</td>
      <td>{{$c->accessories_description}}</td>
      <td>{{$c->accessories_category}}</td>
      <td>{{$c->accessories_price}}</td>
        
        <td><a href="/listaccesories/edit/{{$c->accessories_id}}"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<a href="/listaccesories/delete/{{$c->accessories_id}}"><span class="glyphicon glyphicon-trash"></span></a></td> 
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
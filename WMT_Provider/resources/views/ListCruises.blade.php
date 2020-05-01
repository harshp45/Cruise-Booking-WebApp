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
  
    
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <a href="#" class="btn" id="menu-toggle"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
            <table class="table table-hover">
            <thead>
      <tr >
        <td colspan="11"><input type="text" placeholder="Search" width="50"></td>
        <td colspan="1"><a href="/addcruises"><button class="btn btn-primary">Add</a></button></td>
      </tr>
      <tr class="th">
        <td>Image</td>
        <th>Id</th>
        <th>Name</th>
        <th>Type</th>
        <td>Source</S></td>
        <th>Destination</th>
        <th>No of Nights</th>
        <th>Price</th>
        <th>Departure Date</th>
        <th>Departure Port</th>
        <th>Arrival Port</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <!--<tr>
         <td><img src="images/DSC_0803.JPG" height="50" width="50"></td>
        <td>1</td>
        <td>Blue Haroon</td>
        <td>Royal</td>
        <td>New York</td>
        <td>Ireland</td>
        <td>5</td>
        <td>350</td>
        <td>2019-11-03</td>
        <td>Long Island Port</td>
        <td>Queen Port</td>
        <td><span class="glyphicon glyphicon-pencil"></span>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<span class="glyphicon glyphicon-trash"></span></td> 
        </tr>-->
        

        @foreach($cruises as $c)
        <tr>
        <!-- <td>{{$c->cruise_id}}</td> -->
        <td><img src="{{$c->cruise_image}}" height="50" width="50"></td>
        <td>{{$c->cruise_id}}</td>
        <td>{{$c->cruise_name}}s</td>
        <td>{{$c->cruise_type}}</td>
        <td>{{$c->cruise_source}}</td>
        <td>{{$c->cruise_destination}}</td>
        <td>{{$c->cruise_no_of_nights}}</td>
        <td>{{$c->cruise_price}}</td>
        <td>{{$c->cruise_departure_date}}</td>
        <td>{{$c->cruise_departure_port}}</td>
        <td>{{$c->cruise_arrival_port}}</td>
        <td><a href="/listcruises/edit/{{$c->cruise_id}}"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<a href="/listcruises/delete/{{$c->cruise_id}}"><span class="glyphicon glyphicon-trash"></span></a></td> 
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
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
        <!-- <td colspan="1"><a href="/addcruises"><button class="btn btn-primary">Add</a></button></td> -->
      </tr>
      <tr class="th">
        
        <th>Id</th>
        <th>User Id</th>
        
        <td>Source</S></td>
        <th>Destination</th>
        <th>Booking Date</th>
        <th>Sailing Date</th>
        <th>Cruise_id</th>
        <th>Booking Status</th>
        <th>Number Of Persons</th>
        
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
        

        @foreach($ps as $c)
        <tr>
       
        
        <td>{{$c->order_id}}</td>
        <td>{{$c->fk_user_id}}</td>
        <td>{{$c->source}}</td>
        
        <td>{{$c->destination}}</td>
        <td>{{$c->booking_date}}</td>
        <td>{{$c->sailing_date}}</td>
        <td>{{$c->fk_cruise_id}}</td>
        <td>{{$c->booking_status}}</td>
        <td>{{$c->Number_of_persons}}</td>
     
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
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
        <td colspan="3"><input type="text" placeholder="Search" width="50"></td>
        <td colspan="1"><a href="/addjobs"><button class="btn btn-primary">Add</button></a></td>
      </tr>
      <tr class="th">
        
        <th>Id</th>
        <th>Name</th>
        <th>Type</th>
        
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($jobs as $c)
      <tr>
      
      <td>{{$c->job_id}}</td>
        <td>{{$c->job_name}}s</td>
        <td>{{$c->job_type}}</td>
        
        
        <td><a href="/listjobs/edit/{{$c->job_id}}"><span class="glyphicon glyphicon-pencil"></span></a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp<a href="/listjobs/delete/{{$c->job_id}}"><span class="glyphicon glyphicon-trash"></span></a></td> 
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
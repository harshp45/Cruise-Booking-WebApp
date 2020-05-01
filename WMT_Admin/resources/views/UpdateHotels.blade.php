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
                <form class="form-horizontal" action="/listhotels/{{$ps->hotel_id}}" method="post" align="center">
                    <table class="table table-hover">
                        <tr >

                            <td colspan="4" align="right"><button class="btn btn-primary" ><a href="/listhotels">Home</a></button></td>
                        </tr>
                        <fieldset>
                            {{csrf_field()}}
                            <div id="legend">
                                <legend class="">Register</legend>
                            </div>

                            <div class="control-group">
                                <tr>
                                    <!-- Username --><td align="right">
                                        <label class="control-label"  for="username">Name</label></td>

                                    <td>   <input type="text" id="username" name="name" placeholder="Enter Name" class="input-xlarge" value="{{$ps->hotel_name}}"></td>
                                    <!--     -->
                                    <p></p>
                                </tr>
                            </div>

                            <div class="control-group">
                                <tr>
                                    <!-- Place --><td align="right">
                                        <label class="control-label"  for="username">Place</label></td>

                                    <td>   <input type="text" id="place" name="place" placeholder="Enter Place Name" class="input-xlarge" value="{{$ps->hotel_place}}"></td>
                                    <!--     -->
                                    <p></p>
                                </tr>
                            </div>

                            <div class="control-group">
                                <tr>
                                    <!-- description --><td align="right">
                                        <label class="control-label"  for="username">Description</label></td>

                                    <td>   <input type="text" id="description" name="description" placeholder="Enter description" class="input-xlarge" value="{{$ps->hotel_description}}"></td>
                                    <!--     -->
                                    <p></p>
                                </tr>
                            </div>




                            <div class="control-group">
                                <tr>
                                    <!-- Ratings--><td align="right">
                                        <label class="control-label"  for="Email">Ratings</label></td>

                                    <td>   <input type="text" id="ratings" name="ratings" placeholder="Enter Ratings" class="input-xlarge" value="{{$ps->hotel_rating}}"></td>
                                    <!--     -->
                                    <p></p>
                                </tr>
                            </div>


                            <div class="control-group">
                                <tr>
                                    <!-- Image --><td align="right">
                                        <label class="control-label"  for="username">Image</label></td>

                                    <td align="center">   <input type="file" id="image" name="image" placeholder="Add Image" ></td>
                                    <!--     -->
                                    <p></p>
                                </tr>
                            </div>

                            <div class="control-group">
                                <tr>
                                    <!-- City --><td align="right">
                                        <label class="control-label"  for="Email">City</label></td>

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
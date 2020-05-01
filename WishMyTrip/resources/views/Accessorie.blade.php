<?php
/**
 * Created by PhpStorm.
 * User: harsh
 * Date: 2019-10-27
 * Time: 3:47 AM
 */
?>

<html>
<head>
    <title>Accessories</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')

</head>
<body>
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="myBtnContainer" class="text-center mb-3 mt-2">
    <form method="post" action="/accessorieSearch" >
        {{ csrf_field() }}
    <button type="button" class="btn active bg-info text-light" onclick="window.location='http://127.0.0.1:8000/Accessorie'"> General</button>
    <button type="button" class="btn bg-success text-light" onclick="window.location='http://127.0.0.1:8000/accessorieMale'"> For Male</button>
    <button type="button" class="btn bg-secondary text-light" onclick="window.location='http://127.0.0.1:8000/accessorie'"> For Female</button>
    <button type="button" class="btn bg-danger text-light" onclick="window.location='http://127.0.0.1:8000/accessorieKids'"> Kids</button>
    <input class="ml-5 shadow border-dark w-25 mr-3" type="text" id="job" name="job" placeholder="Search Product">
    <button type="submit">Search</button>
    </form>

</div>
<div class="container">
    <div class="row">
        @foreach($accessories as $a)
        <div class="col-sm-4">
            <section class="card mb-5">
                <img class="card-img-top " src="{{ $a->accessories_image }}" style="width: 300px;height: 400px;">
                <div class="card-body">
                    <h3 class="card-title">{{$a->accessories_name}}</h3>
                    <h5 class="card-subtitle">{{$a->accessories_category}}</h5>
                    <p class="card-text"><h1>${{$a->accessories_price}}</h1></p>
                    <p class="card-text">{{$a->accessories_description}}</p>
                </div>
                <div class="list-group list-group-horizontal-md list-group-flush">
                    <a class="list-group-item list-group-item-info text-center d-inline-block" data-toggle="popover"
                       data-placement="bottom" data-trigger="hover"
                       title="{{$a->accessories_description}}" data-content="Swimming Accessorie" href="#"><i class="fas fa-info ">
                            Info</i></a>
{{--                    <a class="list-group-item list-group-item-danger text-center" href="#"><i class="fas fa-cart-plus">--}}
{{--                            Add To Cart</i></a>--}}
{{--                    <a class="list-group-item list-group-item-success text-center" href="#"><i class="fas fa-list">--}}
{{--                            WishList</i></a>--}}
                </div>
            </section>
        </div>
        @endforeach
</div>
</div>
<script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('[data-toggle="popover"]').popover();
    })
</script>
</body>
@include('footer')
</html>



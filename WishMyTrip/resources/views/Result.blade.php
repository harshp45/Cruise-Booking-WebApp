<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')
</head>
<body>

<div class="container mb-2 mt-2 w-100">

@foreach($cruises as $c)
    <div class="d-flex h-45">
        <form method="post" action="/CruiseInfo" class="w-100">
            {{ csrf_field() }}
        <section class="media mb-4 mt-2 bg-dark text-light w-100 ">
            <img class="d-flex mr-4 img-fluid rounded h-100" style="width: 200px;" src="{{$c->cruise_image}}" >
            <input type="hidden" name="idc" value="{{$c->cruise_id}}">
            <input type="hidden" name="idp" value="{{$c->fk_provider_id}}">
            <div class="media-body">
                <h2> {{$c->cruise_name}}</h2>
                <div>
                    <h5> {{$c->cruise_type}}</h5>
                </div>

                <div>
                    <h5>{{$c->cruise_no_of_nights}} /Nights</h5>
                </div>
                <h1 class="text-right"> Price</h1>
                <h2 class="text-right"> ${{$c->cruise_price}}</h2>

                <div class="d-flex justify-content-center login-container">
                 <button type="submit" name="submit" id="login" class="btn login_btn bg-success text-light w-50 " onclick="document.location.href='/CruiseInfo'">
                       More Info
                   </button>
{{--                    <input type="submit" value="More Info">--}}
                </div>
                <br>
            </div>
        </section>
        </form>

    </div>
    @endforeach



</div>




</div>
<script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
</body>
@include('footer')
</html>

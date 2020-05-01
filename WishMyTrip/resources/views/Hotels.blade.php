

<html>
<style>
    .checked {
        color: orange;
    }
</style>
<head>
    <title>Hotels</title>

    <script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')


</head>
<body>
<!--
<div class="text-center mt-2">
    <form>
        <input class="shadow border-dark w-25 mr-3" type="text" id="job" name="job" placeholder="Search By City">
        <input type="image" src="images/Search.png" width="24" height="25">
    </form>
</div>-->
@foreach($hotels as $h)
<div class="container">
    <section class="media mb-4 mt-2 bg-dark text-light ">
        <img class="d-flex mr-3 img-fluid rounded" style="width: 300px;height: 400px;" src="{{$h->hotel_image}}">
        <div class="media-body">
            <h2>{{$h->hotel_name}}</h2>
            <h5>{{$h->hotel_place}}</h5>
            <p>{{$h->hotel_description}}</p>
            @if($h->hotel_rating == 0.5)
                <span class="fa fa-star-half checked"></span>
            @endif
            @if($h->hotel_rating == 1.0)
                <span class="fa fa-star checked"></span>
            @endif
            @if($h->hotel_rating == 1.5)
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
            @endif
            @if($h->hotel_rating == 2.0)
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            @endif
            @if($h->hotel_rating == 2.5)
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
            @endif
            @if($h->hotel_rating == 3.0)
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            @endif
            @if($h->hotel_rating == 3.5)
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
            @endif
            @if($h->hotel_rating == 4.0)
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
            @endif
            @if($h->hotel_rating == 4.5)
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star-half checked"></span>
            @endif
            @if($h->hotel_rating == 5.0)
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            @endif

        </div>
    </section>
</div>
@endforeach
</body>
@include('footer')
</html>



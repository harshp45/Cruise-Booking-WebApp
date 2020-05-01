
<html>
<head>
    <title>Explore Places</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
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
<form class="mb-2 mt-2 text-center" method="post" action="/searchPlace">
    {{csrf_field()}}
    <input class="shadow border-dark w-25 mr-3" type="text" id="job" name="job" placeholder="Search By City">
    <button type="submit">Search</button>
{{--    <input type="image" src="images/Search.png" width="24" height="25">--}}
</form>
<div class="container">
    <div class="row">
        @foreach($places as $p)
        <div class="col-sm-4">
            <section class="card mb-5">
                <img class="card-img-top" src="{{ $p->place_image }}" style="width: 300px;height: 400px;">
                <div class="card-body">
                    <h3 class="card-title">{{$p->place_name}}</h3>
                    <h5 class="card-subtitle">{{$p->place_location}}</h5>
                </div>
                <div class="list-group list-group-flush">
                    <div id="accordion">
                        <div class="card ">
                            <div class="card-header">
                                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                                    More Info
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>{{$p->place_description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endforeach
    </div>
</div>
</div>
</body>

@include('footer')
</html>

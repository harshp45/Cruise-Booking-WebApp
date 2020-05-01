
<html>
<head>
    <title>Home</title>
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
<div class="container mb-2 mt-2">
    <div class="d-flex h-100">
        <div class="w-50">
            <img src="{{asset('images/london.jpg')}}" alt="Wish My Trip" class=" h-100 w-100">
        </div>
        <div class="usercard bg-secondary text-light h-100 w-50">
            <div class="d-flex justify-content-center form_container">

                <form method="post" action="/Result">
                    {{ csrf_field() }}
                    <h2 class="text-center">Search Trips</h2>
                    <br>
                    <div class="form-group form-row mb-0">
                        <div class="form-group col-auto w-50">

                            <select class="form-control input_user" name="source">
                                <option value="">Source</option>
                                @foreach($cruises as $c)
                                <option value=" {{$c->cruise_source}}">{{$c->cruise_source}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group col w-50">
                            <select class="form-control input_user" name="destination">
                                <option value="">Destination</option>
                                @foreach($cruises as $c)
                                    <option value=" {{$c->cruise_destination}}">{{$c->cruise_destination}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                        </div>
                        <input type="date" name="dateoftravel" id="username" class="form-control input_user"
                               placeholder="Date of Travel">
                    </div>

                    <div class="form-group form-row mb-0">
                        <div class="form-group col-auto">
                            <select class="form-control input_user" name="ship">
                                <option value="">Cruise Ship</option>
                                @foreach($cruises as $c)
                                    <option value=" {{$c->cruise_name}}">{{$c->cruise_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col">
                            <select class="form-control input_user" name="dp">
                                <option value="">Departure Port</option>
                                @foreach($cruises as $c)
                                    <option value=" {{$c->cruise_departure_port}}">{{$c->cruise_departure_port}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group form-row mb-0">
                        <div class="form-group col-auto">
                            <select class="form-control input_user" name="nights">
                                <option value="">Length</option>
                                @foreach($cruises as $c)
                                    <option value=" {{$c->cruise_no_of_nights}}">{{$c->cruise_no_of_nights}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col">
                            <select class="form-control input_user" name="providerName">
                                <option value="">Cruise Line</option>
                                @foreach($providers as $p)
                                    <option value=" {{$c->provider_name}}">{{$p->provider_name}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                        </div>
                        <select class="form-control input_user" name="price">
                            <option value="">Price</option>
                            @foreach($cruises as $c)
                                <option value=" {{$c->cruise_price}}">{{$c->cruise_price}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="d-flex justify-content-center login-container">
                        <button type="submit" name="button" id="login" class="btn login_btn bg-dark text-light" onclick="document.location.href='/Result'">
                            Search
                       </button>
{{--                        <input type="submit" value="Search">--}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<h1 class="mb-5 mt-5 shadow text-danger"> Our Offers</h1>

<div class="row">
    <div class="col-sm-4">
        <section class="card mb-5 border-white">
            <img class="card-img-top rounded-circle" src="images/img1.jpg" height="400">
            <div class="card-body">
                <h3 class="card-title">Caribbean Cruises</h3>
                <h5 class="card-subtitle">From $209</h5>
                <p class="card-text">Get Ready For Sum Fun In Summer</p>
            </div>
            <!--            <div class="list-group list-group-flush">-->
            <!--                <a class="list-group-item" href="#">More Info</a>-->
            <!--            </div>-->
        </section>
    </div>
    <div class="col-sm-4">
        <section class="card mb-5  border-white ">
            <img class="card-img-top rounded-circle" src="images/europe.jpg" height="400">
            <div class="card-body">
                <h3 class="card-title">Europe Cruises</h3>
                <h5 class="card-subtitle">From $299</h5>
                <p class="card-text">Explore the Culture And Beauty Of Europe</p>
            </div>
            <!--            <div class="list-group list-group-flush">-->
            <!--                <a class="list-group-item" href="#">More Info</a>-->
            <!--            </div>-->
        </section>
    </div>
    <div class="col-sm-4">
        <section class="card mb-5   border-white">
            <img class="card-img-top rounded-circle" src="images/img3.jpg" height="400">
            <div class="card-body">
                <h3 class="card-title">Family Cruises</h3>
                <h5 class="card-subtitle">from $209</h5>
                <p class="card-text">The Perfect Vaction For Families</p>
            </div>
            <!--            <div class="list-group list-group-flush">-->
            <!--                <a class="list-group-item" href="#">More Info</a>-->
            <!--            </div>-->
        </section>
    </div>
    <div class="col-sm-4">
        <section class="card mb-5   border-white">
            <img class="card-img-top rounded-circle" src="images/img4.jpg" height="400">
            <div class="card-body">
                <h3 class="card-title">HoneyMoon Cruises</h3>
                <h5 class="card-subtitle">from $399</h5>
                <p class="card-text">Romantic Gateway Just For Two</p>
            </div>
            <!--            <div class="list-group list-group-flush">-->
            <!--                <a class="list-group-item" href="#">More Info</a>-->
            <!--            </div>-->
        </section>
    </div>
    <div class="col-sm-4">
        <section class="card mb-5   border-white">
            <img class="card-img-top rounded-circle" src="images/img5.jpg" height="400">
            <div class="card-body">
                <h3 class="card-title">Last Minute Cruises</h3>
                <h5 class="card-subtitle">from $199</h5>
                <p class="card-text">Sail Soon - Get Deep Discount</p>
            </div>
            <!--            <div class="list-group list-group-flush">-->
            <!--                <a class="list-group-item" href="#">More Info</a>-->
            <!--            </div>-->
        </section>
    </div>


</div>
</div>
<script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
</body>
@include('footer')
</html>

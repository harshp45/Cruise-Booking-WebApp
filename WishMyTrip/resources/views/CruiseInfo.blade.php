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
        <form method="post" action="/bookingDetails" class="w-100">
            {{ csrf_field() }}
        @foreach($provider as $p)
        <section class="media mb-4 mt-2 bg-dark text-light w-100 ">
            <img class="d-flex mr-4 img-fluid rounded h-100" style="width: 200px;" src="{{$c->cruise_image}}" >
            <div class="media-body">
                <input type="hidden" name="idc" value="{{$c->cruise_id}}">
                <input type="hidden" name="idp" value="{{$c->fk_provider_id}}">
                <h2> {{$c->cruise_name}}</h2>
                <div>
                    <h5> {{$c->cruise_type}}</h5>
                </div>
                <div>
                    <h5>{{$c->cruise_no_of_nights}} Nights</h5>
                </div>
                <p>
                </p>
                <p>Source: {{$c->cruise_source}} <br>
                Destination: {{$c->cruise_destination}} </p>
                <hr class="bg-danger">
                <p>Departure Port: {{$c->cruise_departure_port}} <br>
                Arrival Port: {{$c->cruise_arrival_port}} </p>
                <hr class="bg-danger">
                <p>Provider: {{$p->provider_name}} <br>
                    Email Id: {{$p->provider_email_id}} <br>
                    Address: {{$p->provider_address}}</p>

                <div class="d-flex justify-content-center login-container">
                  <button type="submit" name="submit" id="login" class="btn login_btn bg-success text-light w-50 " onclick="document.location.href='/Thanks'">
                        Book Now
                    </button>
{{--                    <input type="submit" name="submit" value="Book Now">--}}
                </div>
                <br>
            </div>
        </section>
        @endforeach
        </form>
    </div>
    @endforeach
</div>

</div>
<script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
</body>
@include('footer')
</html>

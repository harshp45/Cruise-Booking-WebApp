<html>
<head>
    <title>Booking Details</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')
</head>
<body>
<div class="bg-light">

</div>
<div class="container mb-2 mt-2 w-100">
    @foreach($cruises as $c)
        <div class="d-flex h-45">
            <form method="post" action="/bookEmail" class="w-100">
                {{ csrf_field() }}
                @foreach($provider as $p)
                <section class="media mb-4 mt-2 bg-dark text-light w-100 ">
                    <div class="media-body">
{{--                        <h2>Your Order</h2>--}}
                        <h3 class="text-center">Booking Details</h3>
                        <div class="text-center">
                            <input type="hidden" name="idc" value="{{$c->cruise_id}}">
                            <input type="hidden" name="idp" value="{{$c->fk_provider_id}}">
                            <h1>{{$c->cruise_source}} -------------------> {{$c->cruise_destination}}</h1>
                            <input type="hidden" name="source" value="{{$c->cruise_source}}">
                            <input type="hidden" name="destination" value="{{$c->cruise_destination}}">
                            <h3>Bill Details</h3>
                            <hr class="bg-danger w-50">

                            <table class="text-light w-100">
                                <tr>
                                    <td class="text-center">
                                    Cruise Fare
                                    </td>
                                    <td>
                                        {{$c->cruise_price}}   <input type="hidden" name="price" value="{{$c->cruise_price}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        GST
                                    </td>
                                    <td>
                                        {{$c->cruise_price*0.13}}
                                        <input type="hidden" name="tax" value="   {{$c->cruise_price*0.13}}">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        Insurance
                                    </td>
                                    <td>
                                        $60
                                        <input type="hidden" name="insurance" value="$60">

                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        Total
                                    </td>
                                    <td class="text-warning">
                                        {{$c->cruise_price+$c->cruise_price*0.13+60}}
                                        <input type="hidden" name="total" value=" {{$c->cruise_price+$c->cruise_price*0.13+60}}">
                                    </td>
                                </tr>

                            </table>
                            <hr class="bg-primary w-50">
                        </div>


                        <div class="d-flex justify-content-center login-container">
                            <button type="submit" name="submit" id="login" class="btn login_btn bg-success text-light w-50 " >
                                Book Now
                            </button>
                            {{--                    <input type="submit" value="More Info">--}}
                        </div>
                        <br>
                    </div>
                </section>
                    @endforeach
            </form>
            @endforeach

        </div>



</div>

</body>
@include('footer')
</html>

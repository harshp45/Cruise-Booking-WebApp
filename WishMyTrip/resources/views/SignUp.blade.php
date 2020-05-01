
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header1')
</head>
<body class="bg">
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

        <div class="usercard bg-dark text-light h-100 w-100">
            <div class="d-flex justify-content-center form_container">

                <form method="post" action="/SignUp">
                    <h2 class="text-center">Sign Up</h2>
                    <br>
                    {{csrf_field()}}
                    <div class="form-group form-row mb-0">
                        <div class="form-group col-auto">
                            <input type="text" name="fname" id="username" class="form-control input_user"
                                   placeholder="Your First Name" >
                        </div>
                        <div class="form-group col">
                            <input type="text" name="lname" id="username" class="form-control input_user"
                                   placeholder="Your Last Name" >
                        </div>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="email" id="username" class="form-control input_user"
                               placeholder="Your Email ID" >
                    </div>
                    <div class="form-group form-row mb-0">
                        <div class="form-group col-auto">
                            <input type="password" name="password" id="username" class="form-control input_user"
                                   placeholder="Your Password" >
                        </div>
                        <div class="form-group col">
                            <input type="password" name="confirmpassword" id="username" class="form-control input_user"
                                   placeholder="Confirm Password" >
                        </div>
                    </div>
                    <div class="input-group mb-1">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                        </div>
                        <input type="text" name="mobile" id="username" class="form-control input_user"
                               placeholder="Mobile Number" >
                    </div>
                    <h5>Gender</h5>
                    <div class="form-group form-row">
                        <div class="custom-control custom-radio ">
                            <input class="custom-control-input" type="radio" id="spayneut-yes" name="gender"
                                   value="Male" checked>
                            <label class="custom-control-label" for="spayneut-yes">Male</label>
                        </div>

                        <div class="custom-control custom-radio">
                            <input class="custom-control-input" id="spayneut-no" type="radio" name="gender"
                                   value="Female">
                            <label class="custom-control-label" for="spayneut-no">Female</label>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-calendar-week"></i></span>
                        </div>
                        <input type="date" name="dob" id="username" class="form-control input_user"
                               placeholder="Date of Birth" >
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
                        </div>
                        <input type="text" name="address" id="username" class="form-control input_user"
                               placeholder="Your Address" >
                    </div>

                    <div class="d-flex justify-content-center login-container">
                        <button type="submit" name="submit" id="login" class="btn login_btn bg-secondary text-light">
                            SignUp
                        </button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/9fe846089b.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

@include('footer')
</html>


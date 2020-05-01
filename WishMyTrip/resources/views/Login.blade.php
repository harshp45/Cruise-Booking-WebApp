
<html>
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header1')
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
        <div class="w-100">
            <img src="images/clock.jpg" alt="Wish My Trip" class=" h-100 w-100">
        </div>
        <div class="usercard bg-dark text-light h-100">
            <div class="d-flex justify-content-center form_container">

                <form method="post" action="/login">
                    {{ csrf_field() }}
                    <h2 class="text-center">Login</h2>
                    <h5>Email ID</h5>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="email" id="username" class="form-control input_user"
                               placeholder="Your Email ID" >
                    </div>
                    <h5>Password</h5>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control input_pass"
                               placeholder="Your Password">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="rememberme" class="custom-control-input"
                                   id="customControlInline">
                            <label class="custom-control-label" for="customControlInline">Remember me</label>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login-container">
                        <button type="submit" name="submit" id="login" class="btn login_btn bg-secondary text-light">
                            Login
                        </button>

                    </div>
                </form>
            </div>

            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Don't have an account? <a href="/SignUp" class="ml-2">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/Forget">Forget your Password</a>
                </div>
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

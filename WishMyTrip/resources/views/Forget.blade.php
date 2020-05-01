<html>
<head>
    <title>Forget Your Password</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header1')
</head>
<body>
<div class="container mb-2 mt-2 w-100">
        <div class="d-flex h-45">
            <form method="post" action="/forget" class="w-100">
                {{ csrf_field() }}
                    <section class="media mb-4 mt-2 bg-dark text-light w-100 ">
                        <div class="media-body">
                            <h3 class="text-center">Forget Password</h3>
                            <div class="text-center">
                                <br>
                                        <table class="text-light w-100">
                                            <tr>
                                                <td class="text-center">
                                                    <h3 class="text-right">Email:</h3></td>
                                            </td>
                                                <td class="align-middle">
                                        <input type="text" name="email" id="username" class="form-control input_user w-25"
                                               placeholder="Email ID here" required></td>
                                            </tr>
                                        </table>
                                <br>
                            <div class="d-flex justify-content-center login-container">
                                <button type="submit" name="submit" id="login" class="btn login_btn bg-success text-light w-50 " >
                                    Send Mail
                                </button>
                            </div>
                                <br>
                        </div>
                        </div>
                    </section>
            </form>
        </div>
</div>
<div class="w-100 text-center ">
    <p><h1><i>Thanks For Visiting Our Website</i></h1></p>
    <p><h3><i>Have a nice day</i></h3></p>
</div>
</body>
@include('footer')
</html>

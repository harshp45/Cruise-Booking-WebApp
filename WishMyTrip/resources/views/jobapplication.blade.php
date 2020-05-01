<html>
<head>
    <title>Job Application</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')
</head>
<body>
<br><br>
<h2 class="text-center">Job Application</h2><br><br>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if ($message = Session::get('applied'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
@endif

<div class="text-center">
<form method="post" action="/sendemail">
    {{csrf_field()}}
    Full Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="shadow border-dark w-25 mr-3" type="text" id="job" name="fullname" placeholder="Your Name"><br><br>
    Email Address: <input class="shadow border-dark w-25 mr-3" type="text" id="job" name="email" placeholder="Your Email ID"><br><br>
    Job Post: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="shadow border-dark w-25 mr-3" type="text" id="job" name="jobname" value="{{$jobname}}" readonly><br><br>
    <input class="shadow border-dark w-25 mr-3" type="hidden" id="job" name="jobdescription" value="{{$jobdescription}}"><br><br>
   <center> <input class="bg-dark border-dark text-light" type="submit" value="Apply Now"></center>
</form>
</div>

@include('footer')
</body>
</html>

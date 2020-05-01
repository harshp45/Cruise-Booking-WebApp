<html>
<head>
    <title>Careers</title>
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/loginstyle.css')}}">
    @include('header')
</head>
<body>
<h2 class="text-center">Job Listings</h2>
@foreach($careers as $c)
    <form method="post" action="/jobapplication">
        {{csrf_field()}}
        <div id="accordion">
            <div class="card bg-secondary">
                <div class="card-header">
                    <a class="card-link text-light" data-toggle="collapse" href="#collapseOne">
                        {{$c->job_name}} <input type="hidden" name="jobname" value="{{$c->job_name}}">
                    </a>
                </div>
                <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                        <p><span style="color: black; font-size: 10.5pt; font-family: Arial, sans-serif;"> <br> {{$c->job_type}}&nbsp;</span>
                            <input type="hidden" name="jobdescription" value="{{$c->job_type}}">
                        </p>
                        <input class="bg-dark border-dark text-light" type="submit" value="Apply Now">
                    </div>
                </div>
            </div>
        </div>
    </form>
@endforeach

@include('footer')
</body>
</html>


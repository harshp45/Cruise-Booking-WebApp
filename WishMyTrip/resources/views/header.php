<?php
// Start the session
session_start();
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="icon" href="images/Ship.png"> <!-- link to favicon -->
</head>
<style>
    @media all {
        min-width :990px;
    }
</style>
<body>
<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
    <div class="container-fluid" id="harsh">
        <a class="navbar-brand" href="/index"><img src="images/output-onlinepngtools.png" height="100"></a>
        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#myTogglerNav"
                aria-controls="myTogglerNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myTogglerNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/index">Home</a>
                <a class="nav-item nav-link" href="/AboutUs">About Us</a>
                <a class="nav-item nav-link" href="/ContactUs">Contact Us</a>
                <a class="nav-item nav-link" href="/Hotels">Hotels</a>
                <a class="nav-item nav-link" href="/Places">Places</a>
                <a class="nav-item nav-link" href="/Accessorie">Accessories</a>
                <a class="nav-item nav-link" href="/Careers">Careers</a>
                <a class="nav-item nav-link" href="/Login">Sign Out</a>
                <a class="nav-item nav-link" href="/SignUp"> Hello,<?php echo $_SESSION["email"]?></a>
            </div>



        </div>
    </div>
</nav>
<script type="text/javascript" src="{{ URL::asset('js/jquery.slim.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SHIELD - Free Bootstrap 3 Theme">
    <meta name="author" content="Carlos Alvarez - Alvarez.is - blacktie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>CarSpace - example app</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
    <link href="{{ asset('css/animate-custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/respond.min.js') }}"></script>
    <![endif]-->
</head>

<body data-spy="scroll" data-offset="0" data-target="#navbar-main">


<div id="navbar-main">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
                </button>
                <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#home" class="smoothScroll">Home</a></li>
                    <li> <a href="#about" class="smoothScroll"> About</a></li>
                    <li> <a href="#services" class="smoothScroll"> Services</a></li>
                    <li> <a href="#portfolio" class="smoothScroll"> Portfolio</a></li>
                    <li> <a href="#team" class="smoothScroll"> Team</a></li>
                    <li> <a href="#blog" class="smoothScroll"> Stories</a></li>
                    <li> <a href="#contact" class="smoothScroll"> Contact</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    @if(Auth::check())
                        @if(Auth::user()->isAdmin())
                            <li><a data-toggle="tooltip" title="Click here for Admin area" href="{{ route('admin') }}">{{ Auth::user()->name }}</a></li>
                        @else
                            <li><a data-toggle="tooltip" title="Click here for logout" href="{{ route('logout') }}">{{ Auth::user()->name }}</a></li>
                        @endif
                        @else
                        <li><a data-toggle="tooltip" title="Login" href="{{ route('login') }}"><span class="icon icon-user"></span></a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>



<!-- ==== HEADERWRAP ==== -->
<div id="headerwrap" id="home" name="home">
    <header class="clearfix">
        <h1><span class="icon icon-shield"></span></h1>
        <p>We are <u>CarSpace</u> company</p>
        <p>Our job is to make your life easier.</p>
    </header>
</div><!-- /headerwrap -->

<!-- ==== GREYWRAP ==== -->
<div id="greywrap">
    <div class="row">
        <div class="col-lg-4 callout">
            <span class="icon icon-car"></span>
            <h2>Car spaces for you</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div><!-- col-lg-4 -->

        <div class="col-lg-4 callout">
            <span class="icon icon-eye"></span>
            <h2>Easy and safe</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div><!-- col-lg-4 -->

        <div class="col-lg-4 callout">
            <span class="icon icon-heart"></span>
            <h2>Car parking with Love</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div><!-- col-lg-4 -->
    </div><!-- row -->
</div><!-- greywrap -->

<!-- ==== ABOUT ==== -->
<div class="container" id="about" name="about">
    <div class="row white">
        <br>
        <h1 class="centered">A LITTLE ABOUT OUR COMPANY</h1>
        <hr>

        <div class="col-lg-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div><!-- col-lg-6 -->

        <div class="col-lg-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div><!-- col-lg-6 -->
    </div><!-- row -->
</div><!-- container -->

<!-- ==== SECTION DIVIDER1 -->
<section class="section-divider textdivider divider1">
    <div class="container">
        <h1> </h1>
        <hr>
        <p> </p>
    </div><!-- container -->
</section><!-- section -->


<!-- ==== SERVICES ==== -->
<div class="container" id="services" name="services">
    <br>
    <br>
    <div class="row">
        <h2 class="centered">CARSPACE SERVICES FOR YOU</h2>
        <hr>
        <br>
        <div class="col-lg-offset-2 col-lg-8">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Sed eu odio dolor. Integer non odio ut elit sollicitudin cursus. Quisque congue, urna in tincidunt commodo, tellus est lobortis ipsum, id euismod massa metus eget odio. Cras tincidunt pretium quam, quis luctus eros.</p>
        </div><!-- col-lg -->
    </div><!-- row -->

    <div class="row">
        <h2 class="centered">YOUR CAR SAFETY ON FIRST PLACE, ALWAYS.</h2>
        <hr>
        <br>
        <div class="col-lg-offset-2 col-lg-8">
            <img class="img-responsive" src="{{ asset('img/car.png') }}" alt="">
        </div><!-- col -->
    </div><!-- row -->
</div><!-- container -->


<!-- ==== SECTION DIVIDER2 -->
<section class="section-divider textdivider divider2">
    <div class="container">
        <h1> </h1>
        <p></p>
    </div><!-- container -->
</section><!-- section -->


<!-- ==== PORTFOLIO ==== -->
<div class="container" id="portfolio" name="portfolio">
    <br>
    <div class="row">
        <br>
        <h1 class="centered">FREE SPACES ON PARKING - LIVE</h1>
        <hr>
        <br>
        <br>
    </div><!-- /row -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 centered numb">
                <p class="number" style="margin-top: 30px"></p>
                <br>
                <br>
                <br>
                <p>free spaces out of 48</p>
            </div>
            <div class="col-md-8 spaces">
                <div id="first-row"></div>
                <div id="second-row"></div>
            </div>
        </div><!-- /row -->
    </div>
    <br>
    <br>
</div><!-- /container -->


<!-- ==== SECTION DIVIDER3 -->
<section class="section-divider textdivider divider3">
    <div class="container">
        <h1></h1>
        <hr>
        <p></p>
    </div><!-- container -->
</section><!-- section -->


<!-- ==== TEAM MEMBERS ==== -->
<div class="container" id="team" name="team">
    <br>
    <div class="row white centered">
        <h1 class="centered">MEET OUR TEAM BEHIND</h1>
        <hr>
        <br>
        <br>
        <div class="col-lg-3 centered">
            <img class="img img-circle" src="{{ asset('img/team/team01.jpg') }}" height="120px" width="120px" alt="">
            <br>
            <h4><b>Worker 1</b></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies, purus in ultrices aliquet, quam ipsum rutrum justo, non feugiat nibh lectus ut ipsum. Etiam id sapien lorem. Proin convallis in ipsum eu sodales. </p>
        </div><!-- col-lg-3 -->

        <div class="col-lg-3 centered">
            <img class="img img-circle" src="{{ asset('img/team/team02.jpg') }}" height="120px" width="120px" alt="">
            <br>
            <h4><b>Worker 2</b></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies, purus in ultrices aliquet, quam ipsum rutrum justo, non feugiat nibh lectus ut ipsum. Etiam id sapien lorem. Proin convallis in ipsum eu sodales. </p>
        </div><!-- col-lg-3 -->

        <div class="col-lg-3 centered">
            <img class="img img-circle" src="{{ asset('img/team/team03.jpg') }}" height="120px" width="120px" alt="">
            <br>
            <h4><b>CTO</b></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies, purus in ultrices aliquet, quam ipsum rutrum justo, non feugiat nibh lectus ut ipsum. Etiam id sapien lorem. Proin convallis in ipsum eu sodales. </p>
        </div><!-- col-lg-3 -->

        <div class="col-lg-3 centered">
            <img class="img img-circle" src="{{ asset('img/team/team04.jpg') }}" height="120px" width="120px" alt="">
            <br>
            <h4><b>CEO</b></h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies, purus in ultrices aliquet, quam ipsum rutrum justo, non feugiat nibh lectus ut ipsum. Etiam id sapien lorem. Proin convallis in ipsum eu sodales. </p>
        </div><!-- col-lg-3 -->

    </div><!-- row -->
</div><!-- container -->


<!-- ==== SECTION DIVIDER4 ==== -->
<section class="section-divider textdivider divider4">
    <div class="container">
        <h1></h1>
        <hr>
        <p></p>
    </div><!-- container -->
</section><!-- section -->

<!-- ==== STORIES ==== -->
<div class="container" id="blog" name="blog">
    <br>
    <div class="row">
        <br>
        <h1 class="centered">WHAT THE OTHERS SAY</h1>
        <hr>
        <br>
        <br>
    </div><!-- /row -->

    <div class="row">
        <div class="col-lg-6 blog-bg">
            <div class="col-lg-4 centered">
                <br>
                <p><img class="img img-circle" src="{{ asset('img/team/team04.jpg') }}" width="60px" height="60px"></p>
                <h4>Customer One</h4>
                <h5>Published Apr 30.</h5>
            </div>
            <div class="col-lg-8 blog-content">
                <h2>Nice and secure</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies, purus in ultrices aliquet, quam ipsum rutrum justo, non feugiat nibh lectus ut ipsum. Etiam id sapien lorem. Proin convallis in ipsum eu sodales. Morbi ut ligula pellentesque, semper dolor non, consectetur justo. Donec iaculis convallis porta.</p>
                <br>
            </div>
        </div><!-- /col -->

        <div class="col-lg-6 blog-bg">
            <div class="col-lg-4 centered">
                <br>
                <p><img class="img img-circle" src="{{ asset('img/team/team03.jpg') }}" width="60px" height="60px"></p>
                <h4>Customer Two</h4>
                <h5>Published Apr 28.</h5>
            </div>
            <div class="col-lg-8 blog-content">
                <h2>Always first choice</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies, purus in ultrices aliquet, quam ipsum rutrum justo, non feugiat nibh lectus ut ipsum. Etiam id sapien lorem. Proin convallis in ipsum eu sodales. Morbi ut ligula pellentesque, semper dolor non, consectetur justo. Donec iaculis convallis porta.</p>
                <br>
            </div>
        </div><!-- /col -->
    </div><!-- /row -->
    <br>
    <br>
</div><!-- /container -->


<!-- ==== SECTION DIVIDER6 ==== -->
<section class="section-divider textdivider divider6">
    <div class="container">
        <h1>WE ARE IN SOME CITY, USA.</h1>
        <hr>
        <p>Some Address 123</p>
        <p>+34 1234 5678</p>
        <p><a class="icon icon-twitter" href="#"></a> | <a class="icon icon-facebook" href="#"></a></p>
    </div><!-- container -->
</section><!-- section -->

<div class="container" id="contact" name="contact">
    <div class="row">
        <br>
        <h1 class="centered">THANKS FOR VISITING US</h1>
        <hr>
        <br>
        <br>
        <div class="col-lg-4">
            <h3>Contact Information</h3>
            <p><span class="icon icon-home"></span> Some Address 123, NY<br/>
                <span class="icon icon-phone"></span> +34 1234 5678 <br/>
                <span class="icon icon-mobile"></span> +34 9876 5432 <br/>
                <span class="icon icon-envelop"></span> <a href="#"> info@carspace.dev</a> <br/>
                <span class="icon icon-twitter"></span> <a href="#"> @carspace </a> <br/>
                <span class="icon icon-facebook"></span> <a href="#"> CarSpace inc. </a> <br/>
            </p>
        </div><!-- col -->

        <div class="col-lg-4">
            <h3>Newsletter</h3>
            <p>Register to our newsletter and be updated with the latests information regarding our services, offers and much more.</p>
            <p>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="text1" class="col-lg-4 control-label"></label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="text1" placeholder="Your Name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">
                        <button type="submit" class="btn btn-success">Sign in</button>
                    </div>
                </div>
            </form><!-- form -->
            </p>
        </div><!-- col -->

        <div class="col-lg-4">
            <h3>Support Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ultricies, purus in ultrices aliquet, quam ipsum rutrum justo, non feugiat nibh lectus ut ipsum. Etiam id sapien lorem. Proin convallis in ipsum eu sodales. Morbi ut ligula pellentesque, semper dolor non, consectetur justo. Donec iaculis convallis porta.</p>
        </div><!-- col -->

    </div><!-- row -->

</div><!-- container -->

<div id="footerwrap">
    <div class="container">
        <h4>Created by <a href="http://blacktie.co">BlackTie.co</a> - Copyright 2014</h4>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/retina.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/smoothscroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-func.js') }}"></script>

<script>
    $('document').ready(function() {

        freeSpaces();

        setInterval(freeSpaces, 30000);

        function freeSpaces() {
            $.get('/freespaces', function (msg) {

                $('.number').text(msg[1]);

                $('#first-row').empty();
                $('#second-row').empty();

                for (i = 0; i < msg[0].length; i++) {
                    if (i < 24) {
                        if (msg[0][i] == 0) {
                            $('#first-row').append('<div class="col-md-1 space-free text-center">' + (i + 1) + '</div>');
                        } else {
                            $('#first-row').append('<div class="col-md-1 space-taken text-center">' + (i + 1) + '</div>');
                        }
                    } else {
                        if (msg[0][i] == 0) {
                            $('#second-row').append('<div class="col-md-1 space-free text-center">' + (i + 1) + '</div>');
                        } else {
                            $('#second-row').append('<div class="col-md-1 space-taken text-center">' + (i + 1) + '</div>');
                        }
                    }

                }
            });
        }

    });
</script>

</body>
</html>

<html lang="en">
<header>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RikkeiSoft</title>
    
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>-->
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet"> 
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script type="text/javascript" src="{{ URL::asset('js/javascript.js') }}"></script>
</header>
<body>
    <div id="wrapper">
        <div id="header">
            <nav class="nav-header" role="navigation">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" onclick="channgeStyle()">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <image id="logo" src="/images/logo-rikkei.png"/>
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
        <!--                <ul class="nav navbar-nav">
                            <li><a href="{{ url('/home') }}">Home</a></li>
                        </ul>-->

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="about-us" href="{{ url()->route('home') }}#about-us">ABOUT US</a>
                            </li>
                            <li>
                                <a class="about-us" href="{{ url()->route('home') }}#our-products">PRODUCTS</a>
                            </li>
                            <li>
                                <a class="about-us" href="{{ url()->route('post.index')}}">CAREERS</a>
                            </li>
                            <li>
                                <a class="about-us" href="">CONTACT US</a>
                            </li>
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                            <li><a class="about-us" href="{{ url('/login') }}">LOGIN</a></li>
                            <li><a class="about-us" href="{{ url('/register') }}">REGISTER</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
        <div id="footer">
            <div class="footer-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-footer">
                        <a class="container-logo" href="{{ url('/') }}">
                            <image id="logo-footer" src="/images/logo-rikkei.png"/>
                        </a>
                        </div>
                        <div class="footer-content1">
                            <p class="footer-content">Our mission is to enhance people's life by developing high quality software products.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="footer-title">CONTACT US</p>
                            <div class="footer-content2">
                                <p><i class="material-icons">place</i>3rd Floor, Sudico Building, Me Tri Street, Nam Tu Liem District, Hanoi, Vietnam.</p>
                                <p><i class="material-icons">local_phone</i>(+84) 43 6231 685</p>
                                <p><i class="material-icons">local_printshop</i>(+84) 43 6231 686</p>
                                <p><i class="material-icons">local_post_office</i>contact@rikkeisoft.com</p>
                            </div>
                    </div>
                    <div class="col-md-4">
                        <p class="footer-title">CONTACT US</p>

                            <div class="row">
                                    <div class="col-md-6">
                                        <a class="footer-link" href="http://en.rikkeisoft.com/history-and-mission/">History and Mission<br/><br/><br/></a>      
                                        <a class="footer-link" href="http://en.rikkeisoft.com/history-and-mission/why-rikkeisoft/">Why Rikkeisoft<br/><br/><br/></a> 
                                        <a class="footer-link" href="http://en.rikkeisoft.com/history-and-mission/news/">News<br/><br/><br/></a>
                                        <a class="footer-link" href="http://en.rikkeisoft.com/history-and-mission/testimonials/">Testimonials<br/><br/><br/></a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="footer-link" href="http://en.rikkeisoft.com/history-and-mission/">Smartphone Application<br/><br/><br/></a>
                                        <a class="footer-link" href="http://en.rikkeisoft.com/history-and-mission/">Game Development<br/><br/><br/></a>
                                        <a class="footer-link" href="http://en.rikkeisoft.com/history-and-mission/">Web Systems<br/><br/><br/></a>
                                        <a class="footer-link" href="http://en.rikkeisoft.com/history-and-mission/">Business Process System<br/><br/><br/></a>
                                    </div>
                            </div>

                    </div>
                </div>
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-8">Copyright © 2016 by Rikkeisoft Co., Ltd. All rights reserved</div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>
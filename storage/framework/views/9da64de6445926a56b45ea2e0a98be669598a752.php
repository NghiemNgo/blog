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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="<?php echo e(asset('/css/index.css')); ?>" rel="stylesheet"> 
    <script type="text/javascript" src="<?php echo e(URL::asset('js/javascript.js')); ?>"></script>
</header>
<body>
    <div id="wrapper">
        <div id="header">
            <div id="header-container"></div>
        </div>
        <?php echo $__env->yieldContent('content'); ?>
        <div id="footer">
            <div class="footer-wrapper">
                <div class="row">
                    <div class="col-md-4">
                        <div class="logo-footer">
                        <a class="container-logo" href="<?php echo e(url('/')); ?>">
                            <image id="logo-footer" src="images/logo-rikkei.png"/>
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
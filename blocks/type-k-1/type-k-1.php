<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <link href="css/type-3.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/type-3.css');
        ?>
        <script src="js/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>

    <body>
        <div class="type-1" >
            <header id="header">
                <div class="darker-row">
                    <div class="container">
                        <div class="row">
                            <div class=" col-md-6 col-sm-12 col-xs-12">
                                <div class="span4">
                                    <div class="higher-line">
                                        Welcome! Please
                                        <a href="#registerModal" role="button" data-toggle="modal">Register</a> or
                                        <a href="#loginModal" role="button" data-toggle="modal">Login</a>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6 col-sm-12 col-xs-12">
                                <div class="span8">
                                    <div class="topmost-line">
                                    <div class="higher-line">
                                        <a href="my-account.html" class="gray-link">My account</a>
                                        &nbsp; | &nbsp;
                                        <a href="my-account.html" class="gray-link">Wishlist (2)</a>
                                        &nbsp; | &nbsp;
                                        <a href="checkout-step-1.html" class="gray-link">Checkout</a>
                                    </div>
                                    &nbsp;
                                    <div class="lang-currency">
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="famfamfam-flag-gb"></i> English (EN)
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#"><i class="famfamfam-flag-gb"></i> English (EN)</a></li>
                                                <li><a href="#"><i class="famfamfam-flag-si"></i> Slovenian (SI)</a></li>
                                                <li><a href="#"><i class="famfamfam-flag-de"></i> German (DE)</a></li>
                                                <li><a href="#"><i class="famfamfam-flag-fr"></i> French (FR)</a></li>
                                                <li><a href="#"><i class="famfamfam-flag-es"></i> Spanish (ES)</a></li>
                                            </ul>
                                        </div>


                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">USD ($)
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">USD ($)</a></li>
                                                <li><a href="#">EUR (€)</a></li>
                                                <li><a href="#">YEN (¥)</a></li>
                                                <li><a href="#">GBP (£)</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--LoGo- container-->
                <div class="container">
                    <div class="row">
                        <div class=" col-md-6 col-sm-6 col-xs-12">
                            <div class="span7">
                            <a class="brand" href="index.html">
                                <img src="images/logo.png" alt="Webmarket Logo" width="48" height="48">
                                <span class="pacifico">Web market</span>
                                <span class="tagline">Really Cool e-Commerce HTML Template</span>
                            </a>
                            </div>
                        </div>
                        <div class=" col-md-6 col-sm-6 col-xs-12">
                            <div class="span5">
                            <div class="top-right">
                                <div class="icons">
                                    <a href="#"><span class="fa fa-facebook"></span></a>
                                    <a href="#"><span class="fa fa-skype"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-rss"></span></a>
                                    <a href="#"><span class="fa fa-wordpress"></span></a>
                                    <a href="#"><span class="fa fa-android"></span></a>
                                    <a href="#"><span class="fa fa-html5"></span></a>
                                    <a href="#"><span class="fa fa-windows"></span></a>
                                    <a href="#"><span class="fa fa-apple"></span></a>
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </header>
        </div>
    </body>

</html>
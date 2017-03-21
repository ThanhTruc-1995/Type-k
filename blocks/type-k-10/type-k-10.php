<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="images/logo.ico" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type-3.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/style.less', 'css/type-3.css');
        ?>
        <script src="js/jquery/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
        <!--menu-->
        <script src="js/thumb.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $(".dropdown").hover(
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                            $(this).toggleClass('open');
                        },
                        function () {
                            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                            $(this).toggleClass('open');
                        }
                );
            });
        </script>

    </head>

    <body>
        <div class="type">
            <div class="type-10">
                <div class="darker-stripe">
                    <div class="container">
                        <div class="row">
                            
                                <ul class="breadcrumb">
                                    <li>
                                        <a href="index.html">Webmarket</a>
                                    </li>
                                    <li><span class="fa fa-chevron-right"></span></li>
                                    <li>
                                        <a href="shop.html">Shop</a>
                                    </li>
                                    <li><span class="fa fa-chevron-right"></span></li>
                                    <li>
                                        <a href="#">Horsefeathers</a>
                                    </li>
                                    <li><span class="fa fa-chevron-right"></span></li>
                                    <li>
                                        <a href="#">Horsefeathers Shot Surfers T-shirt</a>
                                    </li>
                                </ul>
                          
                        </div>
                    </div>
                </div>

            </div>
            <div class="type-4">
                <div class="container">
                    <div class="push-up top-equal blocks-spacer">
                        <div class="row blocks-spacer">
                            <div class="col-md-5">
                                <div class="product-preview">
                                    <div class="picture">

                                        <img src="images/details_1.png" alt="" width="940" height="940" id="mainPreviewImg">
                                    </div>
                                    <div class="thumbs clearfix">
                                        <div class="thumb_click active ">
                                            <a href="#mainPreviewImg"><img src="images/details_1.png" alt="" width="940" height="940" id="thumb_1"></a>
                                        </div>
                                        <div class="thumb_click">
                                            <a href="#mainPreviewImg"><img src="images/details_2.png" alt="" width="940" height="940" id="thumb_1"></a>
                                        </div>
                                        <div class="thumb_click">
                                            <a href="#mainPreviewImg"><img src="images/details_3.png" alt="" width="940" height="940" id="thumb_1"></a>
                                        </div>
                                        <div class="thumb_click">
                                            <a href="#mainPreviewImg"><img src="images/details_3.png" alt="" width="940" height="940" id="thumb_1"></a>
                                        </div>
                                        <div class="thumb_click">
                                            <a href="#mainPreviewImg"><img src="images/details_3.png" alt="" width="940" height="940" id="thumb_1"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="product-title">
                                    <h1 class="name">Horsefeathers<span class="light">
                                            Shot Surfers T-shirt</span></h1>
                                    <div class="meta">
                                        <span class="tag">$ 59.99</span>
                                        <span class="stock">
                                            <input type="button" class="btn btn-a" value="IN STOCK">
                                            <input type="button" class="btn btn-b" value="OUT OF STOCK">
                                            <input type="button" class="btn btn-c" value="ASK FOR AVAILABILITY">
                                        </span>
                                    </div>
                                </div>
                                <div class="product-description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dolor tellus, tempor ut ultrices ferme ntum, aliquam consequat metus. In vel turpis dolorin dapibus dui. Aenean at auctor neque. Lorem ipsum dolor sit , consectetur elit. Fusce dolor tellus, tempor ut ultrices fermentum, aliquam consequat metus. In vel turpis dolor, in dapibus dui. Aenean at auctor neque.</p>
                                    <hr>

                                    <form action="#" class="form form-inline clearfix" >

                                        <div class="numbered pull-left">
                                            <input class="form-control" type="number" value="1" >
                                        </div>
                                        &nbsp;
                                        <select class="form-control pull-left" id="sel1">
                                            <option>Select Color</option>
                                            <option>Blue</option>
                                            <option>Orange</option>
                                            <option>Black</option>
                                        </select>
                                        &nbsp;
                                        <select class="form-control pull-left">
                                            <option>Select Size</option>
                                            <option>Extra Small</option>
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                            <option>Extra Large</option>
                                            <option>Huge</option>
                                        </select>


                                        <button class="btn btn-d pull-right"><i class="fa fa-shopping-cart" aria-hidden="true"></i> &nbsp; ADD TO CART</button>
                                    </form>
                                    <hr>
                                    <div class="share-item push-down-20">
                                        <div class="row">
                                            <div class="col-md-5">
                                                Share this item with friends:
                                            </div>
                                            <div class="col-md-7">
                                                <button type="button" class="btn btn-xs btn-t"><i class="fa fa-twitter" aria-hidden="true"></i>
                                                    Twitter
                                                </button>
                                                <button type="button" class="btn btn-xs btn-f"><i class="fa fa-facebook" aria-hidden="true"></i>
                                                    Facebook
                                                </button>
                                                <button type="button" class="btn btn-xs btn-g"><i class="fa fa-google" aria-hidden="true"></i>

                                                    Google
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="store-buttons">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <a href="#">Add to a wishlist</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                                    <i class="fa fa-exchange" aria-hidden="true"></i>
                                    <a href="#">Add to compare</a> &nbsp;&nbsp; | &nbsp;&nbsp;
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <a href="#">Email to a friend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
    </body>

</html>
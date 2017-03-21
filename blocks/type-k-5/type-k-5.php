
<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
    <script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/type.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery/jquery.js" type="text/javascript"></script>
    <script src="js/thumb.js" type="text/javascript"></script>
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/type.css');
        ?>

</head>

<body>
    <div class="type-5">
            <div class="boxed-area blocks-spacer">
                <div class="container">
                    <div class="row">
                        <div class="span12">
                            <div class="main-titles lined">
                                <h2 class="title"><span class="light">New</span> Products in the Shop</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row popup-products blocks-spacer">
                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="product col-md-12">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="product.html"><img src="images/dummy/products/product-6.jpg" alt="" width="540" height="374"></a>
                                            <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title">$32</h4>
                                        <h5 class="no-margin">Horsefeathers 475</h5>
                                    </div>
                                    <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    <div class="row-fluid hidden-line">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                        </div>
                                        <div class="col-md-6 align-right">
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="product col-md-12">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="product.html"><img src="images/dummy/products/product-7.jpg" alt="" width="540" height="374"></a>
                                            <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title">$32</h4>
                                        <h5 class="no-margin">Horsefeathers 120</h5>
                                    </div>
                                    <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    <div class="row-fluid hidden-line">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                        </div>
                                        <div class="col-md-6 align-right">
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="product col-md-12">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="product.html"><img src="images/dummy/products/product-8.jpg" alt="" width="540" height="374"></a>
                                            <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title">$32</h4>
                                        <h5 class="no-margin">Horsefeathers 86</h5>
                                    </div>
                                    <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    <div class="row-fluid hidden-line">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                        </div>
                                        <div class="col-md-6 align-right">
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="product col-md-12">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="product.html"><img src="images/dummy/products/product-9.jpg" alt="" width="540" height="374"></a>
                                            <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title">$32</h4>
                                        <h5 class="no-margin">Horsefeathers 66</h5>
                                    </div>
                                    <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    <div class="row-fluid hidden-line">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                        </div>
                                        <div class="col-md-6 align-right">
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="product col-md-12">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="product.html"><img src="images/dummy/products/product-10.jpg" alt="" width="540" height="374"></a>
                                            <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title">$32</h4>
                                        <h5 class="no-margin">Horsefeathers 78</h5>
                                    </div>
                                    <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    <div class="row-fluid hidden-line">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                        </div>
                                        <div class="col-md-6 align-right">
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="product col-md-12">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="product.html"><img src="images/dummy/products/product-11.jpg" alt="" width="540" height="374"></a>
                                            <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title">$32</h4>
                                        <h5 class="no-margin">Horsefeathers 223</h5>
                                    </div>
                                    <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    <div class="row-fluid hidden-line">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                        </div>
                                        <div class="col-md-6 align-right">
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="product col-md-12">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="product.html"><img src="images/dummy/products/product-12.jpg" alt="" width="540" height="374"></a>
                                            <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title">$32</h4>
                                        <h5 class="no-margin">Horsefeathers 309</h5>
                                    </div>
                                    <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    <div class="row-fluid hidden-line">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                        </div>
                                        <div class="col-md-6 align-right">
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-xs-12 col-sm-6">
                            <div class="product col-md-12">
                                <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="product.html"><img src="images/dummy/products/product-13.jpg" alt="" width="540" height="374"></a>
                                            <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <h4 class="title">$32</h4>
                                        <h5 class="no-margin">Horsefeathers 432</h5>
                                    </div>
                                    <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    <div class="row-fluid hidden-line">
                                        <div class="col-md-6">
                                            <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                            <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                        </div>
                                        <div class="col-md-6 align-right">
                                            <span class="icon-star stars-clr"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                            <span class="icon-star"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
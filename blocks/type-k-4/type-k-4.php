
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
         <div class="type-4">
            <div class="container">
               <div class="row">
                  <div class="span12">
                     <div class="push-up over-slider blocks-spacer">
                        <div class="row">
                           <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                              <a href="#" class="btn btn-block banner">
                              <span class="title"><span class="light">SUMMER</span> SALE</span>
                              <em>up to 60% off on all shoes</em>
                              </a>
                           </div>
                           <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                              <a href="#" class="btn btn-block colored banner">
                              <span class="title"><span class="light">FREE</span> SHIPPING</span>
                              <em>on orders over $69</em>
                              </a>
                           </div>
                           <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                              <a href="#" class="btn btn-block banner">
                              <span class="title"><span class="light">NEW</span> PRODUCTS</span>
                              <em>for running on lorem ipsum dolor</em>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row featured-items blocks-spacer">
                  <div class="span12">
                     <div class="main-titles lined">
                        <h2 class="title"><span class="light">Featured</span> Products</h2>
                        <div class="arrows">
                           <a href="#" class="icon-chevron-left" id="featuredItemsLeft" style="display: inline-block;"></a>
                           <a href="#" class="icon-chevron-right" id="featuredItemsRight" style="display: inline-block;"></a>
                        </div>
                     </div>
                  </div>
                  <div class="span12">
                     <div class="caroufredsel_wrapper">
                        <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems" >
                           <div class="slide" >
                              <div class="row">
                                 <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                                    <div class="product">
                                       <div class="product-img featured">
                                          <div class="picture">
                                             <a href="product.html"><img src="images/dummy/featured-products/featured-1.png" alt="" width="518" height="358"></a>
                                             <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Buy</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="main-titles">
                                          <h4 class="title">$62</h4>
                                          <h5 class="no-margin"><a href="product.html">Horsefeathers 610</a></h5>
                                       </div>
                                       <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                                    <div class="product">
                                       <div class="product-img featured">
                                          <div class="picture">
                                             <a href="product.html"><img src="images/dummy/featured-products/featured-2.png" alt="" width="518" height="358"></a>
                                             <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Buy</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="main-titles">
                                          <h4 class="title">$101</h4>
                                          <h5 class="no-margin"><a href="product.html">Horsefeathers 358</a></h5>
                                       </div>
                                       <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                                    <div class="product">
                                       <div class="product-img featured">
                                          <div class="picture">
                                             <a href="product.html"><img src="images/dummy/featured-products/featured-3.png" alt="" width="518" height="358"></a>
                                             <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Buy</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="main-titles">
                                          <h4 class="title">$38</h4>
                                          <h5 class="no-margin"><a href="product.html">Horsefeathers 409</a></h5>
                                       </div>
                                       <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="slide">
                              <div class="row">
                                 <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                                    <div class="product">
                                       <div class="product-img featured">
                                          <div class="picture">
                                             <a href="product.html"><img src="images/dummy/featured-products/featured-1.png" alt="" width="518" height="358"></a>
                                             <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Buy</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="main-titles">
                                          <h4 class="title">$62</h4>
                                          <h5 class="no-margin"><a href="product.html">Horsefeathers 768</a></h5>
                                       </div>
                                       <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                                    <div class="product">
                                       <div class="product-img featured">
                                          <div class="picture">
                                             <a href="product.html"><img src="images/dummy/featured-products/featured-2.png" alt="" width="518" height="358"></a>
                                             <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Buy</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="main-titles">
                                          <h4 class="title">$40</h4>
                                          <h5 class="no-margin"><a href="product.html">Horsefeathers 304</a></h5>
                                       </div>
                                       <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    </div>
                                 </div>
                                 <div class="col-md-4 col-xs-12 col-lg-4 col-sm-4">
                                    <div class="product">
                                       <div class="product-img featured">
                                          <div class="picture">
                                             <a href="product.html"><img src="images/dummy/featured-products/featured-3.png" alt="" width="518" height="358"></a>
                                             <div class="img-overlay">
                                                <a href="product.html" class="btn more btn-primary">More</a>
                                                <a href="#" class="btn buy btn-danger">Buy</a>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="main-titles">
                                          <h4 class="title">$93</h4>
                                          <h5 class="no-margin"><a href="product.html">Horsefeathers 257</a></h5>
                                       </div>
                                       <p class="desc">59% Cotton Lorem Ipsum Dolor Sit Amet esed ultrices sapien nunc nam frignila</p>
                                    </div>
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
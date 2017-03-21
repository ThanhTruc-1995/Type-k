
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
      <div class="type-9">
         <div class="container">
            <div class="push-up blocks-spacer">
               <div class="row">
                  <section class="span12">
                     <div class="underlined push-down-20">
                        <div class="row">
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                              <h3><span class="light">All</span> Products</h3>
                           </div>
                           <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                              <div class="form-inline sorting-by">
                                 <label for="isotopeSorting" class="black-clr">Sort:</label>
                                 <select id="isotopeSorting" class="col-md-3 col-lg-3 col-xs-12 col-sm-3">
                                    <option value="{&quot;sortBy&quot;:&quot;price&quot;, &quot;sortAscending&quot;:&quot;true&quot;}">By Price (Low to High) ↑</option>
                                    <option value="{&quot;sortBy&quot;:&quot;price&quot;, &quot;sortAscending&quot;:&quot;false&quot;}">By Price (High to Low) ↓</option>
                                    <option value="{&quot;sortBy&quot;:&quot;name&quot;, &quot;sortAscending&quot;:&quot;true&quot;}">By Name (Low to High) ↑</option>
                                    <option value="{&quot;sortBy&quot;:&quot;name&quot;, &quot;sortAscending&quot;:&quot;false&quot;}">By Name (High to Low) ↓</option>
                                    <option value="{&quot;sortBy&quot;:&quot;popularity&quot;, &quot;sortAscending&quot;:&quot;true&quot;}">By Popularity (Low to High) ↑</option>
                                    <option value="{&quot;sortBy&quot;:&quot;popularity&quot;, &quot;sortAscending&quot;:&quot;false&quot;}">By Popularity (High to Low) ↓</option>
                                 </select>
                                 <label for="numberShown" class="black-clr">Show:</label>
                                 <select id="numberShown" class="span1">
                                    <option value="9">9</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                 </select>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row popup-products">
                        <div id="isotopeContainer" class="isotope-container isotope" style="position: relative; overflow: hidden; height: 939px;">
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--accessories isotope-item" data-price="1250" data-popularity="4" data-size="xs|l|xl" data-color="orange" data-brand="adidas">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-25.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$1250</h4>
                                       <h5 class="no-margin isotope--title">Lorem Adipiscing Elit Vulputate</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--bags isotope-item" data-price="1286" data-popularity="5" data-size="xs|s|xl|xxl" data-color="red|blue" data-brand="nike">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-11.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$1286</h4>
                                       <h5 class="no-margin isotope--title">Dolor Consectetur Dapibus Est</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--accessories isotope-item" data-price="75" data-popularity="2" data-size="xs|l|xl|xxl" data-color="orange" data-brand="nike">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="stamp red">Sold</div>
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-6.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$75</h4>
                                       <h5 class="no-margin isotope--title">Tincidunt Vel Nisi Ac Condimentum</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--sunglasses isotope-item" data-price="86" data-popularity="2" data-size="m|xl|xxl" data-color="blue" data-brand="s-oliver">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="stamp red">Sold</div>
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-35.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$86</h4>
                                       <h5 class="no-margin isotope--title">Dolor Amet Vivamus Felis</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--bags isotope-item" data-price="439" data-popularity="4" data-size="m|xl|xxl" data-color="green|blue" data-brand="shred">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-25.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$439</h4>
                                       <h5 class="no-margin isotope--title">Vivamus Neque Ut</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--accessories isotope-item" data-price="472" data-popularity="5" data-size="s|m|xl|xxl" data-color="orange" data-brand="puma">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-31.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$472</h4>
                                       <h5 class="no-margin isotope--title">Vel Amet Ut</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--accessories isotope-item" data-price="329" data-popularity="3" data-size="m|xl|xxl" data-color="blue" data-brand="adidas">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-23.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title"><span class="striked">$329</span> <span class="red-clr">$296.1</span></h4>
                                       <h5 class="no-margin isotope--title">Dolor Consectetur</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--socks isotope-item" data-price="86" data-popularity="3" data-size="m|l" data-color="red|blue" data-brand="naish">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-12.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title"><span class="striked">$86</span> <span class="red-clr">$77.4</span></h4>
                                       <h5 class="no-margin isotope--title">Ipsum Tincidunt Est Amet Ut</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--sunglasses isotope-item" data-price="1437" data-popularity="2" data-size="m|l|xl" data-color="orange" data-brand="nike">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="stamp red">Sold</div>
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-18.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$1437</h4>
                                       <h5 class="no-margin isotope--title">Adipiscing Ac</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--trainers isotope-item" data-price="1719" data-popularity="5" data-size="m|xl" data-color="green|purple" data-brand="puma">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-33.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$1719</h4>
                                       <h5 class="no-margin isotope--title">Dolor Elit Ac</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--polo-shirts isotope-item" data-price="305" data-popularity="1" data-size="xs|s|m|l" data-color="green|blue" data-brand="shred">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="stamp green">New</div>
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-1.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$305</h4>
                                       <h5 class="no-margin isotope--title">Consectetur Vulputate</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                           <div class="col-md-3 col-lg-3 col-xs-12 col-sm-3 isotope--target filter--trousers isotope-item" data-price="1718" data-popularity="1" data-size="xs|l|xl" data-color="green|blue" data-brand="puma">
                              <div class="product row">
                                 <div class="product-inner">
                                    <div class="stamp green">New</div>
                                    <div class="product-img">
                                       <div class="picture">
                                          <a href="product.html">
                                              <img alt="" src="images/dummy/products/product-32.jpg"></a>
                                          <div class="img-overlay">
                                             <a class="btn more btn-primary" href="product.html">More</a>
                                             <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                       <h4 class="title">$1718</h4>
                                       <h5 class="no-margin isotope--title">Ipsum Tincidunt</h5>
                                    </div>
                                    <div class="row-fluid hidden-line">
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6">
                                          <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                          <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                       </div>
                                       <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6 align-right">
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
                     <hr>
                     <div class="pagination pagination-centered">
                        <ul>
                           <li><a href="#" class="btn btn-primary"><span class="icon-chevron-left"></span></a></li>
                           <li class="active"><a href="#">1</a></li>
                           <li><a href="#">2</a></li>
                           <li><a href="#">3</a></li>
                           <li><a href="#">4</a></li>
                           <li><a href="#">5</a></li>
                           <li><a href="#" class="btn btn-primary"><span class="icon-chevron-right"></span></a></li>
                        </ul>
                     </div>
                  </section>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
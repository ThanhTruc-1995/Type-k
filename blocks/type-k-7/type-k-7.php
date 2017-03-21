<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/type.css');
        ?>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>

    <body>
        <div class="type-5">
            <div class="container">
                <div class="row">
                    <div class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->

                        <div class="main-titles">
                            <h2 class="title">
                                <span class="icon-chevron-left">
                                    <i class="fa fa-chevron-left" href="#" data-slide="prev"></i>
                                    &nbsp;&nbsp;&nbsp;
                                </span>
                                <span class="light">Latest</span> 
                                <strong>News &nbsp;&nbsp;&nbsp;</strong>
                                <span class="icon-chevron-right" > 
                                    <i class="fa fa-chevron-right" href="#" data-slide="next"></i>
                                </span>

                            </h2>
                        </div>
                        <!---->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-md-12 abc">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="news-item">
                                            <div class="published">12. July, 2013</div>
                                            <h6><a href="#">Title of the Latest News</a></h6>
                                            <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="news-item">
                                            <div class="published">18. July, 2013</div>
                                            <h6><a href="#">Another Amusing News</a></h6>
                                            <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-12 abc">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="news-item">
                                            <div class="published">12. July, 2013</div>
                                            <h6><a href="#">Title of the Latest News</a></h6>
                                            <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="news-item">
                                            <div class="published">18. July, 2013</div>
                                            <h6><a href="#">Another Amusing News</a></h6>
                                            <p>There's a voice that keeps on calling me. Down the road, that's where I'll al ways be. Every stop I make, I make a new friend. Lorem sown the road, that's where I'll always be. Every stop I make, I make a new friend.</p>
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
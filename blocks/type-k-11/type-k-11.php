<!DOCTYPE html>

<html style="background-color: #f3f3f4;">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type.less', 'css/type.css');
        ?>
        <link href="css/type.css" rel="stylesheet" type="text/css" />       
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>

    <body>
        <div class="type">
            <div class="container">
                <div class="row">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active">
                            <a href="#tab-1" data-toggle="tab">Details</a>
                        </li>
                        <li class="">
                            <a href="#tab-2" data-toggle="tab">SIZING CHART</a>
                        </li>
                        <li class="">
                            <a href="#tab-3" data-toggle="tab">COMMENTS</a>
                        </li>
                        <li class="">
                            <a href="#tab-4" data-toggle="tab">SHIPPING DETAILS</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="fade tab-pane active in" id="tab-1">
                            <h3>Product Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dui ante, vulputate at pellentesque eget, viverra ac dolor. Morbi interdum tortor non leo aliquam ac aliquet nulla porta. Morbi id dolor massa, ut ornare augue. Morbi tincidunt magna bibendum enim tristique tristique. Quisque a massa tellus, ac tempor magna. Sed eget ligula tellus, nec pellentesque dolor. Phasellus dictum, mauris non mollis ornare, turpis libero faucibus orci, at fringilla urna leo sodales libero. Aliquam nec lectus mauris. Morbi lectus quam, convallis vel euismod a, auctor non dui. Etiam a nisi risus.</p>
                            <p>Phasellus velit quam, ultrices et hendrerit vitae, suscipit nec dui. Sed at ligula vitae ligula pellentesque dictum. Duis lobortis auctor ipsum vel placerat. Phasellus nisi odio, ornare eget faucibus et, accumsan nec mauris. per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dui ante, vulputate at pellentesque eget, viverra ac dolor.Etiam a nisi risus.</p>
                            <h1>Heading H1 30px</h1>
                            <h2>Heading H2 26px</h2>
                            <h3>Heading H3 20px</h3>
                            <h4>Heading H4 18px</h4>
                            <h5>Heading H5 15px</h5>
                            <p>Phasellus velit quam, ultrices et hendrerit vitae, suscipit nec dui. Sed at ligula vitae ligula pellentesque dictum. Duis lobortis auctor ipsum vel placerat. Phasellus nisi odio, ornare eget faucibus et, accumsan nec mauris. per conubia nostra, per inceptos himenaeos.</p>
                        </div>
                        <div class="fade tab-pane" id="tab-2">
                            <p>
                                Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.
                            </p>
                        </div>
                        <div class="fade tab-pane" id="tab-3">
                            <p>
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.
                            </p>
                        </div>
                        <div class="fade tab-pane" id="tab-4">
                            <p>
                                Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr. Another text here ...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
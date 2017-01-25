<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Foundry Multi-purpose HTML Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body class="scroll-assist">
        @include('navbar')
        <div class="main-container">
            <section class="page-title page-title-2 image-bg overlay">
                <div class="background-image-holder">
                    <img alt="Background Image" class="background-image" src="img/wide-1.jpg" />
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="uppercase mb8">Shop Sidebar</h2>
                            <p class="lead mb0">Curated, Must-Have Products</p>
                        </div>
                        
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-md-push-3">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="select-option">
                                        <i class="ti-angle-down"></i>
                                        <select>
                                            <option selected value="Default">Sort By</option>
                                            <option value="Small">Highest Price</option>
                                            <option value="Medium">Lowest Price</option>
                                            <option value="Larger">Newest Items</option>
                                        </select>
                                    </div>
                                    <!--end select-->
                                </div>
                                <div class="col-md-8 text-right">
                                    <span class="input-lh">Displaying 8 of 8 results</span>
                                </div>
                            </div>
                            <!--end of row-->
                            <div class="row">
                                <div class="col-sm-12">
                                    <hr>
                                </div>
                            </div>
                            <!--end of row-->
                            <div class="row masonry">
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="image-tile outer-title text-center">
                                        <a href="#">
                                            <img alt="Pic" class="product-thumb" src="img/shop-product-1.jpg" />
                                        </a>
                                        <div class="title">
                                            <h5 class="mb0">Adrian
                                                <br /> LambsWool Cap</h5>
                                            <span class="display-block mb16">$49.95</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end three col-->
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="image-tile outer-title text-center">
                                        <a href="#">
                                            <img alt="Pic" class="product-thumb" src="img/shop-product-2.jpg" />
                                        </a>
                                        <div class="title">
                                            <h5 class="mb0">Stanley
                                                <br /> Leather Wallet</h5>
                                            <span class="display-block mb16">$69.95</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end three col-->
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="image-tile outer-title text-center">
                                        <a href="#">
                                            <span class="label">Sale</span>
                                            <img alt="Pic" class="product-thumb" src="img/shop-product-4.jpg" />
                                        </a>
                                        <div class="title">
                                            <h5 class="mb0">Logan
                                                <br /> Canvas Backpack</h5>
                                            <span class="display-block mb16">$119.95</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end three col-->
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="image-tile outer-title text-center">
                                        <a href="#">
                                            <img alt="Pic" class="product-thumb" src="img/shop-product-7.jpg" />
                                        </a>
                                        <div class="title">
                                            <h5 class="mb0">Vladimir
                                                <br />Stainless Flask</h5>
                                            <span class="display-block mb16">$49.95</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end three col-->
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="image-tile outer-title text-center">
                                        <a href="#">
                                            <img alt="Pic" class="product-thumb" src="img/shop-product-8.jpg" />
                                        </a>
                                        <div class="title">
                                            <h5 class="mb0">Nathan
                                                <br /> Cashmere Beanie</h5>
                                            <span class="display-block mb16">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end three col-->
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="image-tile outer-title text-center">
                                        <a href="#">
                                            <img alt="Pic" class="product-thumb" src="img/shop-product-5.jpg" />
                                        </a>
                                        <div class="title">
                                            <h5 class="mb0">Nicholas
                                                <br /> Dune Shades</h5>
                                            <span class="display-block mb16">$79.95</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end three col-->
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="image-tile outer-title text-center">
                                        <a href="#">
                                            <span class="label">Hot</span>
                                            <img alt="Pic" class="product-thumb" src="img/shop-product-9.jpg" />
                                        </a>
                                        <div class="title">
                                            <h5 class="mb0">Bobby
                                                <br />Shaving Brush</h5>
                                            <span class="display-block mb16">$27.95</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end three col-->
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="image-tile outer-title text-center">
                                        <a href="#">
                                            <img alt="Pic" class="product-thumb" src="img/shop-product-13.jpg" />
                                        </a>
                                        <div class="title">
                                            <h5 class="mb0">Bradley
                                                <br /> Leather Journal</h5>
                                            <span class="display-block mb16">$29.95</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end three col-->
                                <div class="col-md-4 col-sm-4 masonry-item col-xs-12">
                                    <div class="image-tile outer-title text-center">
                                        <a href="#">
                                            <img alt="Pic" class="product-thumb" src="img/shop-product-11.jpg" />
                                        </a>
                                        <div class="title">
                                            <h5 class="mb0">Mack
                                                <br /> Steel Canteen</h5>
                                            <span class="display-block mb16">$34.95</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end three col-->
                            </div>
                            <!--end of row-->
                            <div class="text-center mt40">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">4</a>
                                    </li>
                                    <li>
                                        <a href="#">5</a>
                                    </li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end of nine col-->
                        <div class="col-md-3 col-md-pull-9 hidden-sm">
                            <div class="widget">
                                <h6 class="title">Shop Categories</h6>
                                <hr>
                                <ul class="link-list">
                                    <li>
                                        <a href="#">Bags</a>
                                    </li>
                                    <li>
                                        <a href="#">Accessories</a>
                                    </li>
                                    <li>
                                        <a href="#">Shirts</a>
                                    </li>
                                    <li>
                                        <a href="#">Trousers</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                            <div class="widget">
                                <h6 class="title">Search Shop</h6>
                                <hr>
                                <form>
                                    <input class="mb0" type="text" placeholder="Type Here" />
                                </form>
                            </div>
                            <!--end of widget-->
                            <div class="widget">
                                <h6 class="title">Popular Items</h6>
                                <hr>
                                <ul class="cart-overview">
                                    <li>
                                        <a href="#">
                                            <img alt="Product" src="img/shop-product-7.jpg" />
                                            <div class="description">
                                                <span class="product-title">Vladimir Flask</span>
                                                <span class="price number">$49.95</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img alt="Product" src="img/shop-product-13.jpg" />
                                            <div class="description">
                                                <span class="product-title">Bradley Journal</span>
                                                <span class="price number">$29.95</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                            <div class="widget">
                                <h6 class="title">Returns Policy</h6>
                                <hr>
                                <p>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem antium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                </p>
                            </div>
                            <!--end of widget-->
                            <div class="widget">
                                <h6 class="title">Latest Updates</h6>
                                <hr>
                                <div class="twitter-feed">
                                    <div class="tweets-feed" data-feed-name="mrareweb">
                                    </div>
                                </div>
                            </div>
                            <!--end of widget-->
                        </div>
                        <!--end of sidebar-->
                    </div>
                    <!--end of container row-->
                </div>
                <!--end of container-->
            </section>
            <footer class="footer-1 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <img alt="Logo" class="logo" src="img/logo-light.png" />
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h6 class="title">Recent Posts</h6>
                                <hr>
                                <ul class="link-list recent-posts">
                                    <li>
                                        <a href="#">Hugging pugs is super trendy</a>
                                        <span class="date">February
                                            <span class="number">14, 2015</span>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#">Spinning vinyl is oh so cool</a>
                                        <span class="date">February
                                            <span class="number">9, 2015</span>
                                        </span>
                                    </li>
                                    <li>
                                        <a href="#">Superior theme design by pros</a>
                                        <span class="date">January
                                            <span class="number">27, 2015</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h6 class="title">Latest Updates</h6>
                                <hr>
                                <div class="twitter-feed">
                                    <div class="tweets-feed" data-feed-name="mrareweb">
                                    </div>
                                </div>
                            </div>
                            <!--end of widget-->
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="widget">
                                <h6 class="title">Instagram</h6>
                                <hr>
                                <div class="instafeed" data-user-name="mrareweb">
                                    <ul></ul>
                                </div>
                            </div>
                            <!--end of widget-->
                        </div>
                    </div>
                    <!--end of row-->
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="sub">&copy; Copyright 2016 - Medium Rare</span>
                        </div>
                        <div class="col-sm-6 text-right">
                            <ul class="list-inline social-list">
                                <li>
                                    <a href="#">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-dribbble"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-vimeo-alt"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end of container-->
                <a class="btn btn-sm fade-half back-to-top inner-link" href="#top">Top</a>
            </footer>
        </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/flickr.js"></script>
        <script src="js/flexslider.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/masonry.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html>

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ url('public/img/logo.png') }}">
    <!-- Author Meta -->
    <meta name="author" content="IslamHouse">
    <!-- Meta Description -->
    <meta name="description" content="صفحة تحتوي على أهم الروابط والمواقع والخدمات لموقع دار الإسلام">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>IslamHouse Services</title>
    <!-- og Description -->
    <meta property="og:description" content="صفحة تحتوي على أهم الروابط والمواقع والخدمات لموقع دار الإسلام">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
        CSS
        ============================================= -->
    <link rel="stylesheet" href="{{ url('public/css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/app.css') }}">
</head>

<body>
    <header id="header">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="https://islamhouse.com/ar"><img width="70px" src="{{ url('public/img/logo.png') }}"
                            alt="Islam House Logo" title="Islam House Logo" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="https://islamhouse.com/ar">Home</a></li>
                        <li><a href="https://d1.islamhouse.com/data//ar/about/index.html">About</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <!-- Start services Area -->
    <section class="services-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content  col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">روابط رئيسية</h1>
                        <p>At about this time of year, some months after New Year’s resolutions have been made and kept,
                            or made and neglected.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($MainServices as $Service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <span class="lnr lnr-pie-chart"></span>
                        <a href="{{$Service->link}}">
                            <h4>{{$Service->title}}</h4>
                        </a>
                        <p>
                            {{$Service->description}}
                        </p>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- End services Area -->

    <!-- Start portfolio-area Area -->
    <section class="portfolio-area section-gap" id="portfolio">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Latest Featured Projects</h1>
                        <p>Who are in extremely love with eco friendly system.</p>
                    </div>
                </div>
            </div>

            <div class="filters">
                <ul>
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".websites">Websites</li>
                    <li data-filter=".services">Services</li>
                    <li data-filter=".videos">Videos</li>
                    <li data-filter=".apps">Apps</li>
                    <li data-filter=".interactive_files">Interactive files</li>
                    <li data-filter=".advocacy_services">Advocacy Services</li>
                </ul>
            </div>

            <div class="filters-content">
                <div class="row grid">
                    <div class="single-portfolio col-sm-4 all vector">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{ url('public/img/p1.jpg') }}" alt="">
                            </div>
                            <a href="img/p1.jpg" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img
                                            src="{{ url('public/img/preview.png') }}" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>2D Vinyl Design</h4>
                            <div class="cat">vector</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all raster">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{ url('public/img/p2.jpg') }}" alt="">
                            </div>
                            <a href="{{ url('public/img/p2.jpg') }}" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img
                                            src="{{ url('public/img/preview.png') }}" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>2D Vinyl Design</h4>
                            <div class="cat">vector</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all ui">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{ url('public/img/img/p3.jpg') }}"
                                    alt="">
                            </div>
                            <a href="{{ url('public/img/img/p3.jpg') }}" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img
                                            src="{{ url('public/img/preview.png') }}" alt=""></div>
                                </div>
                            </a>

                        </div>
                        <div class="p-inner">
                            <h4>Creative Poster Design</h4>
                            <div class="cat">Agency</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all printing">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="{{ url('public/img/p4.jpg') }}" alt="">
                            </div>
                            <a href="{{ url('public/img/p4.jpg') }}" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img
                                            src="{{ url('public/img/preview.png') }}" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>Embosed Logo Design</h4>
                            <div class="cat">Portal</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all vector">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="img/p5.jpg" alt="">
                            </div>
                            <a href="img/p5.jpg" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img
                                            src="{{ url('public/img/preview.png') }}" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>3D Helmet Design</h4>
                            <div class="cat">vector</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all raster">
                        <div class="relative">
                            <div class="thumb">
                                <div class="overlay overlay-bg"></div>
                                <img class="image img-fluid" src="img/p6.jpg" alt="">
                            </div>
                            <a href="img/p6.jpg" class="img-pop-up">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img
                                            src="{{ url('public/img/preview.png') }}" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>2D Vinyl Design</h4>
                            <div class="cat">raster</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End portfolio-area Area -->

    <!-- Start brands Area -->
    <section class="brands-area">
        <div class="container">
            <div class="brand-wrap">
                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
                    </div>
                    <div class="col single-brand">
                        <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End brands Area -->

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>About Me</h4>
                        <p>
                            We have tested a number of registry fix and clean utilities and present our top 3 list on
                            our site for your convenience.
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends</p>
                        <div class="" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL"
                                        placeholder="Enter Email Address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter Email Address '" required=""
                                        type="email">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default" type="submit">
                                            <span class="lnr lnr-arrow-right"></span>
                                        </button>
                                    </div>
                                    <div class="info"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h4>Follow Me</h4>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    <script src="{{ url('public/js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ url('public/js/popper.min.js') }}"></script>
    <script src="{{ url('public/js/vendor/bootstrap.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ url('public/js/easing.min.js') }}"></script>
    <script src="{{ url('public/js/hoverIntent.js') }}"></script>
    <script src="{{ url('public/js/superfish.min.js') }}"></script>
    <script src="{{ url('public/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ url('public/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ url('public/js/jquery.tabs.min.js') }}"></script>
    <script src="{{ url('public/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ url('public/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('public/js/waypoints.min.js') }}"></script>
    <script src="{{ url('public/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url('public/js/simple-skillbar.js') }}"></script>
    <script src="{{ url('public/js/owl.carousel.min.js') }}"></script>
    <script src="{{ url('public/js/mail-script.js') }}"></script>
    <script src="{{ url('public/js/main.js') }}"></script>
</body>

</html>

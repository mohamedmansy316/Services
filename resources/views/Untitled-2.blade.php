<!DOCTYPE html>
<html lang="ar" dir="rtl">

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
    {{-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="{{ url('public/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/magnific-popup.css') }}">
    {{-- <link rel="stylesheet" href="{{ url('public/css/jquery-ui.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('public/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/app.css') }}">
</head>

<body class="text-right" dir="rtl">
    <header id="header" dir="ltr">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="https://islamhouse.com/ar"><img width="70px" src="{{ url('public/img/logo.png') }}"
                            alt="Islam House Logo" title="Islam House Logo" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="https://islamhouse.com/ar">الرئيسة</a></li>
                        <li><a href="https://d1.islamhouse.com/data//ar/about/index.html">من نحن</a></li>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </div>
    </header><!-- #header -->

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title fs-5" id="exampleModalLabel">بيان الاسلام</h3>
            <span class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="far fa-times-circle"></i></span>
            {{-- <button type="button" ></button> --}}
        </div>
        <div class="modal-body">
            <div class="row justify-content-around">
                <h3><a href="https://islamhouse.com/ar/category/769/showall/showall/1/" class="genric-btn success radius">للمسلمين</a></h3>
                <h3><a href="https://islamhouse.com/ar/category/768/showall/showall/1/" class="genric-btn success radius">لغير المسلمين</a></h3>
            </div>
        </div>
        {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
    </div>
    </div>
</div>


    <!-- Start services Area -->
    <section class="services-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content  col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">روابط رئيسية</h1>
                        {{-- <p>At about this time of year, some months after New Year’s resolutions have been made and kept,
                            or made and neglected.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img width="70px" src="{{url('public/img/islam.png')}}" alt="">
                        <a href="https://islamhouse.com/">
                            <h4>موقع دار الإسلام</h4>
                        </a>
                        <p>
                            مرجعية مجانية إلكترونية موثوقة للتعريف بالإسلام بلغات العالم
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img width="70px" src="{{url('public/img/islam.png')}}" alt="">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal"><h4>بيان الاسلام</h4></a>
                        <p>
                            بيان للمسلمين ولغير المسلمين
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img width="70px" src="{{url('public/img/موسوعة القران.png')}}" alt="">
                        <a href="https://quranenc.com/ar">
                            <h4>موسوعة القرآن الكريم</h4>
                        </a>
                        <p>
                            تفاسير وتراجم موثوقة لمعاني القرآن الكريم بلغات العالم
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img width="70px" src="{{url('public/img/موسوعة الأحاديث.png')}}" alt="">
                        <a href="https://islamhouse.com/">
                            <h4>موسوعة الأحاديث النبوية</h4>
                        </a>
                        <p>
                            شروحات مبسطة وترجمات واضحة للأحاديث النبوية الصحيحة بالعديد من اللغات
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img width="70px" src="{{url('public/img/موسوعة الامصطلحات.png')}}" alt="">
                        <a href="https://islamhouse.com/">
                            <h4>موسوعة المصطلحات الإسلامية</h4>
                        </a>
                        <p>
                            قاموس محرر للمصطلحات الإسلامية الشرعية وترجمتها للغات العالم
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img width="70px" src="{{url('public/img/مقالات اسلامية.png')}}" alt="">
                        <a href="https://islamhouse.com/">
                            <h4>موسوعة الكتب الدعوية النصية</h4>
                        </a>
                        <p>
                            بوابة تعرض آلاف الكتب الدعوية بعشرات اللغات بصورة نصية، مع إمكانية الوصول إلى ترجمات المادة والصيغ المتوفرة بها.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Button trigger modal -->
        </div>
    </section>
    <!-- End services Area -->

    <!-- Start portfolio-area Area -->
    <section class="portfolio-area section-gap" id="portfolio">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">خدماتنا</h1>
                        {{-- <p>Who are in extremely love with eco friendly system.</p> --}}
                    </div>
                </div>
            </div>
            <div class="filters">
                <ul>
                    <li class="active" data-filter="*">الكل</li>
                    <li data-filter=".websites">مواقع</li>
                    <li data-filter=".services">خدمات</li>
                    <li data-filter=".videos">مرئيات</li>
                    <li data-filter=".apps">تطبيقات</li>
                    <li data-filter=".interactive_files">ملفات تفاعلية</li>
                    <li data-filter=".advocacy_services">خدمات دعوية</li>
                    <li data-filter=".advocacy_services">صفحات هبوط</li>
                    <li data-filter=".advocacy_services">أخرى</li>
                </ul>
            </div>
            <div class="filters-content">
                <div class="row grid">
                    <div class="single-portfolio col-sm-4 all interactive_files">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/search.jpg') }}" alt="">
                            </a>
                            <a href="https://islamhouse.com/ar/subscribe/">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img
                                            src="{{ url('public/img/preview.png') }}" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>باحث الموسوعات</h4>
                            <div class="cat">محرك بحث في عدد من الموسوعات والمصادر الإسلامية المترجمة.</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all interactive_files">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>القائمة البريدية</h4>
                            <div class="cat">اشترك في القائمة البريدية ليصلك جديد المواد المنشورة في بعض اللغات</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all interactive_files">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/search.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>باحث الموسوعات</h4>
                            <div class="cat">محرك بحث في عدد من الموسوعات والمصادر الإسلامية المترجمة.</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all websites">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>القائمة البريدية</h4>
                            <div class="cat">اشترك في القائمة البريدية ليصلك جديد المواد المنشورة في بعض اللغات</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all interactive_files">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>القائمة البريدية</h4>
                            <div class="cat">اشترك في القائمة البريدية ليصلك جديد المواد المنشورة في بعض اللغات</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all services">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>القائمة البريدية</h4>
                            <div class="cat">اشترك في القائمة البريدية ليصلك جديد المواد المنشورة في بعض اللغات</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all videos">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>القائمة البريدية</h4>
                            <div class="cat">اشترك في القائمة البريدية ليصلك جديد المواد المنشورة في بعض اللغات</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all apps">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>القائمة البريدية</h4>
                            <div class="cat">اشترك في القائمة البريدية ليصلك جديد المواد المنشورة في بعض اللغات</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all advocacy_services">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>القائمة البريدية</h4>
                            <div class="cat">اشترك في القائمة البريدية ليصلك جديد المواد المنشورة في بعض اللغات</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all land_pages">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>القائمة البريدية</h4>
                            <div class="cat">اشترك في القائمة البريدية ليصلك جديد المواد المنشورة في بعض اللغات</div>
                        </div>
                    </div>
                    <div class="single-portfolio col-sm-4 all interactive_files">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/2.png') }}" alt="">
                            </a>
                        </div>
                        <div class="p-inner">
                            <h4>القائمة البريدية</h4>
                            <div class="cat">اشترك في القائمة البريدية ليصلك جديد المواد المنشورة في بعض اللغات</div>
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script> --}}
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

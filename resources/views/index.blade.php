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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url('public/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('public/css/app.css') }}">
</head>

<body class="text-right" dir="rtl">
    <header id="header" dir="ltr">
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="https://islamhouse.com/ar"><img src="{{ url('public/img/islamhouse.com-logo.png') }}"
                            alt="Islam House Logo" title="Islam House Logo" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="https://islamhouse.com/ar">الرئيسة</a></li>
                        <li class="menu-has-children"><a href="">اللغات</a>
                            <ul>
                              <li><a href="blog-home.html">Blog Home</a></li>
                              <li><a href="blog-single.html">Blog Single</a></li>
                            </ul>
                          </li>
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
                    <span class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="far fa-times-circle"></i></span>
                    {{-- <button type="button" ></button> --}}
                </div>
                <div class="modal-body">
                    <div class="row justify-content-around">
                        <h3><a href="https://islamhouse.com/ar/category/769/showall/showall/1/"
                                class="genric-btn success radius">للمسلمين</a></h3>
                        <h3><a href="https://islamhouse.com/ar/category/768/showall/showall/1/"
                                class="genric-btn success radius">لغير المسلمين</a></h3>
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
                        <img width="70px" src="{{ url('public/img/islam.png') }}" alt="">
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
                        <img width="70px" src="{{ url('public/img/islam.png') }}" alt="">
                        <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <h4>بيان الاسلام</h4>
                        </a>
                        <p>
                            بيان للمسلمين ولغير المسلمين
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img width="70px" src="{{ url('public/img/موسوعة القران.png') }}" alt="">
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
                        <img width="70px" src="{{ url('public/img/موسوعة الأحاديث.png') }}" alt="">
                        <a href="https://hadeethenc.com/ar">
                            <h4>موسوعة الأحاديث النبوية</h4>
                        </a>
                        <p>
                            شروحات مبسطة وترجمات واضحة للأحاديث النبوية الصحيحة بالعديد من اللغات
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img width="70px" src="{{ url('public/img/موسوعة الامصطلحات.png') }}" alt="">
                        <a href="https://terminologyenc.com/ar">
                            <h4>موسوعة المصطلحات الإسلامية</h4>
                        </a>
                        <p>
                            قاموس محرر للمصطلحات الإسلامية الشرعية وترجمتها للغات العالم
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-services">
                        <img width="70px" src="{{ url('public/img/مقالات اسلامية.png') }}" alt="">
                        <a href="https://islamhouse.com/read/#lang_ar">
                            <h4>موسوعة الكتب الدعوية النصية</h4>
                        </a>
                        <p>
                            بوابة تعرض آلاف الكتب الدعوية بعشرات اللغات بصورة نصية، مع إمكانية الوصول إلى ترجمات المادة
                            والصيغ المتوفرة بها.
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
                    <li data-filter=".land_pages">صفحات هبوط</li>
                    <li data-filter=".others">أخرى</li>
                </ul>
            </div>
            <div class="filters-content">
                <div class="row grid">
                    <div class="single-portfolio col-sm-4 all interactive_files">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/subscribe" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="{{ url('public/img/search.jpg') }}"
                                    alt="">
                            </a>
                            <a href="https://islamhouse.com/ar/subscribe/">
                                <div class="middle">
                                    <div class="text align-self-center d-flex"><img
                                            src="{{ url('public/img/preview.png') }}" alt=""></div>
                                </div>
                            </a>
                        </div>
                        <a href="https://islamhouse.com/ar/subscribe/" class="p-inner d-block">
                            <h4>باحث الموسوعات</h4>
                            <div class="cat">محرك بحث في عدد من الموسوعات والمصادر الإسلامية المترجمة.</div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all interactive_files">
                        <div class="relative">
                            <a href="https://islamhouse.com/search/#/ar" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid" src="https://islamhouse.com/services/as/s.png"
                                    alt="">
                            </a>
                        </div>
                        <a href="https://islamhouse.com/search/#/ar" class="p-inner d-block">
                            <h4>ابحث في IslamHouse.com</h4>
                            <div class="cat">بحث متقدم في محتويات IslamHouse.com مع تصفيات للنتائج حسب اللغة أو
                                النوع.</div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all others">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/showall/showall/1/"
                                class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid"
                                    src="https://islamhouse.com/services/as/1.jpeg" alt="">
                            </a>
                        </div>
                        <a href="https://islamhouse.com/ar/showall/showall/1/" class="p-inner d-block">
                            <h4>آخر الإضافات بجميع اللغات</h4>
                            <div class="cat">تعرف على جديد المواد الدعوية الموثوقة بعشرات اللغات.</div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all websites">
                        <div class="relative">
                            <a href="https://d1.islamhouse.com/data/ar/caller-to-islam.mp4"
                                class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid"
                                    src="https://islamhouse.com/services/as/unnamed.jpg" alt="">
                            </a>
                        </div>
                        <a href="https://d1.islamhouse.com/data/ar/caller-to-islam.mp4" class="p-inner d-block">
                            <h4>كن داعيًا بلغات العالم</h4>
                            <div class="cat">دليل الاستخدام المرئي لموقع دار الإسلام.</div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all interactive_files">
                        <div class="relative">
                            <a href="https://islamhouse.com/lite/index.php/daawa-cart?lang=ar"
                                class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid"
                                    src="https://islamhouse.com/services/as/2.jpeg" alt="">
                            </a>
                        </div>
                        <a href="https://islamhouse.com/lite/index.php/daawa-cart?lang=ar" class="p-inner d-block">
                            <h4>السلة الدعوية</h4>
                            <div class="cat">اصنع سلتك الدعوية الإلكترونية بأي لغة كانت ثم أرسلها وشاركها إلى من
                                تحب.</div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all services">
                        <div class="relative">
                            <a href="https://d1.islamhouse.com/data/ar/ih_books/single_010/dawah-library.pdf"
                                class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid"
                                    src="https://islamhouse.com/services/as/5.jpeg" alt="">
                            </a>
                        </div>
                        <a href="https://d1.islamhouse.com/data/ar/ih_books/single_010/dawah-library.pdf" class="p-inner d-block">
                            <h4>كتب PDF دعوية مميزة</h4>
                            <div class="cat">6500 ملف PDF للتنزيل الفوري بعشرات اللغات لأهم المحتويات الدعوية
                                المختارة بعناية.</div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all videos">
                        <div class="relative">
                            <a href="https://developers.islamhouse.com/ar/" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid"
                                    src="https://islamhouse.com/services/as/api.png" alt="">
                            </a>
                        </div>
                        <a href="https://developers.islamhouse.com/ar/" class="p-inner d-block">
                            <h4>API IslamHouse.com</h4>
                            <div class="cat">خدمة خاصة للمبرمجين تمكنهم من الاستفادة من محتويات IslamHouse.com</div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all apps">
                        <div class="relative">
                            <a href="https://wa.me/966550588755?text=(اشتراك)"
                                class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid"
                                    src="https://islamhouse.com/services/as/whatsapp.png" alt="">
                            </a>
                        </div>
                        <a href="https://wa.me/966550588755?text=(اشتراك)" class="p-inner d-block">
                            <h4>قائمة المراسلة</h4>
                            <div class="cat">انضم معنا لقائمة مراسلات جماعية خاصة لمستجدات واحتياجات مواقع دار
                                الإسلام</div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all advocacy_services">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/category/397053/showall/showall/1"
                                class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid"
                                    src="https://islamhouse.com/services/as/1.jpeg" alt="">
                            </a>
                        </div>
                        <a href="https://islamhouse.com/ar/category/397053/showall/showall/1" class="p-inner d-block">
                            <h4>تعريب المواد</h4>
                            <div class="cat">استعراض محتويات أكثر من 120 لغة باللغة العربية واللغة المستهدفة.</div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all land_pages">
                        <div class="relative">
                            <a href="https://islamhouse.com/add/" class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid"
                                    src="https://islamhouse.com/services/as/add.jpeg" alt="">
                            </a>
                        </div>
                        <a href="https://islamhouse.com/add/" class="p-inner d-block">
                            <h4>طلب نشر مادة</h4>
                            <div class="cat">المساهمة في إثراء المحتويات الدعوية بأي لغة بتقديم طلب نشر مادة جديدة.
                            </div>
                        </a>
                    </div>
                    <div class="single-portfolio col-sm-4 all land_pages">
                        <div class="relative">
                            <a href="https://islamhouse.com/ar/category/49261/showall/showall/1"
                                class="thumb d-flex justify-content-center">
                                <div class="overlay overlay-bg"></div>
                                <img width="70px" class=" img-fluid"
                                    src="https://islamhouse.com/services/as/isslam.jpeg" alt="">
                            </a>
                        </div>
                        <a href="https://islamhouse.com/ar/category/49261/showall/showall/1" class="p-inner d-block">
                            <h4>التعريف بالإسلام</h4>
                            <div class="cat">مواد تعريفية بالإسلام بعشرات اللغات.</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End portfolio-area Area -->

    <section id="counter" class="in-numbers section-gap">
        <div class="numbers wow fadeInUp" data-wow-duration="2s">
            <div class="container">
                <div style="margin-bottom: 18px;" class="row">
                    <div style="margin-bottom: 35px;" class="col-12">
                        <h2 style="margin-bottom: 18px;" class="text-center font-weight-bold my-5">أرقام و
                            احصائيات</h2>
                        <div class="line">
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12 col-lg-4 col-6">
                        <div class="static-card">
                            <img src="https://islamhouse.com/volunteer/assets/images/languages.svg" width="100">
                            <p> <span class="counter-value" data-count="116">0</span><br> لغة في دار الإسلام</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-6">
                        <div class="static-card">
                            <img src="https://islamhouse.com/volunteer/assets/images/countries.svg" width="100">
                            <p> <span class="counter-value" data-count="204">0</span><br> دولة تزور موقع دار الإسلام
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-6">
                        <div class="static-card">
                            <img src="https://islamhouse.com/volunteer/assets/images/visitors.svg" width="100">
                            <p> <span class="counter-value" data-count="1512848">0</span><br>متوسط الزوار شهرياً
                                لـمواقعنا</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="static-card">
                            <img src="https://islamhouse.com/volunteer/assets/images/volunteers.svg" width="100">
                            <p> <span class="counter-value" data-count="547">0</span><br> متطوع في بوابة التطوع</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-6">
                        <div class="static-card">
                            <img src="https://islamhouse.com/volunteer/assets/images/files.svg" width="100">
                            <p> <span class="counter-value" data-count="1683">0</span><br>مساهمة ترجمة في بوابة
                                التطوع </p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-6 d-flex flex-column">
                        <div style="opacity: 1;height: 100%;;" class="static-card">
                            <img style="width:180px;" src="https://islamhouse.com/volunteer/img/new_logo.png">
                            <h3 style="line-height: 39px; font-size: 17px; font-weight: bold; margin-top: 20px;
                            margin-bottom: 10px ;color:#317eac;">
                                تحميل تطبيق موسوعة تراجم معاني القرآن الكريم
                            </h3>
                            <a href="https://apps.apple.com/app/id1561769281"><img style="width:96px;"
                                    src="https://islamhouse.com/volunteer/img/IPhone.jpeg"></a>
                            <a href="https://play.google.com/store/apps/details?id=com.quranenc.app"><img
                                    style="width:115px;" src="https://islamhouse.com/volunteer/img/Android.jpeg"></a><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- start footer Area -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <img width="150px" src="{{ url('public/img/logo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4 class="text-white mb-3">روابط هامة</h4>
                    <ul>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white"
                                href="https://islamhouse.com/ar/tawasal" target="_blank">اتصل بنا</a></li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white" href="http://quranenc.com/"
                                target="_blank">موسوعة ترجمات القرآن</a></li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white" href="https://terminologyenc.com/"
                                target="_blank">موسوعة المصطلحات المترجمة</a></li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white"
                                href="https://d1.islamhouse.com/html/disclaimer.htm" target="_blank">إخلاء
                                المسئولية</a></li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white" href="https://islamhouse.com/chat/"
                                target="_blank">لتعريف أصدقاءك بالإسلام</a></li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white" href="https://islamhouse.com/read/"
                                target="_blank">مقالات إسلامية</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 footer-links">
                    <h4 class="text-white mb-3 invisible">روابط هامة</h4>
                    <ul>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white" href="https://islamhouse.com/apps/"
                                target="_blank">تطبيقات IslamHouse</a></li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white"
                                href="https://islamhouse.com/ar/download-excel/section/showall/showall/"
                                target="_blank">تنزيل جميع العناوين (Excel)</a></li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white"
                                href="https://d1.islamhouse.com/html/policy.htm" target="_blank">سياسة الخصوصية</a>
                        </li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white"
                                href="https://islamhouse.com/ar/category/889549/showall/showall/1/"
                                target="_blank">إصدارات مرشحة للطباعة</a></li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white" href="https://hadeethenc.com/"
                                target="_blank">موسوعة الأحاديث المترجمة</a></li>
                        <li class="mb-1"><i class="bi bi-chevron-right"></i> <a class="text-white"
                                href="https://d1.islamhouse.com/data//ar/about/index.html" target="_blank">من نحن؟</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 col-md-12 footer-contact text-center text-md-start">
                    <h4 class="text-white">اتبعنا على</h4>
                    <div class="social-links mt-3">
                        <div class="">
                            <a target="_blank" href="https://islamhouse.info/wa-ar" class="social-icon"><i
                                    class="text-white fa-brands fa-whatsapp"></i></a>
                            <a target="_blank" href="https://t.me/islamhouse" class="social-icon"><i
                                    class="text-white fa-brands fa-telegram"></i></a>
                            <a target="_blank" href="https://islamhouse.com/RSS/IslamHouse-all-AR-AR.xml"
                                class="social-icon"><i class="text-white fa-solid fa-square-rss"></i></a>
                        </div>
                        <a href="https://islamhouse.com/ar/subscribe"
                            class="btn btn-transparent btn-primary p-3 mt-2 d-inline-block text-white">انضم إلى القائمة
                            البريدية</a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Area -->

    {{-- <script src="{{ url('public/js/jquery.matchHeight.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="{{ url('public/js/jquery-migrate-3.0.0.js') }}"></script> --}}
    <script src="{{ url('public/js/popper.min.js') }}"></script>
    {{-- <script src="{{ url('public/js/vendor/bootstrap.min.js') }}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"> --}}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
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
    {{-- <script src="{{ url('public/js/owl.carousel.min.js') }}"></script> --}}
    <script src="{{ url('public/js/mail-script.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"
        integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ url('public/js/main.js') }}"></script>
    <script src="{{ url('public/js/app.js') }}"></script>
</body>
<script>
    $( document ).ready(function() {
       //Homepage Counter Script
    let counterContainer = document.querySelector('#counter');
    if(counterContainer){
        $(window).scroll(function () {
            var oTop = $("#counter").offset().top - window.innerHeight;
            // alert($(window).scrollTop() > oTop)
            if ($(window).scrollTop() > oTop) {
                $(".counter-value").each(function () {
                    var $this = $(this),
                        countTo = $this.attr("data-count");
                    $({
                        countNum: $this.text(),
                    }).animate(
                        {
                            countNum: countTo,
                        },
                        {
                            duration: 5000,
                            easing: "swing",
                            step: function () {
                                $this.text(Math.floor(this.countNum));
                            },
                            complete: function () {
                                $this.text(this.countNum);
                                //alert('finished');
                            },
                        }
                    );
                });
                a = 1;
            }
        });
    }
});
</script>

</html>

<!--**********************************
    Nav header start
    ***********************************-->
<div class="nav-header">
    <a href="{{route("admin.home")}}" class="brand-logo">
        <img class="logo-abbr" src="{{url('public/images/logo.png')}}" alt="">
        <img class="brand-title" src="https://islamhouse.com/assets/cache/images/islamhouselogo.png" alt="">
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>
<!--**********************************
    Nav header end
    Header start
    ***********************************-->
<div class="body-overlay"></div>
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Dashboard
                    </div>
                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item">
                        {{-- <div class="input-group search-area d-xl-inline-flex d-none">
                            <input type="text" id="admin-search-bar" data-target="{{route('admin.search.ajax')}}" class="form-control" placeholder="Search For Products">
                            <div class="admin-input-search-results-custom py-2" id="admin-input-search-results-products">
                                <div class="px-3" id="products-search">
                                </div>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                            </div>
                        </div> --}}
                    </li>
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
                            <img src="{{ auth()->user()->image }}" width="20" alt="" />
                            <div class="header-info">
                                <span class="text-black"><strong>{{ auth()->user()->name }}</strong></span>
                                <p class="fs-12 mb-0">{{ auth()->user()->email }}</p>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            {{-- <a href="{{route('profile')}}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="ml-2">Profile </span>
                            </a> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18"
                                height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            <span class="ml-2">Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-381-list"></i>
                    <span class="nav-text">الخدمات</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admin.service.all') }}">عرض الكل</a></li>
                    <li><a href="{{ route('admin.service.getCreate') }}">إضافة خدمة</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-internet"></i>
                <span class="nav-text">اللغات</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{ route('admin.languages.all') }}">عرض الكل</a></li>
                <li><a href="{{ route('admin.languages.getCreate') }}">إضافة لغه</a></li>
            </ul>
        </li>
    </div>
</div>

@if (session()->has('success'))
<div class="alert alert-success left-icon-big alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
    </button>
    <div class="media">
        <div class="alert-left-icon-big">
            <span><i class="mdi mdi-check-circle-outline"></i></span>
        </div>
        <div class="media-body">
            <h5 class="mt-1 mb-2">نجاح</h5>
            <p class="mb-0">{{ session('success') }}</p>
        </div>
    </div>
</div>
@endif
@if ($errors->any())
<div class="alert alert-warning left-icon-big alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
    </button>
    <div class="media">
        <div class="alert-left-icon-big">
            <span><i class="mdi mdi-help-circle-outline"></i></span>
        </div>
        <div class="media-body">
            <h5 class="mt-1 mb-2">خطأ</h5>
            @foreach ($errors->all() as $error)
            <p class="mb-0">{{ $error }}</p>
            @endforeach
        </div>
    </div>
</div>
@endif

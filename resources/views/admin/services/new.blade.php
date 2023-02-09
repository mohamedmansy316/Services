@include('admin.layout.header', [
    'PageTitle' => 'New Service',
])

<body>
    @include('admin.layout.preloader')
    <div id="main-wrapper">
        @include('admin.layout.navbar')
        <div class="content-body text-right" dir="rtl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">إضافة خدمة جديدة</h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{ route('admin.service.postCreate') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content">
                                        <div class="row">
                                            {{-- <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">إسم اللغة بالعربية <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="ar_lang_name" type="text" placeholder="إسم اللغة العربية" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">العنوان بالعربية <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="ar_title" type="text" placeholder="عنوان الخدمة باللغة العربية" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">الوصف بالعربية <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="ar_description" type="text" placeholder="وصف الخدمة باللغة العربية" required>
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">كود اللغة <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="lang_code" required>
                                                        <option value="">اختر كود اللغة</option>
                                                        @foreach ($AllLanguages->all() as $lang)
                                                            <option value="{{$lang->id}}">{{$lang->lang_code}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">اللغة <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="lang_name" required>
                                                        <option value="">اختر اللغة</option>
                                                        @foreach ($AllLanguages->all() as $lang)
                                                            <option value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">اسم الخدمة</label>
                                                    <input class="form-control" name="title" type="text" placeholder="اسم الخدمة" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">الوصف</label>
                                                    <input class="form-control" name="description" type="text" placeholder="ادخل وصف الخدمة" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">الرابط</label>
                                                    <input class="form-control" name="link" type="text" placeholder="ادخل رابط الخدمة" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2 d-flex align-items-center text-left" dir="ltr">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">صورة الخدمة</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input id="icon" name="icon" type="file" class="custom-file-input" required>
                                                        <label class="custom-file-label">اختر صورة</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">ترتيب الخدمة (إختياري)</label>
                                                    <input class="form-control" name="order" type="number" placeholder="ترتيب الخدمة داخل القسم" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">القسم <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="section" required>
                                                        <option value="">اختر قسم</option>
                                                        <option value="websites">مواقع</option>
                                                        <option value="services">خدمات</option>
                                                        <option value="videos">فيديوهات</option>
                                                        <option value="apps">تطبيقات</option>
                                                        <option value="interactive_files">ملفات تفاعلية</option>
                                                        <option value="advocacy_services">خدمات دعوية</option>
                                                        <option value="land_pages">صفحات هبوط</option>
                                                        <option value="others">أخرى</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">إضافة خدمة</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.layout.scripts')
    <script>
        $(document).ready(function() {
            $('#smartwizard').smartWizard();
        });
    </script>
</body>

</html>

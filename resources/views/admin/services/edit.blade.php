@include('admin.layout.header', [
    'PageTitle' => 'New Service',
])

<body>
    @include('admin.layout.preloader')
    <div id="main-wrapper">
        @include('admin.layout.navbar')
        <div class="content-body text-right"  dir="rtl">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header text-right" dir="rtl">
                                <h4 class="card-title" dir="rtl">تعديل <span class="text-danger">{{$TheService->ar_title}}</span></h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{ route('admin.service.postEdit', $TheService->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">إسم اللغة بالعربية <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="ar_lang_name" type="text" value="{{old('ar_lang_name') ?? $TheService->ar_lang_name}}" placeholder="إسم الخدمة باللغة العربية" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">العنوان بالعربية <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="ar_title" type="text" value="{{old('ar_title') ?? $TheService->ar_title}}" placeholder="عنوان الخدمة باللغة العربية" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">الوصف بالعربية <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="ar_description" type="text" value="{{old('ar_description') ?? $TheService->ar_description}}" placeholder="وصف الخدمة باللغة العربية" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">إسم اللغة <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="lang_name" required>
                                                        <option value="">اختر إسم اللغة</option>
                                                        @foreach ($AllLanguages->all() as $lang)
                                                            <option @if($TheService->lang_name == $lang->id) selected @endif value="{{$lang->id}}">{{$lang->lang_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">العنوان</label>
                                                    <input class="form-control" name="title" type="text" value="{{old('title') ?? $TheService->title}}" placeholder="ادخل عنوان الخدمة" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">الوصف</label>
                                                    <input class="form-control" name="description" type="text" value="{{old('description') ?? $TheService->description}}" placeholder="ادخل وصف الخدمة" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">الرابط</label>
                                                    <input class="form-control" name="link" type="text" value="{{old('link') ?? $TheService->link}}" placeholder="ادخل رابط الخدمة" required>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 mb-2 text-left" dir="ltr">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">صورة الخدمة</span>
                                                    </div>
                                                    <div class="custom-file">
                                                        <input id="icon" name="icon" type="file" class="custom-file-input">
                                                        <label class="custom-file-label">اختر صورة</label>
                                                    </div>
                                                </div>
                                                <div class="my-2 text-right">
                                                    <img src="{{$TheService->ServiceIcon}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">ترتيب الخدمة (إختياري)</label>
                                                    <input class="form-control" name="order" type="number" value="{{old('order') ?? $TheService->order}}" placeholder="ترتيب الخدمة داخل القسم" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">القسم <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="section" required>
                                                        <option value="">اختر قسم</option>
                                                        <option @if($TheService->section == 'websites') selected @endif value="websites">مواقع</option>
                                                        <option @if($TheService->section == 'services') selected @endif value="services">خدمات</option>
                                                        <option @if($TheService->section == 'videos') selected @endif value="videos">فيديوهات</option>
                                                        <option @if($TheService->section == 'apps') selected @endif value="apps">تطبيقات</option>
                                                        <option @if($TheService->section == 'interactive_files') selected @endif value="interactive_files">ملفات تفاعلية</option>
                                                        <option @if($TheService->section == 'advocacy_services') selected @endif value="advocacy_services">خدمات دعوية</option>
                                                        <option @if($TheService->section == 'land_pages') selected @endif value="land_pages">صفحات هبوط</option>
                                                        <option @if($TheService->section == 'others') selected @endif value="others">أخرى</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">تعديل الخدمة</button>
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

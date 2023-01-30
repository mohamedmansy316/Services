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
                                <h4 class="card-title">إضافة لغة جديدة</h4>
                            </div>
                            <div class="card-body">
                                <form class="p-3" action="{{ route('admin.languages.postEdit', $TheLanguage->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content">
                                        <div class="row">
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">إسم اللغة <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="lang_name" type="text" value="{{old('lang_name') ?? $TheLanguage->lang_name}}" placeholder="اكتب اسم اللغة" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">كود اللغة <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="lang_code" type="text" value="{{old('lang_code') ?? $TheLanguage->lang_code}}" placeholder="(ar) اكتب كود اللغة مثل" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">إسم اللغة بالعربية <span class="text-danger">*</span></label>
                                                    <input class="form-control" name="ar_lang_name" type="text" value="{{old('ar_lang_name') ?? $TheLanguage->ar_lang_name}}" placeholder="اكتب اسم اللغة بالعربية" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">اتجاه الصفحة (مثل اللغة العربية من اليمين إلى اليسار) <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="direction">
                                                        <option @if($TheLanguage->direction == 'rtl') selected @endif value="rtl">من اليمين لليسار</option>
                                                        <option @if($TheLanguage->direction == 'ltr') selected @endif value="ltr">من اليسار لليمين</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">اتجاه الخط (مثل اللغة العربية من اليمين إلى اليسار) <span class="text-danger">*</span></label>
                                                    <select class="form-control" name="text_direction">
                                                        <option @if($TheLanguage->text_direction == 'text-right') selected @endif value="text-right">من اليمين لليسار</option>
                                                        <option @if($TheLanguage->text_direction == 'text-left') selected @endif value="text-left">من اليسار لليمين</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <label class="form-control-label">ترتيب اللغة (إختياري)</label>
                                                    <input class="form-control" name="order" type="number" value="{{old('order') ?? $TheLanguage->order}}" placeholder="ترتيب اللغة بين باقي اللغات">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-2">
                                                <div class="form-group">
                                                    <div class="form-check mb-2">
                                                        <input type="checkbox" class="form-check-input" id="is_featured" name="is_featured" @if ($TheLanguage->is_featured == 1) checked @endif >
                                                        <label class="form-check-label mr-4" for="is_featured">الظهور في الواجهة	</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary ">إضافة لغة</button>
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

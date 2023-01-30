@include('admin.layout.header', [
    'PageTitle' => 'New Service',
])

<body>
    @include('admin.layout.preloader')
    <div id="main-wrapper">
        @include('admin.layout.navbar')
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">جميع اللغات</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display min-w850 table table-responsive-md text-right" dir="rtl">
                                        <thead>
                                            <tr>
                                                <th>إسم اللغة</th>
                                                <th>كود اللغة</th>
                                                <th>إسم اللغة بالعربية</th>
                                                <th>اتجاه الصفحة</th>
                                                <th>اتجاه الخط</th>
                                                <th>ترتيب اللغة</th>
                                                <th>الظهور في الواجهة</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($AllLanguages as $Lang)
                                            <tr>
                                                <td>{{$Lang->lang_name}}</td>
                                                <td>{{$Lang->lang_code}}</td>
                                                <td>{{$Lang->ar_lang_name}}</td>
                                                <td>{{$Lang->LanguageDirection}}</td>
                                                <td>{{$Lang->LanguageTextDirection}}</td>
                                                <td>{{$Lang->order}}</td>
                                                <td class="text-right" dir="ltr">@if ($Lang->is_featured == 1) <span class="badge light badge-success">ظاهر</span> @elseif ($Lang->is_featured == 0) <span class="badge light badge-danger">مخفي</span> @endif</td>
                                                <td>
                                                    <div class="d-flex text-right" dir="rtl">
                                                        <a href="{{route('admin.languages.getEdit' , $Lang->id)}}" class="btn btn-primary shadow btn-xs sharp"><i class="fa fa-pencil"></i></a>
                                                        <a type="button" class="btn btn-danger shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#exampleModal-{{$Lang->id}}">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                        <div class="modal fade" id="exampleModal-{{$Lang->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">مسح اللغة</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        هل أنت متاكد من مسح اللغة
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <a href="{{route('admin.languages.delete' , $Lang->id)}}" class="btn btn-danger ">Delete</i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div>
@include('admin.layout.scripts')
</body>
</html>

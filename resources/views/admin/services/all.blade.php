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
                                                <th>إسم اللغة بالعربية</th>
                                                <th>العنوان بالعربية</th>
                                                <th>إسم اللغة</th>
                                                <th>العنوان</th>
                                                <th>ترتيب الخدمة</th>
                                                <th>القسم</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($AllServices as $Services)
                                            <tr>
                                                <td>{{$Services->ar_lang_name}}</td>
                                                <td>{{$Services->ar_title}}</td>
                                                <td>{{$Services->Language->ar_lang_name}}</td>
                                                <td>{{$Services->title}}</td>
                                                <td>{{$Services->order}}</td>
                                                <td>{{$Services->ServiceSection}}</td>
                                                <td>
                                                    <div class="d-flex text-right" dir="rtl">
                                                        <a href="{{route('admin.service.getEdit' , $Services->id)}}" class="btn btn-primary shadow btn-xs sharp"><i class="fa fa-pencil"></i></a>
                                                        <a type="button" class="btn btn-danger shadow btn-xs sharp mr-1" data-toggle="modal" data-target="#exampleModal-{{$Services->id}}">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                        <div class="modal fade" id="exampleModal-{{$Services->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">مسح اللغة</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        هل أنت متاكد من مسح الخدمة
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <a href="{{route('admin.service.delete' , $Services->id)}}" class="btn btn-danger ">Delete</i></a>
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

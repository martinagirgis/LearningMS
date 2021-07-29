@extends("layouts.admin")
@section("pageTitle", "Ejada")
@section("style")
    <link href="{{asset("assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection
@section("content")
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                        <div class="container">
                            <h2>تفاصيل المجموعة</h2>
                            <ul class="nav nav-tabs">
                                <li class="active ml-3 h5"><a data-toggle="tab" href="#home">الرئيسية</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#teachers">هيئة التدريس</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#students">الطلاب</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#exams">الاختبارات</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#quiz">كويزات</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#questionBank">بنك الاسئله</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#rank">التصنيف</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#images">الصور</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#videos">الفيديوهات</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#menu3">الملفات</a></li>

                            </ul>

                            <div class="tab-content">
                                @include('admin.groups.details.includes.home')
                                @include('admin.groups.details.includes.teachers')
                                @include('admin.groups.details.includes.students')
                                @include('admin.groups.details.includes.exams')
                                @include('admin.groups.details.includes.quiz')
                                @include('admin.groups.details.includes.questionBank')
                                @include('admin.groups.details.includes.rank')
                                @include('admin.groups.details.includes.images')
                                @include('admin.groups.details.includes.videos')

                                <div id="menu1" class="tab-pane fade">
                                    <h3>Menu 1</h3>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h3>Menu 2</h3>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <h3>Menu 3</h3>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@section("script")

    <script src="{{asset("assets/admin/libs/datatables.net/js/jquery.dataTables.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/jszip/jszip.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/pdfmake/build/pdfmake.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/pdfmake/build/vfs_fonts.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.j")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js")}}"></script>
    <script src="{{asset("assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js")}}"></script>
    <script src="{{asset("assets/admin/js/pages/datatables.init.js")}}"></script>
@endsection

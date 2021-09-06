@extends("layouts.admin")
@section("pageTitle", "Ejada")
@section("style")
<link href="{{asset("assets/admin/libs/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>

    <script src="https://www.webrtc-experiment.com/RecordRTC.js"></script>
    <script src="https://www.webrtc-experiment.com/gif-recorder.js"></script>
    <script src="https://www.webrtc-experiment.com/getScreenId.js"></script>
    <script src="https://www.webrtc-experiment.com/DetectRTC.js"> </script>

    <!-- for Edige/FF/Chrome/Opera/etc. getUserMedia support -->
    <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
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
                                <li class="active ml-3 h5 active"><a data-toggle="tab" href="#home">الرئيسية</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#teachers">هيئة التدريس</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#students">الطلاب</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#exams">الاختبارات</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#quiz">كويزات</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#questionBank">بنك الاسئله</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#rank">التصنيف</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#images">الصور</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#videos">الفيديوهات</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#files">الملفات</a></li>
                                <li><a class="ml-3 h5" data-toggle="tab" href="#record">تسجيل صوتي</a></li>

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
                                @include('admin.groups.details.includes.files')
                                @include('admin.groups.details.includes.record')

                                {{-- <div id="menu1" class="tab-pane fade">
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
                                </div> --}}
                            </div>
                        </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection
@section("script")
<script src="{{asset("assets/admin/libs/dropzone/min/dropzone.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/metismenu/metisMenu.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/simplebar/simplebar.min.js")}}"></script>
<script src="{{asset("assets/admin/libs/node-waves/waves.min.js")}}"></script>

<script>
    var x = document.getElementById("uidd").value;
    var y = document.getElementById("uidvid").value;
    var z = document.getElementById("uidfile").value;
    var t = document.getElementById("uidaudio").value;
    var groupId = {{$group->id}};


    console.log(x);
    var myDropzoneTheFirst = new Dropzone(
        // myDropzoneTheFirst.prototype.defaultOptions.dictDefaultMessage = "أضف الصور";

        //id of drop zone element 1
        '#file-dropzone', { 
            url: 'http://127.0.0.1:8000/admin/groups/images/add/' + x + '/' + groupId,
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            maxFilesize: 10,
            headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                type: 'POST',
                url: '{{route("groups.image.remove")}}',
                data: { "_token": "{{ csrf_token() }}", name: name, x:x},
                success: function (data){
                    console.log(data);
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function (file, response, data) {
                console.log(file);
                console.log(response);
                console.log(data);
            },
            }
        );

var myDropzoneTheSecond = new Dropzone(
        //id of drop zone element 2
        '#file-dropzone8', { 
            url: 'http://127.0.0.1:8000/admin/groups/videos/add/' + y + '/' + groupId,
            acceptedFiles: ".mp4,.MOV,.WMV",
            addRemoveLinks: true,
            maxFilesize: 1000,
            headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                type: 'POST',
                url: '{{route("groups.video.remove")}}',
                data: { "_token": "{{ csrf_token() }}", name: name, y:y},
                success: function (data){
                    console.log(data);
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function (file, response, data) {
                console.log(file);
                console.log(response);
                console.log(data);
            },
            // }
        }
    );

    var myDropzoneThefile = new Dropzone(
        //id of drop zone element 2
        '#file-dropzonefile', { 
            url: 'http://127.0.0.1:8000/admin/groups/files/add/' + z + '/' + groupId,
            acceptedFiles: ".pdf",
            addRemoveLinks: true,
            maxFilesize: 1000,
            headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                type: 'POST',
                url: '{{route("groups.file.remove")}}',
                data: { "_token": "{{ csrf_token() }}", name: name, z:z},
                success: function (data){
                    console.log(data);
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function (file, response, data) {
                console.log(file);
                console.log(response);
                console.log(data);
            },
            // }
        }
    );

    var myDropzoneTheAudio = new Dropzone(
        //id of drop zone element 2
        '#file-dropzoneaudio', { 
            url: 'http://127.0.0.1:8000/admin/groups/audios/add/' + t + '/' + groupId,
            acceptedFiles: ".wav,.mp3,.AIFF,.AAC,.WMA",
            addRemoveLinks: true,
            maxFilesize: 1000,
            headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            removedfile: function(file)
            {
                var name = file.upload.filename;
                $.ajax({
                type: 'POST',
                url: '{{route("groups.file.remove")}}',
                data: { "_token": "{{ csrf_token() }}", name: name, t:t},
                success: function (data){
                    console.log(data);
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
            success: function (file, response, data) {
                console.log(file);
                console.log(response);
                console.log(data);
            },
            // }
        }
    );
    Dropzone.prototype.defaultOptions.dictDefaultMessage = "أضف الصور";
    // Dropzone.options.fileDropzone = {
    //   url: 'http://127.0.0.1:8000/admin/groups/images/add/' + x + y,
    //   acceptedFiles: ".jpeg,.jpg,.png,.gif",
    //   addRemoveLinks: true,
    //   maxFilesize: 10,
    //   headers: {
    //   'X-CSRF-TOKEN': "{{ csrf_token() }}"
    //   },
    //   removedfile: function(file)
    //   {
    //     var name = file.upload.filename;
    //     $.ajax({
    //       type: 'POST',
    //       url: '{{route("groups.image.remove")}}',
    //       data: { "_token": "{{ csrf_token() }}", name: name, x:x},
    //       success: function (data){
    //           console.log(data);
    //       },
    //       error: function(e) {
    //           console.log(e);
    //       }});
    //       var fileRef;
    //       return (fileRef = file.previewElement) != null ?
    //       fileRef.parentNode.removeChild(file.previewElement) : void 0;
    //   },
    //   success: function (file, response, data) {
    //     console.log(file);
    //     console.log(response);
    //     console.log(data);
    //   },
    // }
</script>
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
    <script src="{{asset("assets/admin/libs/select2/js/select2.min.js")}}"></script>
@endsection

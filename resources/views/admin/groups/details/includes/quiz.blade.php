<div id="quiz" class="tab-pane fade in ">
    <center>
        <div class="row">
            <div class="col-sm-6 text-right pt-2">
                ابحث عن اختبار معين
            </div>
            <div class="col-sm-6 text-left">
                <input class="text-center p-2" type="text" placeholder="Search here .." >
            </div>
        </div>
    </center>
    <div class="container">
        <div class="row">
            @for($i=0;$i<9;$i++)
                <div class="col-sm-4 pt-2">
                    <div class="card text-center">
                        @if($i%2 == 0)
                            <div class="card-header">
                                Published
                            </div>
                        @else
                            <div class="card-header">
                                Not Published
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <div class="row text-center ">
                                <center>
                                    <a href="{{route('admin.view.exam',['id'=>1])}}" class="btn btn-dark col-sm-5 ">View Exam</a>
                                    @if($i%2 == 0)
                                        <a href="#" class="btn btn-dark col-sm-5 ml-1">Publish</a>
                                    @else
                                        <a href="#" class="btn btn-dark col-sm-5 ml-1">Hide</a>
                                    @endif
                                    <a href="#" class="btn btn-dark col-sm-5 mt-2 ">Students Result</a>
                                    <a href="#" class="btn btn-dark col-sm-5 mt-2 ml-1" >Rank</a>

                                </center>

                            </div>

                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>

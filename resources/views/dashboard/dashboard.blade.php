@extends('layouts.app')


@section('content')
    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Dashboard
                    </h1>
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/my-career-center/dashboard"> Dashboard</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start post Area -->
    <section class="post-area section-gap" style="padding: 0;">

        <div class="container">
            <div style="padding: 10px 0 10px 0;">
                <ul class="nav nav-pills nav-justified" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">My Jobs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Job Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-resume-tab" data-toggle="pill" href="#pills-resume" role="tab" aria-controls="pills-resume" aria-selected="false">Who view My Profile</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">

                {{--Dashboard--}}
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="row">
                        <div class="col-sm-4 well well-lg">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-4">
                                <img src="{{asset('img/elements/a.jpg')}}" alt="" class="rounded-circle" width="125px" height="125px">
                            </div>
                            <div class="col-sm-12 ">
                                <hr>
                                <p style="text-align: center;"><b>Nguyen Thanh Tam</b></p>
                                <p style="text-align: center;">dev</p>
                                <p style="text-align: center;">New graduate</p>
                                <p style="text-align: center;">Latest company: Vietnam</p>
                                <p style="text-align: center;">Highest education: High school</p>
                                <hr>
                                <p style="text-align: center;" class="pb-5">

                                    <button type="button" class="btn btn-success btn-lg"><a href="../user/profile" style="text-decoration: none; color: white">Update profile</a></button>
                                </p>
                            </div>
                            <div class="col-sm-12 p-5" style="background-color: white; border-style: dotted">
                                <h4>Profile Settings</h4>
                                <h5 class="text-muted">Attached Resume</h5>
                                <div class="col-sm-12 border border-warning" style="margin-bottom: 10px">
                                    <h5 class="text-muted">Your resume nguyen_thanh_tam.pdf</h5>
                                </div>

                                {{--Begin Modal--}}
                                <button class="btn btn-success" data-toggle="modal" data-target="#modalForm">
                                    Replace Resume
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="modalForm" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 style="color: #555;">Upload new resume</h4>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                            </div>

                                            <!-- Modal Body -->
                                            <div class="modal-body">
                                                <p class="statusMsg"></p>
                                                <form>
                                                    <div class="form-group" style="border-style: dotted; padding: 10px 10px 100px 10px">
                                                        <h4 style="text-align: center;padding-top: 20px;">NguyenThanhTam.pdf</h4>

                                                        <input type="file" style="padding: 50px 0 0 150px" required>
                                                    </div>
                                                </form>
                                            </div>

                                            <!-- Modal Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary submitBtn" onclick="submitContactForm()">SUBMIT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{--End Modal--}}
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="col-md-4 well well-lg" style="padding-bottom: 50px">
                                <p style="text-align: center;font-size: 50px;font-weight: 100; color: #f59331; ">0</p>
                                <p style="text-align: center;text-transform: uppercase">Employers views</p>
                                <hr>
                                <p style="text-align: center;">Check who viewed your profile</p>
                            </div>
                            <div class="col-md-4 well well-lg" style="padding-bottom: 70px">
                                <p style="text-align: center;font-size: 50px;font-weight: 100; color: #5fb661; ">0</p>
                                <p style="text-align: center;text-transform: uppercase">Job Alerts</p>
                                <hr>
                                <p style="text-align: center;">Manage your Job alerts</p>

                            </div>
                            <div class="col-md-4 well well-lg" style="height: 222.2px">
                                <p style="text-align: center;font-size: 50px;font-weight: 100; color: #1fbaef; ">01</p>
                                <p style="text-align: center;text-transform: uppercase">Your applications</p>
                                <hr>
                                <div class="col-sm-12">
                                    <div class="col-sm-5">
                                        <span class="badge" style="background-color: #a367e7;">01</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <span class="badge" style="text-align: center; background-color: #71dd8a; ">0</span>
                                    </div>
                                    <div class="col-sm-2">
                                        <span class="badge">0</span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="col-sm-4">
                                        Open
                                    </div>
                                    <div class="col-sm-4">
                                        Viewed
                                    </div>
                                    <div class="col-sm-4">
                                        Closed
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 well well-lg post-list ">
                                <div><h4><b>Jobs you might be interested in</b></h4></div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="{{asset('img/elements/a.jpg')}}" alt="" class="rounded" width="125px" height="75px">
                                    </div>
                                    <div class="col-sm-9">
                                        <h5>Service Engineer (...)</h5>
                                        <h5 class="text-muted">MITSUBISHI ELECTRIC VIET NAME CO. LTD</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="{{asset('img/elements/a.jpg')}}" alt="" class="rounded" width="125px" height="75px">
                                    </div>
                                    <div class="col-sm-9">
                                        <h5>Service Engineer (...)</h5>
                                        <h5 class="text-muted">MITSUBISHI ELECTRIC VIET NAME CO. LTD</h5>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <img src="{{asset('img/elements/a.jpg')}}" alt="" class="rounded" width="125px" height="75px">
                                    </div>
                                    <div class="col-sm-9">
                                        <h5>Service Engineer (...)</h5>
                                        <h5 class="text-muted">MITSUBISHI ELECTRIC VIET NAME CO. LTD</h5>
                                    </div>
                                </div>
                                <hr>

                                {{--Load More Job Related--}}
                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-4">
                                        <a class="text-uppercase loadmore-btn mx-auto d-block btn" id="find-job-related" href="category.html">Find job Related</a>
                                    </div>
                                    <div class="col-sm-4"></div>

                                </div>

                            </div>
                        </div>

                    </div>


                </div>
                {{--End Dashboard--}}
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">My Jobs</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Job Alerts</div>
                <div class="tab-pane fade" id="pills-resume" role="tabpanel" aria-labelledby="pills-resume-tab">Who view My Profile</div>
            </div>


        </div>
    </section>


@endsection

@section('scripts-first')
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
@endsection

@section('scripts-end')

    <script src="{{ asset('js/x-editable/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('js/x-editable/bootstrap-editable.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            //toggle `popup` / `inline` mode
            $.fn.editable.defaults.mode = 'popup';

            //make username editable
            $('#username').editable();

            //make status editable
            $('#status').editable({
                type: 'select',
                title: 'Select status',
                placement: 'right',
                value: 2,
                source: [
                    {value: 1, text: 'status 1'},
                    {value: 2, text: 'status 2'},
                    {value: 3, text: 'status 3'}
                ]
                /*
                //uncomment these lines to send data on server
                ,pk: 1
                ,url: '/post'
                */
            });
        });
    </script>
@endsection
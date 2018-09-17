@extends('layouts.app')



@section('content')
    <link rel="stylesheet" href="{{ asset('css/post_news.css') }}">

    <!-- start banner Area -->
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Contact Us
                    </h1>
                    <p class="text-white"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="../recruit/post-news"> Post New Job</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start info Area -->

    <form action="{{action('RecruitController@store')}}" method="post">
        {{ csrf_field() }}

        <div class="container" style="padding-top: 50px; padding-bottom: 50px ">
            <p style="font-size: 24px">The Job<p>
            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Job Title</h5></div>
                <div class="col-md-9 col-sm-9">
                    <input id="job_title" name="job_title" style="font-size: 16px" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="ex: Senior UX Designer" autofocus="autofocus">
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Job Level</h5></div>
                <div class="col-md-9 col-sm-9">
                    <select name="id_level" style="width: 100%; height: auto;font-size: 16px" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <option value="" disabled selected>Please Select</option>

                        @foreach($level_job as $level)
                            <option value="{{$level->id}}">{{$level->name_level}}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 5px">Job Category </h5>
                    <p style="font-size: 12px; padding-right: 5px">(Up To 3 Categories)</p></div>
                <div class="col-md-9 col-sm-9">

                    <dl class="dropdown">
                        <dt>
                            <a id="title_a" href="#">
                                <span id="result_span" class="hida; form-control" style="font-size: 16px; font-weight:normal; padding-bottom: 35px; " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> </span>
                                <input name="name_job_category" id="name_job_category" type="text" value="" hidden/>
                            </a>
                        </dt>

                        <dd>
                            <div id="div_multi" class="mutliSelect">
                                <ul class="row" id="menu_ul" style="padding-top: 5px">
                                    <div class="col-md-4 col-sm-4" style="font-size: 16px">
                                        <li style="font-weight: normal; background-color: #f3f3f4; color: #0e7ccd" >
                                            <label style="padding-left: 10px; padding-top: 5px">Financial Services</label></li>

                                        @foreach($fina as $fina)
                                            <li style="padding-left: 20px">
                                                <input type="checkbox" value="{{$fina->name_job_category}}"/> {{$fina->name_job_category}}</li>
                                        @endforeach

                                    </div>
                                    <div class="col-md-4 col-sm-4" style="font-size: 16px">
                                        <li style="font-weight: normal; background-color: #f3f3f4; color: #0e7ccd" >
                                            <label style="padding-left: 10px; padding-top: 5px">Technology</label></li>

                                        @foreach($tech as $tech)
                                            <li style="padding-left: 20px">
                                                <input type="checkbox" value="{{$tech->name_job_category}}" /> {{$tech->name_job_category}}</li>
                                        @endforeach

                                    </div>
                                    <div class="col-md-4 col-sm-4" style="font-size: 16px">
                                        <li style="font-weight: normal; background-color: #f3f3f4; color: #0e7ccd" >
                                            <label style="padding-left: 10px; padding-top: 5px">Front Office</label></li>

                                        @foreach($front as $front)
                                            <li style="padding-left: 20px">
                                                <input type="checkbox" value="{{$front->name_job_category}}" /> {{$front->name_job_category}}</li>
                                        @endforeach

                                    </div>
                                </ul>
                            </div>
                        </dd>
                    </dl>

                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 5px">Job Location</h5>
                    <p style="font-size: 12px; padding-right: 5px">(Up To 3 Locations)</p></div>
                <div class="col-md-9 col-sm-9">

                    <dl class="dropdown">
                        <dt>
                            <a id="title_a2" href="#">
                                <span id="result_span2" class="hida; form-control" style="font-size: 16px; font-weight:normal; padding-bottom: 35px; " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"></span>
                                <input name="location_work" id="location_work" type="text" value="" hidden/>
                            </a>
                        </dt>

                        <dd>
                            <div id="div_multi2" class="mutliSelect">
                                <ul class="row" id="menu_ul2" style="padding-top: 5px;">
                                    <div class="col-md-3 col-sm-3" style="font-size: 16px">
                                        <li style="font-weight: lighter; background-color: #f3f3f4; color: #0e7ccd" >
                                            <label style="padding-left: 10px; padding-top: 5px">South</label></li>

                                        @foreach($south as $south)
                                            <li style="padding-left: 20px">
                                                <input type="checkbox" value="{{$south->name}}" /> {{$south->name}}</li>
                                        @endforeach

                                    </div>
                                    <div class="col-md-3 col-sm-3" style="font-size: 16px">
                                        <li style="font-weight: lighter; background-color: #f3f3f4; color: #0e7ccd" >
                                            <label style="padding-left: 10px; padding-top: 5px">North</label></li>

                                        @foreach($north as $north)
                                            <li style="padding-left: 20px">
                                                <input type="checkbox" value="{{$north->name}}" /> {{$north->name}}</li>
                                        @endforeach

                                    </div>
                                    <div class="col-md-3 col-sm-3" style="font-size: 16px">
                                        <li style="font-weight: lighter; background-color: #f3f3f4; color: #0e7ccd" >
                                            <label style="padding-left: 10px; padding-top: 5px">Middle</label></li>

                                        @foreach($middle as $middle)
                                            <li style="padding-left: 20px">
                                                <input type="checkbox" value="{{$middle->name}}" /> {{$middle->name}}</li>
                                        @endforeach

                                    </div>
                                    <div class="col-md-3 col-sm-3" style="font-size: 16px">
                                        <li style="font-weight: lighter; background-color: #f3f3f4; color: #0e7ccd" >
                                            <label style="padding-left: 10px; padding-top: 5px">Other</label></li>

                                        @foreach($other as $other)
                                            <li style="padding-left: 20px">
                                                <input type="checkbox" value="{{$other->name}}" /> {{$other->name}}</li>
                                        @endforeach

                                    </div>
                                </ul>
                            </div>
                        </dd>
                    </dl>

                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 5px">Salary </h5>
                    <p style="font-size: 12px; padding-right: 5px">(USD)  </p>
                </div>

                <div class="col-sm-9" style="padding: 5px">
                    <div class="row" style="padding-left: 25px; padding-bottom: 10px; padding-top: 1px">
                        <div class="col-md-4" style="padding-left: 0">
                            <select name="id_level_salary" style="font-size: 16px; width: 100%">

                                @foreach($salary as $salary)
                                    <option value="{{$salary->id}}">{{$salary->name_level_salary}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Description</h5></div>
                <div class="col-md-9 col-sm-9" style="padding-bottom: 10px">
                    <textarea style="font-size: 16px" class="form-control" rows="5" id="description_work" name="description_work" placeholder="Enter your description here"></textarea>
                    <div style="font-size: 12px"><i>(You have 14500 character remainings)</i></div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Requirements</h5></div>
                <div class="col-md-9 col-sm-9" style="padding-bottom: 10px">
                    <textarea style="font-size: 16px" class="form-control" rows="5" id="require_work" name="require_work" placeholder="Enter your description here"></textarea>
                    <div style="font-size: 12px"><i>(You have 14500 character remainings)</i></div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 5px">Qualification Requirement</h5>
                    <p style="font-size: 12px; padding-right: 5px">(Up)  </p>
                </div>

                <div class="col-sm-9" style="padding: 5px">
                    <div class="row" style="padding-left: 25px; padding-bottom: 1px">
                        <div class="col-md-4" style="padding-left: 0">
                            <select name="id_qualification" style="font-size: 16px; width: 100%">
                                <option value="" disabled selected>Please Select</option>

                                @foreach($qualification as $qualification)
                                    <option value="{{$qualification->id}}">{{$qualification->name_qualification}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 5px">Type Work</h5>
                </div>

                <div class="col-sm-9" style="padding: 5px">
                    <div class="row" style="padding-left: 25px; padding-bottom: 1px">
                        <div class="col-md-4" style="padding-left: 0">
                            <select name="id_type_work" style="font-size: 16px; width: 100%">
                                <option value="" disabled selected>Please Select</option>

                                @foreach($type_work as $type_work)
                                    <option value="{{$type_work->id}}">{{$type_work->name_type_work}}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Years Of Experience</h5></div>
                <div class="col-md-2 col-sm-2">
                    <input name="year_experience" style="font-size: 16px" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Number Of Recruitment</h5></div>
                <div class="col-md-2 col-sm-2">
                    <input name="number_recruits" style="font-size: 16px" type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 5px">Gender Requirement</h5>
                </div>

                <div class="col-sm-9" style="padding: 5px">
                    <div class="row" style="padding-left: 25px; padding-bottom: 1px">
                        <div class="col-md-4" style="padding-left: 0">
                            <select name="gender" style="font-size: 16px; width: 100%">
                                <option value="Anyone">Anyone</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 5px">Skill Tags </h5>
                    <p style="font-size: 12px; padding-right: 5px" >(Up To 3 Tags)</p>
                </div>
                <div class="col-md-9 col-sm-9">
                    <div class="tag-editor">
                        <div class="tag-editor-tags">
                            <ul>
                                <li class="inputlist"><input type="text" style="font-size: 16px" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Enter tag skill name"/></li>
                            </ul>
                            <input name="skills" id="skills" type="text" value="" hidden/>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Preferred Language</h5></div>
                <div class="col-md-9 col-sm-9">
                    <select name="id_languages_profile" style="width: 100%; height: auto;font-size: 16px" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">

                        @foreach($languages_profile as $language)
                            <option value="{{$language->id}}">{{$language->name_languages_profile}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 10px">Contact Person</h5>
                </div>
                <div class="row col-sm-9" style="padding: 5px; padding-left:  15px">
                    <div class="col-md-6">
                        <input id="contact_person" name="contact_person" style="font-size: 16px" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="ex: Mrs. Ngon">
                    </div>
                    <div class="row col-md-6" style="padding: 5px">
                        <div class="col-md-2" style="padding-right: 0">
                            <label class="switch">
                                <input type="checkbox" checked>
                                <span style="resize: vertical" class="slider round"></span>
                            </label>
                        </div>
                        <div class="col-md-9" style="padding: 0px">
                            <label style="font-size: 16px">Show in job ads</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Email For Applications</h5></div>
                <div class="col-md-9 col-sm-9">
                    <input style="font-size: 16px" type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="ex: hoasen.not_for_profit@gmail.com">
                    <div style="font-size: 12px"><i>(Email addresses are hidden to jobseekers.)</i></div>
                </div>
            </div>

            <div class="hr-line-dashed"></div>

            <p style="font-size: 24px">Your Company<p>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Company Name</h5></div>
                <div class="col-md-9 col-sm-9">
                    <input id="company_name" name="company_name" style="font-size: 16px" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="ex: Hoa Sen University">
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 5px">Company Size</h5>
                    <p style="font-size: 12px; padding-right: 5px">(Optional)</p>
                </div>
                <div class="col-md-9 col-sm-9">
                    <select name="company_size" style="width: 100%; height: auto;font-size: 16px" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        <option value="" disabled selected>Please Select</option>
                        <option value="Less than 10">Less than 10</option>
                        <option value="10-24">10-24</option>
                        <option value="25-99">25-99</option>
                        <option value="100-499">100-499</option>
                        <option value="500-999">500-999</option>
                        <option value="1.000-4.999">1.000-4.999</option>
                        <option value="5.000-9.999">5.000-9.999</option>
                        <option value="10.000-19.000">10.000-19.000</option>
                        <option value="Over 20000">Over 20.000</option>
                    </select>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 5px">Company Address</h5>
                    <p style="font-size: 12px; padding-right: 5px">(Optional)</p>
                </div>
                <div class="col-md-9 col-sm-9">
                    <input id="company_address" name="company_address" style="font-size: 16px" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="ex: 130 Suong Nguyet Anh, Ben Thanh Ward, District 1">
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Company Profile</h5></div>
                <div class="col-md-9 col-sm-9" style="padding-bottom: 10px">
                    <textarea style="font-size: 16px" class="form-control" rows="5" id="company_profile" name="company_profile" placeholder="Enter company profile..."></textarea>
                    <div style="font-size: 12px"><i>(You have 10000 character remainings)</i></div>
                </div>
            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right">
                    <h5 style="padding: 10px">Benefits</h5>
                </div>

                <div class="input-group col-md-9 col-sm-9" style="padding-left: 10px">
                    <div id="contenedor" style="width: 100%">
                        <div class="added">
                            <div class="row" style="padding-bottom: 5px">

                            </div>
                        </div>
                    </div>
                    <div><a id="agregarCampo" class="btn btn-info" href="#">Add new benefit</a></div>
                </div>

            </div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Default Profile</h5></div>
                <div class="input-group col-md-9">
                    <div class="form-group" style="padding: 10px">
                        <div class="form-check">
                            <label>
                                <input type="checkbox" name="check_save_info" checked hidden> <span class="label-text" style="font-size: 18px"><i>Save above company info to my default company profile</i></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hr-line-dashed"></div>

            <div class="row" style="padding: 5px">
                <div class="col-md-3 col-sm-3 text-right"><h5 style="padding: 10px">Company Logo</h5></div>
                <div class="col-md-9 col-sm-9" style="padding-bottom: 10px">
                    <div style="padding-bottom: 10px"><img id="blah" src="#" alt="your image" /></div>
                    <div style="padding-left: 50px">
                        <label style="padding-top: 5px;padding-bottom: 5px;padding-right: 20px;padding-left: 20px" class="btn btn-outline-primary btn-lg">Upload logo<input type="file" accept="image/x-png,image/gif,image/jpeg" onchange="readURL(this);" hidden></label>
                    </div>
                    <div style="font-size: 12px; padding-left: 10px"><i>(File type .jpg .jped .png .gif)</i></div>
                    <div class="form-check" style="padding-top: 10px">
                        <label>
                            <input type="checkbox" name="check_show_logo" checked hidden> <span class="label-text" style="font-size: 16px">Display logo</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <!-- <input name="id_account_recruiter" id="id_account_recruiter" type="text" value="2"/>
        <input name="fee" id="fee" type="text" value="150"/>
        <input name="time_for_submitssion" id="time_for_submitssion" type="text" value="2018-08-24"/>
        <input name="benefit" id="benefit" type="text" value="traveling"/> -->

        <div class="row" style="background: #333; padding: 10px">
            <div class="col-md-8 col-sm-8">
            </div>
            <div class="col-md-4 col-sm-4">
                <button onclick="test()" type="submit" class="btn btn-primary" style="font-size: 20px; float: left; padding: 10px 50px;">Post Job</button>
            </div>
        </div>

    </form>

    <!-- End info Area -->
    @endsection

@section('scripts-first')
    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
@endsection

@section('scripts-end')
    <script src="{{ asset('js/post_news.js') }}"></script>
@endsection




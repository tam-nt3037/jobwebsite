@extends('layouts.app')
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Job Details				
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="single.html"> Job Details</a></p>
                </div>											
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
        
    <!-- Start post Area -->
    <section class="post-area section-gap">
        <div class="container">
            <div class="row justify-content-center d-flex">

                        {{--Start get data for details info--}}
                @if((count($post_news)) > 0)
                    @foreach($post_news as $post)
                <div class="col-lg-8 post-list">
                    <div class="single-post d-flex flex-row">
                        <div class="thumb">
                            <img src="{{ asset('img/post.png') }}" alt="">
                            <ul class="tags">
                                <li>
                                    <a href="#">Art</a>
                                </li>
                                <li>
                                    <a href="#">Media</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>					
                                </li>
                            </ul>
                        </div>
                        <div class="details">
                            <div class="title d-flex flex-row justify-content-between">
                                <div class="titles">
                                    <a href="#"><h4>{{$post->job_title}}</h4></a>
                                    <h6>{{$post->company_name}}</h6>
                                </div>
                                <ul class="btns">
                                    <li><a href="#"><span class="lnr lnr-heart"></span></a></li>
                                    <li><a href="#">Apply</a></li>
                                </ul>
                            </div>
                            <p>
                                {{$post->description_work}}
                            </p>
                            <h5>Job Nature: {{$post->name_type_work}}</h5>
                            <p class="address"><span class="lnr lnr-map"></span> {{$post->location_work}}</p>
                            <p class="address"><span class="lnr lnr-database"></span> {{$post->name_level_salary}}</p>
                            <p class="address"><span class="lnr lnr-clock"></span> Time for submisstion: <b>{{$post->time_for_submission}}</b></p>
                            <p class="address"><span class="lnr lnr-shirt"></span> Number of recruitment: <b>{{$post->number_recruits }}</b> people</p>
                            <p class="address"><span class="lnr lnr-user"></span> Gender : {{$post->gender }} </p>
                        </div>
                    </div>
                    <div class="single-post job-details">
                        <h4 class="single-title"> WHAT WE CAN OFFER</h4>
                        <p>
                            {{$post->benefit}}
                        </p>
                    </div>
                    <div class="single-post job-details">
                        <h4 class="single-title">Whom we are looking for</h4>
                        <p>
                            <img src="{{ asset('img/pages/list.jpg') }}" alt="">
                            <span>{{$post->description_work}}</span>
                        </p>
                    </div>
                    <div class="single-post job-experience">
                        <h4 class="single-title">Job Requirements</h4>
                        <ul>
                            <li>
                                <img src="{{ asset('img/pages/list.jpg') }}" alt="">
                                <span>{{$post->require_work}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="single-post job-experience">
                        <h4 class="single-title">Experience Requirements</h4>
                        <ul>
                            <li>
                                <img src="{{ asset('img/pages/list.jpg') }}" alt="">
                                <span>Above {{$post->id_year_experience}} years relevant experience in work</span>
                            </li>
                        </ul>
                    </div>
                    <div class="single-post job-experience">
                        <h4 class="single-title">Job Features & Overviews</h4>
                        <ul>
                            <li>
                                <img src="{{ asset('img/pages/list.jpg') }}" alt="">
                                <span></span>
                            </li>
                        </ul>
                    </div>	
                    <div class="single-post job-experience">
                        <h4 class="single-title">Education Requirements</h4>
                        <ul>
                            <li>
                                <img src="{{ asset('img/pages/list.jpg') }}" alt="">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquaut enim ad minim veniam.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="single-post job-experience">
                        <h4 class="single-title">Profile Requirements</h4>
                        <ul>
                            <li>
                                <img src="{{ asset('img/pages/list.jpg') }}" alt="">
                                <span>Require for profile: {{$post->require_profile}}</span>
                            </li>
                        </ul>
                    </div>
                </div>

                        {{--End get data for details info--}}

                {{-- #sidebar --}}
                <div class="col-lg-4 sidebar">
                    <div class="single-slidebar">
                        <h4><hr></h4>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex"><p>POSTED DATE</p><span>{{ date('d - m - Y',strtotime($post->date_posted)) }}</span></a></li>
                            <hr>
                        </ul>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex"><p>JOB LEVEL</p><span>{{$post->name_level}}</span></a></li>
                            <hr>
                        </ul>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex"><p>JOB CATEGORY</p></a></li>
                        </ul>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex"><p></p><span>{{$post->name_job_category}}</span></a>

                        </ul>
                        <hr>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex"><p>SKILL</p><span></span></a></li>
                        </ul>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex"><p></p><span>{{$post->skills}}</span></a>
                        </ul>
                        <hr>
                        <ul class="cat-list">
                            <li><a class="justify-content-between d-flex"><p>PREFERRED LANGUAGE</p><span>{{$post->name_languages_profile}}</span></a></li>
                        </ul>
                        <hr>
                    </div>
                </div>
                    @endforeach
                @endif
                {{-- #end sidebar --}}

                {{-- #sidebar --}}
                {{--@include('inc.sidebar')--}}
                {{-- #end sidebar --}}
                
            </div>
        </div>	
    </section>
    <!-- End post Area -->


    <!-- Start callto-action Area -->
    <section class="callto-action-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content col-lg-9">
                    <div class="title text-center">
                        <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                        <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                        <a class="primary-btn" href="#">I am a Candidate</a>
                        <a class="primary-btn" href="#">We are an Employer</a>
                    </div>
                </div>
            </div>	
        </div>	
    </section>
    <!-- End calto-action Area -->
@endsection
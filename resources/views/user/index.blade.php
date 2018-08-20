@extends('layouts.app') 
@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <h1 class="text-white">
                    <span>1500+</span> Jobs posted last week				
                </h1>	
                <form action="/search" class="serach-form-area">
                    <div class="row justify-content-center form-wrap">
                        <div class="col-lg-4 form-cols">
                            <input type="text" class="form-control" name="search" placeholder="what are you looging for?">
                        </div>
                        <div class="col-lg-3 form-cols">
                            <div class="default-select" id="default-selects"">
                                <select>
                                    <option value="1">Select area</option>
                                    <option value="2">Dhaka</option>
                                    <option value="3">Rajshahi</option>
                                    <option value="4">Barishal</option>
                                    <option value="5">Noakhali</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 form-cols">
                            <div class="default-select" id="default-selects2">
                                <select>
                                    <option value="1">All Category</option>
                                    <option value="2">Medical</option>
                                    <option value="3">Technology</option>
                                    <option value="4">Goverment</option>
                                    <option value="5">Development</option>
                                </select>
                            </div>										
                        </div>
                        <div class="col-lg-2 form-cols">
                            <button type="button" class="btn btn-info">
                                <span class="lnr lnr-magnifier"></span> Search
                            </button>
                        </div>								
                    </div>
                </form>	
                <p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start features Area -->
<section class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Searching</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Applying</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Security</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-feature">
                    <h4>Notifications</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>
            </div>																		
        </div>
    </div>	
</section>
<!-- End features Area -->

<!-- Start popular-post Area -->
<section class="popular-post-area pt-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="active-popular-post-carusel">
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img class="img-fluid" src="{{ asset('img/p1.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="/details"><h4>Creative Designer</h4></a>
                        <h6>Los Angeles</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                        </p>
                    </div>
                </div>	
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('img/p2.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Los Angeles</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                        </p>
                    </div>
                </div>
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('img/p1.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Los Angeles</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                        </p>
                    </div>
                </div>	
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('img/p2.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Los Angeles</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                        </p>
                    </div>
                </div>	
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('img/p1.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Los Angeles</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                        </p>
                    </div>
                </div>	
                <div class="single-popular-post d-flex flex-row">
                    <div class="thumb">
                        <img src="{{ asset('img/p2.png') }}" alt="">
                        <a class="btns text-uppercase" href="#">view job post</a>
                    </div>
                    <div class="details">
                        <a href="#"><h4>Creative Designer</h4></a>
                        <h6>Los Angeles</h6>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
                        </p>
                    </div>
                </div>																																							
            </div>
        </div>
    </div>	
</section>
<!-- End popular-post Area -->

<!-- Start feature-cat Area -->
<section class="feature-cat-area pt-100" id="category">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Featured Job Categories</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>						
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{ asset('img/o1.png') }}" alt="">
                    </a>
                    <p>Accounting</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{ asset('img/o2.png') }}" alt="">
                    </a>
                    <p>Development</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{ asset('img/o3.png') }}" alt="">
                    </a>
                    <p>Technology</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{ asset('img/o4.png') }}" alt="">
                    </a>
                    <p>Media & News</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{ asset('img/o5.png') }}" alt="">
                    </a>
                    <p>Medical</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <div class="single-fcat">
                    <a href="category.html">
                        <img src="{{ asset('img/o6.png') }}" alt="">
                    </a>
                    <p>Goverment</p>
                </div>			
            </div>																											
        </div>
    </div>	
</section>
<!-- End feature-cat Area -->

<!-- Start post Area -->
<section class="post-area section-gap">
    <div class="container">
        <div class="row justify-content-center d-flex">
            <div class="col-lg-8 post-list">
                {{--<ul class="cat-list">--}}
                    {{--<li><a href="#">Recent</a></li>--}}
                    {{--<li><a href="#">Full Time</a></li>--}}
                    {{--<li><a href="#">Intern</a></li>--}}
                    {{--<li><a href="#">part Time</a></li>--}}
                {{--</ul>--}}

                <style>
                    ul li a:hover{
                        text-decoration: none;
                    }
                </style>
                <ul class="cat-list" style="">
                    <li class="active"><a data-toggle="tab" href="#home1">RECENT</a></li>
                    <li><a data-toggle="tab" href="#menu1">FULL-TIME</a></li>
                    <li><a data-toggle="tab" href="#menu2">INTERN</a></li>
                    <li><a data-toggle="tab" href="#menu3">PART-TIME</a></li>
                </ul>

                <div class="tab-content">
                    <div id="home1" class="tab-pane fade in active">
                        {{--Recent--}}
                        @if((count($post_news_by_date)) > 0)
                            @foreach($post_news_by_date as $post_date)
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
                                            <div class="col-md-11 col-sm-11">
                                                <div class="titles">
                                                    <a href="/details/{{$post_date->id_posts}}"><h4>{{$post_date->job_title}}</h4></a>
                                                    <h6>{{$post_date->company_name}}</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-1 col-sm-1">
                                                <ul class="btns">
                                                    <li style="border:none; background-color: #F9F9FF;"><a href="#"><span class="lnr lnr-heart"></span></a></li>

                                                    {{--Start Apply Modal--}}
                                                    {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="return getIdPost()">--}}
                                                    {{--Apply--}}
                                                    {{--</button>--}}

                                                    <li style="border:none; background-color: #F9F9FF;">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p>
                                            {{$post_date->description_work}}
                                        </p>
                                        <h5>Job Nature: {{$post_date->name_type_work}}</h5>
                                        <p class="address"><span class="lnr lnr-map"></span> {{$post_date->location_work}}</p>
                                        <p class="address"><span class="lnr lnr-database"></span> {{$post_date->name_level_salary}}</p>
                                        <p class="address"><span class="lnr lnr-clock"></span> Time for submission: <b>{{$post_date->time_for_submission}}</b></p>
                                        <p class="address"><span class="lnr lnr-shirt"></span> Number of recruitment: <b>{{$post_date->number_recruits }}</b> people</p>
                                        <p class="address"><span class="lnr lnr-user"></span> Gender : {{$post_date->gender }} </p>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>Not found any post news</p>
                        @endif
                        {{--end Recent--}}
                    </div>
                    <div id="menu1" class="tab-pane fade">
                        <h3>Menu 1</h3>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <div id="menu2" class="tab-pane fade">
                        <h3>Menu 2</h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>Menu 3</h3>
                        <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                </div>



                <a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>
            </div>
            {{--Include Sidebar--}}
            @include('inc.sidebar')
        </div>
    </div>
</section>
<!-- End post Area -->
    

<!-- Start callto-action Area -->
<section class="callto-action-area section-gap" id="join">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content col-lg-9">
                <div class="title text-center">
                    <h1 class="mb-10 text-white">Join us today without any hesitation</h1>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <a class="primary-btn" href="#">I am a Candidate</a>
                    <a class="primary-btn" href="#">Request Free Demo</a>
                </div>
            </div>
        </div>	
    </div>	
</section>
<!-- End calto-action Area -->

<!-- Start download Area -->
<section class="download-area section-gap" id="app">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 download-left">
                <img class="img-fluid" src="{{ asset('img/d1.png') }}" alt="">
            </div>
            <div class="col-lg-6 download-right">
                <h1>Download the <br>
                Job Listing App Today!</h1>
                <p class="subs">
                    It won’t be a bigger problem to find one video game lover in your neighbor. Since the introduction of Virtual Game, it has been achieving great heights so far as its popularity and technological advancement are concerned.
                </p>
                <div class="d-flex flex-row">
                    <div class="buttons">
                        <i class="fa fa-apple" aria-hidden="true"></i>
                        <div class="desc">
                            <a href="#">
                                <p>
                                    <span>Available</span> <br>
                                    on App Store
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="buttons">
                        <i class="fa fa-android" aria-hidden="true"></i>
                        <div class="desc">
                            <a href="#">
                                <p>
                                    <span>Available</span> <br>
                                    on Play Store
                                </p>
                            </a>
                        </div>
                    </div>									
                </div>						
            </div>
        </div>
    </div>	
</section>
<!-- End download Area -->
@endsection


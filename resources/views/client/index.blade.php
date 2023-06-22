@extends('client.layouts.master')

@section('content')
   
    <div class="wa_main_bn_wrap swiper">
        <div id="main-slider" class="owl-carousel owl-theme slider-active swiper-wrapper ">
            @if (isset($sliders))
                @foreach ($sliders as $slider)
                    <div class="item swiper-slide">
                        <figure>
                            <img src="{{ env('APP_URL') . 'uploads/slider/' . $slider->filename }}"
                                class="hidden-xs hidden-sm " alt="" />
                            <figcaption>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <h2 class="wa-theme-color">{{ $slider->title }}</h2>
                                            <p>{{ $slider->description }}</p>
                                            <a href="#" class="theme-button theme-Color-button">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    
    <section class="about-section padTB100">
        <div class="container">
            <div class="row">
            
                <div class="centered-title">
                    <div class="col-md-12">
                        <h2>Who We are <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>

                    </div>
                </div>
    
                <div class="content-container">
                    <!--about Box-->
                    <div class="about-box">
                        <!--about Content-->
                        <div class="about-content">
                            <div class="about">
                                <div class="clearfix">
                                    @foreach ($abouts as $about)
                                        @if (isset($about))
                                            <!--Image Column-->
                                            <div class="column image-column col-md-6 col-sm-12 col-xs-12">
                                                <div class="inner">
                                                    <figure> <img
                                                            src="{{ env('APP_URL') . 'uploads/about/' . $about->filename }}"
                                                            alt="{{ $about->title }}" /></figure>
                                                </div>
                                            </div>
                                            <!--Content Column-->
                                            <div class="column content-column col-md-6 col-sm-12 col-xs-12">
                                                <div class="inner">
                                                    <span>About The Company</span>
                                                    <h2>{{ $about->title }}</h2>
                                                    <p>
                                                        {!! $about->description !!}
                                                    </p>

                                                    <div class="clear"></div>
                                                    <a href="{{ route('about') }}" class="theme-button marT10">Read more</a>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//=======About section End=======//-->

    <section class="service-try">
        <div class="container">
            <div class="card">
                <div class="card-image">
                    <img
                        src="https://images.unsplash.com/photo-1604135307399-86c6ce0aba8e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1374&q=80">
                </div>
                <div class="card-text">
                    <p class="card-meal-type">Breakfast/Eggs</p>
                    <h2 class="card-title">Délicieux Bénédicte</h2>
                    <p class="card-body">Eggs Benedict with hollandaise sauce, crispy bacon and an assortment of garden
                        herbs.</p>
                </div>
                <a href="" class="theme-button marT10">Read more</a>
            </div>
            <div class="card">
                <div class="card-image">
                    <img
                        src="https://images.unsplash.com/photo-1551782450-17144efb9c50?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1769&q=80">
                </div>
                <div class="card-text">
                    <p class="card-meal-type">Lunch/Meat</p>
                    <h2 class="card-title">Du bœuf Burger</h2>
                    <p class="card-body">A beef burger with wholewheat patty, juicy lettuce and a side of gluten free fries
                    </p>
                    <a href="" class="theme-button marT10">Read more</a>
                </div>

            </div>
            <div class="card">
                <div class="card-image">
                    <img
                        src="https://images.unsplash.com/photo-1635146037526-a75e6905ad78?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1834&q=80">
                </div>
                <div class="card-text">
                    <p class="card-meal-type">Soups/Meat</p>
                    <h2 class="card-title">Soupe à l’oignon</h2>
                    <p class="card-body">The traditional French soup made with onions and beef with a dollop of garlic and
                        saffaron mayonise.</p>
                </div>
                <div class="card-price"><a href="" class="theme-button marT10">Read more</a></div>
            </div>

        </div>
    </section>
    <!--//=============Services Start============//-->
    <section class="services padB100 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12">
                            <!--//==Section Heading Start==//-->
                            <div class="centered-title">
                                <h2>Our Services <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!--//==Section Heading End==//-->
                    <div class="row">
                        <!--//==Services Item Start==//-->
                        @foreach ($services as $service)
                            <div class="col-md-3 col-sm-6">
                                <div class="wa-box-style2 grey-bg">
                                    <div class="img">
                                        <img src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                            alt="">
                                    </div>
                                    <div class="text">
                                        <h4><a href="service-detail.html">{{ $service->title }}</a></h4>
                                        <p>{!! Str::words($service->description, 15, ' ...') !!}</p>
                                        <a href="{{ route('service.show', ['slug' => $service->slug]) }}"
                                            class="theme-button marT10">Read more</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!--//==Services Item End==//-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//=============Services End============//-->
    <!--//=======Our Team Start=======//-->
    <div class="our-team-main padB100">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>Our Team<span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
                <!--//==Section Heading End==//-->
                <div class="col-md-12">
                    <div class="row">
                        <!--//==Team Item==//-->
                        @if (isset($teams))
                            @foreach ($teams as $team)
                                <div class="col-md-3 col-sm-6">
                                    <div class="latest-team-item">
                                        <div class="wa-team">
                                            <div class="wa-team-thumbnail item our-team-item wa-item">
                                                <img src="{{ env('APP_URL') . 'uploads/team/' . $team->image }}"
                                                    alt="">
                                                <div class="caption">
                                                    <div class="caption-text">
                                                        <div class="clear"></div>
                                                        <div class="wa-team-caption">
                                                            <ul class="wa-team-icon">
                                                                <li><a href="{{ $team->facebook_link }}"
                                                                        title="facebook">
                                                                        <i class="fab fa-facebook"></i></a></li>

                                                                <li><a href="{{ $team->twitter_link }}"
                                                                        title="twiiter"><i class="fab fa-twitter"></i></a>
                                                                </li>
                                                                <li><a href="{{ $team->linkedin_link }}"
                                                                        title="linkedin"><i
                                                                            class="fab fa-linkedin"></i></a></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mask-top-upper">
                                                <div class="mask-top">
                                                    <h4>{{ $team->name }}</h4>
                                                    <span>{{ $team->designation }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--//==Team Item==//-->
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//=======Our Team End=======//-->
    <!--//=========Fun Facts Start=========//-->
    <section class="fun-facts padTB100">
        <div class="special-style-full special-style-full-1 special-area-widthfull special-style-dark">
            <div class="bg-image parallax-style facts-bg"></div>
        </div>
        <div id="fun-factor" class="fun-fact-section dark-theme-fun-fact">
            <div class="container text-center">
                <h3 class="marB10">Check Out Our Awesome Statistics Till Now!</h3>
                <h1 class="marB50">&amp; Hire Us Now</h1>
                <div class="row text-center fact-counter pad-s15">
                    <!--//==Facts Counter Item==//-->
                    <div class="row">
                    @if (isset($counters))
                        @foreach ($counters as $counter)
                                <div class="col-md-3 col-sm-6 coun">
                                    <div class="counter">
                                        <span class="counter-value">{{$counter->number}}</span>
                                        <h3>{{$counter->title}}</h3>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                </div>
            </div>
        </div>
    </section>
   
    <!--//=============Projects area Start============//-->
    <div class="wa-project-main padTB100">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>Our Projects<span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>

                    </div>
                </div>
                <!--//==Section Heading End==//-->
                <div class="col-md-12">
                    <!--//==Filter Button Start==//-->
                    <div class="controls text-center padB30">
                        <a class="filter-1 filter-tab active" data-filter="all">All</a>
                        <a class="filter-1 filter-tab" data-filter=".cat1">Category1</a>
                        <a class="filter-1 filter-tab" data-filter=".cat2">Category2</a>
                        <a class="filter-1 filter-tab" data-filter=".cat3">Category3</a>
                        <a class="filter-1 filter-tab" data-filter=".cat4">Category4</a>
                    </div>
                </div>
            </div>
            <div class="row" id="MixItUp1">
                <!--//==project Item==//-->
                <div
                    class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat1 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img1.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img1.jpg" class="fancybox"
                                                data-fancybox-group="group"><i class="fa fa-arrows-alt"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-project-caption">
                            <h2>
                                <a href="project-detail-sidebar.html">Project title here</a>
                            </h2>
                            <div class="clear"></div>
                            <h5>Project Category</h5>
                        </div>
                    </div>
                </div>
                <!--//==project Item==//-->
                <div
                    class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat4 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img2.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img2.jpg" class="fancybox"
                                                data-fancybox-group="group"><i class="fa fa-arrows-alt"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-project-caption">
                            <h2>
                                <a href="project-detail-sidebar.html">Project title here</a>
                            </h2>
                            <div class="clear"></div>
                            <h5>Project Category</h5>
                        </div>
                    </div>
                </div>
                <!--//==project Item==//-->
                <div
                    class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat2 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img3.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img3.jpg" class="fancybox"
                                                data-fancybox-group="group"><i class="fa fa-arrows-alt"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-project-caption">
                            <h2>
                                <a href="project-detail-sidebar.html">Project title here</a>
                            </h2>
                            <div class="clear"></div>
                            <h5>Project Category</h5>
                        </div>
                    </div>
                </div>
                <!--//==project Item==//-->
                <div
                    class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat3 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img4.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img4.jpg" class="fancybox"
                                                data-fancybox-group="group"><i class="fa fa-arrows-alt"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-project-caption">
                            <h2>
                                <a href="project-detail-sidebar.html">Project title here</a>
                            </h2>
                            <div class="clear"></div>
                            <h5>Project Category</h5>
                        </div>
                    </div>
                </div>
                <!--//==project Item==//-->
                <div
                    class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat2 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img5.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img5.jpg" class="fancybox"
                                                data-fancybox-group="group"><i class="fa fa-arrows-alt"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-project-caption">
                            <h2>
                                <a href="project-detail-sidebar.html">Project title here</a>
                            </h2>
                            <div class="clear"></div>
                            <h5>Project Category</h5>
                        </div>
                    </div>
                </div>
                <!--//==project Item==//-->
                <div
                    class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat1 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img6.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img6.jpg" class="fancybox"
                                                data-fancybox-group="group"><i class="fa fa-arrows-alt"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-project-caption">
                            <h2>
                                <a href="project-detail-sidebar.html">Project title here</a>
                            </h2>
                            <div class="clear"></div>
                            <h5>Project Category</h5>
                        </div>
                    </div>
                </div>
                <!--//==project Item==//-->
                <div
                    class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat3 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img7.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img7.jpg" class="fancybox"
                                                data-fancybox-group="group"><i class="fa fa-arrows-alt"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-project-caption">
                            <h2>
                                <a href="project-detail-sidebar.html">Project title here</a>
                            </h2>
                            <div class="clear"></div>
                            <h5>Project Category</h5>
                        </div>
                    </div>
                </div>
                <!--//==project Item==//-->
                <div
                    class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat4 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img8.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img8.jpg" class="fancybox"
                                                data-fancybox-group="group"><i class="fa fa-arrows-alt"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-project-caption">
                            <h2>
                                <a href="project-detail-sidebar.html">Project title here</a>
                            </h2>
                            <div class="clear"></div>
                            <h5>Project Category</h5>
                        </div>
                    </div>
                </div>
                <!--//==project Item==//-->
                <div
                    class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat4 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img9.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img9.jpg" class="fancybox"
                                                data-fancybox-group="group"><i class="fa fa-arrows-alt"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link"
                                                    aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <div class="wa-project-caption">
                            <h2>
                                <a href="project-detail-sidebar.html">Project title here</a>
                            </h2>
                            <div class="clear"></div>
                            <h5>Project Category</h5>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--//=============Projects area End============//-->

    <!--//=======Our Testimonials Start=======//-->
    <section class="testimonial text-center dark-section padT90">
        <!--//======= Section Background parallax =======//-->
        <div class="special-style-full special-area-widthfull special-style-dark">
            <div class="bg-image parallax-style testimonial-bg"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>Clients Testimonial<span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>

                    </div>
                </div>
                <div class="testimonial-sec">
                    @if (count($testimonials) == 0)
                        <div class="intro">
                            <h1 class="text-gray fw-bold">No testimonials available yet.</h1>
                        </div>
                    @elseif(count($testimonials) >= 1)
                        <div class="swiper test-mySwiper py-4">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials as $testimonial)
                                    <div class="one swiper-slide">
                                        <blockquote>
                                            <span class="leftq quotes">&ldquo;</span>
                                            {{ $testimonial->description }}
                                            <span class="rightq quotes">&bdquo; </span>
                                        </blockquote>
                                        <div class="down-content">
                                            <img src="{{ asset('uploads/testimonial/' . $testimonial->image) }}" />
                                            <h2>{{ $testimonial->name }}</h2>
                                            <h6>{{ $testimonial->profession }}</h6>
                                        </div>
                                    </div>
                                @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--//=======Our Testimonials End=======//-->
    <!--//=========Blogs area Start=========//-->
    <section class="blogs_main padB100">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>Latest Blogs<span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>

                    </div>
                </div>
                <!--//==Section Heading End==//-->
                <div class="col-md-12">
                    <div class="row">
                        @if (isset($blogs))
                            @foreach ($blogs as $blog)
                                <div class="home-blog-item">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="wa-theme-design-block">
                                            <figure class="dark-theme">
                                                <img src="{{ asset(env('APP_URL') . 'uploads/blog/' . $blog->filename) }}"
                                                    alt="{{ $blog->title }}">
                                                <span class="hover-style"></span>
                                            </figure>
                                            <div class="block-caption">
                                                <h4><a
                                                        href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                                </h4>
                                                <div class="meta-block">
                                                    <ul class="inline">
                                                        <li><a href="#"><i class="fa fa-user"
                                                                    aria-hidden="true"></i>
                                                                admin</a></li>
                                                        <li><a href="#"><i class="fa fa-calendar"
                                                                    aria-hidden="true"></i>
                                                                {{ $blog->created_at->toFormattedDateString() }}</a></li>
                                                    </ul>
                                                </div>
                                                <p>
                                                    {!! Str::words($blog->description, 18, ' ...') !!}
                                                </p>
                                                <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}"
                                                    class="theme-button ">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//=========Blogs area End=========//-->
    <!--//=========Partners area Start=========//-->
    <section class="wa-partners padB100">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>Our Partners <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>

                    </div>
                </div>
                <!--//==Section Heading End==//-->
                <div class="col-md-12">
                    <div class="row ">
                        <div
                            class="wa-partner-carousel owl-carousel-style1 text-center owl-carousel owl-theme swiper-wrapper">
                            @if (count($partners) == 0)
                                <div class="intro">
                                    <h1 class="text-gray fw-bold">No partners available yet.</h1>
                                </div>
                            @elseif(count($partners) >= 1)
                                <div class="swiper partner-mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($partners as $partner)
                                            <div class="partener-item swiper-slide">
                                                <div class="col-lg-3">
                                                    <div class="wa-theme-design-block">
                                                        <figure class="dark-theme">
                                                            <img src="{{ env('APP_URL') . 'uploads/partner/' . $partner->filename }}"
                                                                alt="Thumbnail">
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//=========Partners area End=========//-->
@endsection

@push('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
  
 
$(document).ready(function(){
    $('.counter-value').each(function(){
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        },{
            duration: 3500,
            easing: 'swing',
            step: function (now){
                $(this).text(Math.ceil(now));
            }
        });
    });
});
    </script>
@endpush



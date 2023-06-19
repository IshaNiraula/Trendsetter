@extends('client.layouts.master')
@section('content')
     <!--//=======Main slider Start=======//--> 	 			
     <div class="wa_main_bn_wrap swiper">
        <div id="main-slider" class="owl-carousel owl-theme slider-active swiper-wrapper ">
            @if (isset($sliders))
            @foreach ($sliders as $slider)
            <div class="item swiper-slide">
                <figure>
                    <img src="{{ env('APP_URL') . 'uploads/slider/' . $slider->filename }}" class="hidden-xs hidden-sm " alt=""/>
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
    <!--//=======Main slider End=======//--> 

    <!--//=======About section Start=======//--> 
    <section class="about-section padTB100">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="centered-title">
                    <div class="col-md-12">
                        <h2>Who We are <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>
                        <em>doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo <br>inventore veritatis et quasi architecto beatae</em>
                    </div>
                </div>
                <!--//==Section Heading End==//-->
                <div class="content-container">
                    <!--about Box-->
                    <div class="about-box">
                        <!--about Content-->
                        <div class="about-content">
                            <div class="about">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    <div class="column image-column col-md-6 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <figure><img src="assets/img/all/weare.jpg" alt=""></figure>
                                        </div>
                                    </div>
                                    <!--Content Column-->
                                    <div class="column content-column col-md-6 col-sm-12 col-xs-12">
                                        <div class="inner">
                                            <p>
                                                It has survived not only five centuries, but also the leap into ele ctronic typesetting, remaining essentially un changed The industry's standard dummy text ever since doloremque. quis nostrud exercitation oris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.
                                            </p>
                                            <p>
                                                Fusce fermentum eros at mi varius sagittis. In vel nisi nec mauris blandit elementum. Donec in tincidunt est, eget ullamcorper libero. Nulla lacinia libero in est vulputate ullamcorper. incididunt ut labore et lorna aliqua. Ut enim ad minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea 
                                            </p>
                                            <p>
                                                velit turpis, euismod quis sollicitudin nec, ullamcorper porttitor nunc. Nullam quis urna ac diam commodo commodo.
                                            </p>
                                            <div class="clear"></div>
                                            <a href="#" class="theme-button marT10">Read more</a>
                                        </div>
                                    </div>
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
                                    <img src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}" alt="">
                                </div>
                                <div class="text">
                                    <h4><a href="service-detail.html">{{ $service->title }}</a></h4>
                                    <p>{!! Str::words($service->description, 15, ' ...') !!}</p>
                                    <a href="{{ route('service.show', ['slug' => $service->slug]) }}" class="theme-button marT10">Read more</a>
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
                                        <img src="{{ env('APP_URL') . 'uploads/team/' . $team->image }}" alt="">
                                        <div class="caption">
                                            <div class="caption-text">
                                                <div class="clear"></div>
                                                <div class="wa-team-caption">
                                                    <ul class="wa-team-icon">
                                                        <li><a href="{{ $team->facebook_link }}" title="facebook"><i class="fa-brands fa-facebook"></i></a></li>
                                                        <li><a href="{{ $team->twitter_link }}" title="twiiter"><i class="fa-brands fa-twitter"></i></a></li>
                                                        <li><a href="{{ $team->linkedin_link }}" title="linkedin"><i class="fa-brands fa-linkedin"></i></a></li>
                                                        <li><a href="{{ $team->insta_link }}" title="instagram"><i class="fa-brands fa-instagram"></i></a></li>
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
        <div class="special-style-full special-area-widthfull special-style-dark">
            <div class="bg-image parallax-style facts-bg"></div>
        </div>
        <div id="fun-factor" class="fun-fact-section dark-theme-fun-fact">
            <div class="container text-center">
                <h3 class="marB10">Check Out Our Awesome Statistics Till Now!</h3>
                <h1 class="marB50">&amp; Hire Us Now</h1>
                <div class="row text-center fact-counter pad-s15">
                    <!--//==Facts Counter Item==//-->
                    <div class="col-xs-12 col-sm-3 col-md-3 marB-s30">
                        <!-- Icon -->
                        <span class="top-box icon-box"><i class="fa fa-user-o" aria-hidden="true"></i></span>
                        <div class="count-number padTB40" data-count="207">
                            <h2><span class="counter">207</span></h2>
                        </div>
                        <!-- Title -->
                        <h2 class="facts-text">CLIENTS</h2>
                    </div>
                    <!--//==Facts Counter Item==//-->
                    <div class="col-xs-12 col-sm-3 col-md-3 marB-s30">
                        <!-- Icon -->
                        <span class="top-box icon-box"><i class="fa fa-building-o" aria-hidden="true"></i></span>
                        <div class="count-number padTB40" data-count="285">
                            <h2><span class="counter">285</span></h2>
                        </div>
                        <!-- Title -->
                        <h2 class="facts-text">Projects</h2>
                    </div>
                    <!--//==Facts Counter Item==//-->
                    <div class="col-xs-12 col-sm-3 col-md-3 marB-s30">
                        <!-- Icon -->
                        <span class="top-box icon-box"><i class="fa fa-heart-o" aria-hidden="true"></i></span>
                        <div class="count-number padTB40" data-count="654">
                            <h2><span class="counter">654</span></h2>
                        </div>
                        <!-- Title -->
                        <h2 class="facts-text">likes</h2>
                    </div>
                    <!--//==Facts Counter Item==//-->
                    <div class="col-xs-12 col-sm-3 col-md-3 marB-s30">
                        <!-- Icon -->
                        <span class="top-box icon-box"><i class="fa fa-comment-o" aria-hidden="true"></i></span>
                        <div class="count-number padTB40" data-count="714">
                            <h2><span class="counter">714</span></h2>
                        </div>
                        <!-- Title -->
                        <h2 class="facts-text">reviews</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//=========Fun Facts End=========//-->	 		
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
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat1 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img1.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img1.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
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
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat4 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img2.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img2.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
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
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat2 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img3.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img3.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
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
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat3 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img4.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img4.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
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
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat2 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img5.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img5.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
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
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat1 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img6.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img6.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
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
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat3 mix" >
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img7.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img7.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
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
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat4 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img8.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img8.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
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
                <div class="col-lg-4 col-lg-offset-0 col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-xs-12 col-xs-offset-0 cat4 mix">
                    <div class="wa-project">
                        <div class="wa-project-thumbnail wa-item">
                            <img src="assets/img/project/img9.jpg" alt="">
                            <div class="caption">
                                <div class="caption-text">
                                    <ul class="wa-project-icon">
                                        <li><a href="assets/img/project/img9.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                        <li><a href="project-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
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
    <!--//=============Product area Start============//-->
    <div class="wa-product-main home-product grey-bg padTB100">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>Our Products<span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>
                       
                    </div>
                </div>
                <!--//==Section Heading End==//-->
            </div>
            <div class="row">
                <div id="shop-carousel" class="carousel-style-1 owl-carousel owl-theme">
                    <!--//==product Item==//-->
                    <div class="col-xs-12">
                        <div class="wa-product">
                            <div class="wa-product-thumbnail wa-item">
                                <img src="assets/img/product/img1.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-product-icon">
                                            <li><a href="assets/img/product/img1.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-product-caption">
                                <h2>
                                    <a href="product-detail-sidebar.html">product title here</a>
                                </h2>
                                <div class="clear"></div>
                                <h5>product Category</h5>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-xs-12">
                        <div class="wa-product">
                            <div class="wa-product-thumbnail wa-item">
                                <img src="assets/img/product/img2.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-product-icon">
                                            <li><a href="assets/img/product/img2.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-product-caption">
                                <h2>
                                    <a href="product-detail-sidebar.html">product title here</a>
                                </h2>
                                <div class="clear"></div>
                                <h5>product Category</h5>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-xs-12">
                        <div class="wa-product">
                            <div class="wa-product-thumbnail wa-item">
                                <img src="assets/img/product/img3.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-product-icon">
                                            <li><a href="assets/img/product/img3.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-product-caption">
                                <h2>
                                    <a href="product-detail-sidebar.html">product title here</a>
                                </h2>
                                <div class="clear"></div>
                                <h5>product Category</h5>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-xs-12">
                        <div class="wa-product">
                            <div class="wa-product-thumbnail wa-item">
                                <img src="assets/img/product/img4.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-product-icon">
                                            <li><a href="assets/img/product/img4.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-product-caption">
                                <h2>
                                    <a href="product-detail-sidebar.html">product title here</a>
                                </h2>
                                <div class="clear"></div>
                                <h5>product Category</h5>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-xs-12">
                        <div class="wa-product">
                            <div class="wa-product-thumbnail wa-item">
                                <img src="assets/img/product/img5.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-product-icon">
                                            <li><a href="assets/img/product/img5.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-product-caption">
                                <h2>
                                    <a href="product-detail-sidebar.html">product title here</a>
                                </h2>
                                <div class="clear"></div>
                                <h5>product Category</h5>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-xs-12">
                        <div class="wa-product">
                            <div class="wa-product-thumbnail wa-item">
                                <img src="assets/img/product/img6.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-product-icon">
                                            <li><a href="assets/img/product/img6.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-product-caption">
                                <h2>
                                    <a href="product-detail-sidebar.html">product title here</a>
                                </h2>
                                <div class="clear"></div>
                                <h5>product Category</h5>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-xs-12" >
                        <div class="wa-product">
                            <div class="wa-product-thumbnail wa-item">
                                <img src="assets/img/product/img7.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-product-icon">
                                            <li><a href="assets/img/product/img7.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-product-caption">
                                <h2>
                                    <a href="product-detail-sidebar.html">product title here</a>
                                </h2>
                                <div class="clear"></div>
                                <h5>product Category</h5>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-xs-12">
                        <div class="wa-product">
                            <div class="wa-product-thumbnail wa-item">
                                <img src="assets/img/product/img8.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-product-icon">
                                            <li><a href="assets/img/product/img8.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-product-caption">
                                <h2>
                                    <a href="product-detail-sidebar.html">product title here</a>
                                </h2>
                                <div class="clear"></div>
                                <h5>product Category</h5>
                            </div>
                        </div>
                    </div>
                    <!--//==product Item==//-->
                    <div class="col-xs-12">
                        <div class="wa-product">
                            <div class="wa-product-thumbnail wa-item">
                                <img src="assets/img/product/img9.jpg" alt="">
                                <div class="caption">
                                    <div class="caption-text">
                                        <ul class="wa-product-icon">
                                            <li><a href="assets/img/product/img9.jpg" class="fancybox" data-fancybox-group="group"><i class="fa fa-arrows-alt" aria-hidden="true"></i></a></li>
                                            <li><a href="product-detail-sidebar.html"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="wa-product-caption">
                                <h2>
                                    <a href="product-detail-sidebar.html">product title here</a>
                                </h2>
                                <div class="clear"></div>
                                <h5>product Category</h5>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <!--//=============Product area End============//-->     
    <!--//=======Our Testimonials Start=======//-->
    <section class="testimonial text-center dark-section padTB100">
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
                <div class="col-md-12">
                    <div class="row">
                        <div id="testimonial-section2" class="owl-carousel owl-theme carousel-style-1">
                            <div class="col-md-12">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <img src="assets/img/testimonial/1.jpg" class="img-circle" alt="">
                                    </div>
                                    <div class="text">
                                        <h4><a href="#">john doe</a></h4>
                                        <p>
                                            But also the leap into electronic 
                                            remaining essentially unchang
                                            It was popularised in the of Letraset contain 
                                            Lorem Ipsum passages
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <img src="assets/img/testimonial/2.jpg" class="img-circle" alt="">
                                    </div>
                                    <div class="text">
                                        <h4><a href="#">john doe</a></h4>
                                        <p>
                                            But also the leap into electronic 
                                            remaining essentially unchang
                                            It was popularised in the of Letraset contain 
                                            Lorem Ipsum passages
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <img src="assets/img/testimonial/3.jpg" class="img-circle" alt="">
                                    </div>
                                    <div class="text">
                                        <h4><a href="#">john doe</a></h4>
                                        <p>
                                            But also the leap into electronic 
                                            remaining essentially unchang
                                            It was popularised in the of Letraset contain 
                                            Lorem Ipsum passages
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <img src="assets/img/testimonial/3.jpg" class="img-circle" alt="">
                                    </div>
                                    <div class="text">
                                        <h4><a href="#">john doe</a></h4>
                                        <p>
                                            But also the leap into electronic 
                                            remaining essentially unchang
                                            It was popularised in the of Letraset contain 
                                            Lorem Ipsum passages
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <img src="assets/img/testimonial/3.jpg" class="img-circle" alt="">
                                    </div>
                                    <div class="text">
                                        <h4><a href="#">john doe</a></h4>
                                        <p>
                                            But also the leap into electronic 
                                            remaining essentially unchang
                                            It was popularised in the of Letraset contain 
                                            Lorem Ipsum passages
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wa-box-style2">
                                    <div class="icon">	
                                        <img src="assets/img/testimonial/3.jpg" class="img-circle" alt="">
                                    </div>
                                    <div class="text">
                                        <h4><a href="#">john doe</a></h4>
                                        <p>
                                            But also the leap into electronic 
                                            remaining essentially unchang
                                            It was popularised in the of Letraset contain 
                                            Lorem Ipsum passages
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//=======Our Testimonials End=======//-->
    <!--//=========Blogs area Start=========//-->	 
    <section class="blogs_main padTB100">
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
                        <div class="home-blog-item">
                            <div class="col-md-4 col-sm-6">
                                <div class="wa-theme-design-block">
                                    <figure class="dark-theme">
                                        <img src="assets/img/all/wa-img1.jpg" alt="Thumbnail">	
                                        <span class="hover-style"></span>
                                    </figure>
                                    <div class="block-caption">
                                        <h4><a href="blog-detail-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                        <div class="meta-block">
                                            <ul class="inline">
                                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                                <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 30, 2017</a></li>
                                            </ul>
                                        </div>
                                        <p>
                                            Many desktop publishing packages and web page editors now use their default model text their infanc migasento.
                                        </p>
                                        <a href="blog-detail-sidebar.html" class="theme-button ">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-blog-item">
                            <div class="col-md-4 col-sm-6">
                                <div class="wa-theme-design-block">
                                    <figure class="dark-theme">
                                        <img src="assets/img/all/wa-img2.jpg" alt="Thumbnail">	
                                        <span class="hover-style"></span>
                                    </figure>
                                    <div class="block-caption">
                                        <h4><a href="blog-detail-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                        <div class="meta-block">
                                            <ul class="inline">
                                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                                <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 30, 2017</a></li>
                                            </ul>
                                        </div>
                                        <p>
                                            Many desktop publishing packages and web page editors now use their default model text their infanc migasento.
                                        </p>
                                        <a href="blog-detail-sidebar.html" class="theme-button ">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-blog-item">
                            <div class="col-md-4 col-sm-6">
                                <div class="wa-theme-design-block">
                                    <figure class="dark-theme">
                                        <img src="assets/img/all/wa-img3.jpg" alt="Thumbnail">	
                                        <span class="hover-style"></span>
                                    </figure>
                                    <div class="block-caption">
                                        <h4><a href="blog-detail-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                        <div class="meta-block">
                                            <ul class="inline">
                                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                                <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 30, 2017</a></li>
                                            </ul>
                                        </div>
                                        <p>
                                            Many desktop publishing packages and web page editors now use their default model text their infanc migasento.
                                        </p>
                                        <a href="blog-detail-sidebar.html" class="theme-button">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home-blog-item hidden-lg hidden-md">
                            <div class="col-md-4 col-sm-6">
                                <div class="wa-theme-design-block">
                                    <figure class="dark-theme">
                                        <img src="assets/img/all/wa-img4.jpg" alt="Thumbnail">	
                                        <span class="hover-style"></span>
                                    </figure>
                                    <div class="block-caption">
                                        <h4><a href="blog-detail-sidebar.html">Mauris et pulvinar cidunt</a></h4>
                                        <div class="meta-block">
                                            <ul class="inline">
                                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                                <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> Sep 30, 2017</a></li>
                                            </ul>
                                        </div>
                                        <p>
                                            Many desktop publishing packages and web page editors now use their default model text their infanc migasento.
                                        </p>
                                        <a href="blog-detail-sidebar.html" class="theme-button">read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <h2>Our  Partners <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>
                        <em>dNam ac egestas est. Mauris et pulvinar risus, at tincidunt lorem. Maecenas<br>
                        tristique sit amet odio sit amet aliquet.</em>
                    </div>
                </div>
                <!--//==Section Heading End==//-->
                <div class="col-md-12">
                    <div class="row">
                        <div class="wa-partner-carousel owl-carousel-style1 text-center owl-carousel owl-theme">
                            <div class="partener-item">
                                <div class="col-md-12">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="assets/img/partner/1.png" alt="Thumbnail">						  
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="partener-item">
                                <div class="col-md-12">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="assets/img/partner/2.png" alt="Thumbnail">						  
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="partener-item">
                                <div class="col-md-12">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="assets/img/partner/3.png" alt="Thumbnail">						  
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="partener-item">
                                <div class="col-md-12">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="assets/img/partner/4.png" alt="Thumbnail">						  
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="partener-item">
                                <div class="col-md-12">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="assets/img/partner/5.png" alt="Thumbnail">						  
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="partener-item">
                                <div class="col-md-12">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="assets/img/partner/6.png" alt="Thumbnail">						  
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="partener-item">
                                <div class="col-md-12">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="assets/img/partner/7.png" alt="Thumbnail">						  
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="partener-item">
                                <div class="col-md-12">
                                    <div class="wa-theme-design-block">
                                        <figure class="dark-theme">
                                            <img src="assets/img/partner/8.png" alt="Thumbnail">						  
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//=========Partners area End=========//-->	  

@endsection

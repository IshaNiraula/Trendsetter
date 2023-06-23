@extends('client.layouts.master')


@section('content')
    <!--//==Page Header Start==//-->
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>About Us</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <ul class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                            <li class="active">About Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//==Page Header End==//-->
    <!--//=======About Section Start=======//-->
    <section class="about-section padTB100">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="centered-title">
                    <div class="col-md-12">
                        <h2>Who We are <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>
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
                                    @foreach ($abouts as $about)
                                        @if (isset($about))
                                            <div class="column image-column col-md-6 col-sm-12 col-xs-12">
                                                <div class="inner">
                                                    <figure><img
                                                            src="{{ env('APP_URL') . 'uploads/about/' . $about->filename }}"
                                                            alt="{{ $about->title }}" /></figure>
                                                </div>
                                            </div>
                                            <!--Content Column-->
                                            <div class="column content-column col-md-6 col-sm-12 col-xs-12">
                                                <div class="inner">
                                                    <span>About The Company</span>
                                                    <h2>{{ $about->title }}</h2>
                                                    <p>{!! $about->description !!}</p>
                                                    <div class="clear"></div>
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

    <!--//=======Our Team Section Start=======//-->
    <div class="our-team-main padTB60">
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
                                                                <li><a href="{{ $team->facebook_link }}" title="facebook">
                                                                        <i class="fab fa-facebook"></i></a></li>

                                                                <li><a href="{{ $team->twitter_link }}" title="twiiter"><i
                                                                            class="fab fa-twitter"></i></a></li>
                                                                <li><a href="{{ $team->linkedin_link }}" title="linkedin"><i
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
    <!--//=======Our Team Section End=======//-->

    <!--//=========Partners Start=========//-->
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
                <div class="row ">
                    <div class="col-md-12">
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
    <!--//=========Partners End=========//-->
    <section class="faqs padB100">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>Our Partners <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Section 1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur
                                            erat
                                            libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet
                                            lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endpush

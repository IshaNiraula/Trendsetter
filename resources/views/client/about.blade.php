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
                                <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//==Page Header End==//-->
    <!--//=======About Section Start=======//-->
    <section class="about-section ">
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
    <div class="our-team-main ">
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
                    <div class="row" >
                        <!--//==Team Item==//-->
                        @if (isset($teams))
                            @foreach ($teams as $team)
                                <div class="col-md-3 col-sm-6" data-aos="flip-left">
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

    <section class="faqs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>FREQUENTLY ASKED QUESTIONS. <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach($faqs as $faq)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{$loop->iteration}}">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                          {{$faq->question}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$loop->iteration}}" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="heading{{$loop->iteration}}">
                                    <div class="panel-body">
                                        <p>{{$faq->answer}} </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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

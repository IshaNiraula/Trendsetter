@extends('client.layouts.master')


@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95"
            style="background-image:url(assets/img/bg/breadcrumb-bg.jpg);">
            <div class="container">
                <h2>About Us</h2>
                <p> BJ Education Network is a team of highly professional, experienced and friendly Registered Migration
                    Agent, Education Counsellor and Lawyer operating since 2011. We are leading education and migration firm
                    specialised in Australian education and visas.
                </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a> <span><i class="fa fa-angle-double-right"></i> About
                            Page</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="choose-area bg-img pt-90" style="background-image:url(assets/img/bg/bg-8.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="about-img">
                        <img src="assets/img/banner/about.png" alt="">
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="about-chose-us pt-120">
                        <h2>Who we are</h2>
                        <p style="text-align: justify;">

                            BJ Education Network is the trusted and leading education and migration consulting service firm
                            both in Australia and in Nepal established in 2011. We have three offices dedicated to helping
                            you succeed in Australia. We have offices in Kathmandu and Birtamod Nepal where our professional
                            consultants can advise you on the course best suited to your interests and passions, and will
                            initiate the enrolment process on your behalf. We provide tailored solutions to the specific
                            need of our clients taking into consideration of their academic background, level of English,
                            skills and experience, financial status, interest, career goals and migration possibilities.
                            Your desires and aspirations are central to the advisory process, and the consultant assigned to
                            help you is committed to your success at university in Australia, and beyond!

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <section class="mission">
        <div class="container">
            <h2 class="mission-title">Mission & Values</h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/mission.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="warpper">
                        <input class="radio" id="one" name="group" type="radio" checked>
                        <input class="radio" id="two" name="group" type="radio">
                        <input class="radio" id="three" name="group" type="radio">
                        <div class="tabs">
                            <label class="tab" id="one-tab" for="one">VISION</label>
                            <label class="tab" id="two-tab" for="two">MISSION</label>
                            <label class="tab" id="three-tab" for="three">VALUES</label>
                        </div>
                        <div class="panels">
                            <div class="panel" id="one-panel">
                                <div class="panel-title">Vision</div>
                                <p>To serve individuals to reach their potential by helping them to achieve their Australian
                                    education and migration dream.</p>
                            </div>
                            <div class="panel" id="two-panel">
                                <div class="panel-title">Mission</div>
                                <p>To find best ways to help genuine international students to enrol into Australian
                                    universities/colleges and to help people to migrate into Australia.</p>
                            </div>
                            <div class="panel" id="three-panel">
                                <div class="panel-title">Values</div>
                                <ul>
                                    <li>Expertise - we train ourselves and committed to be the best in the industry so that
                                        we can provide the best service to our people.</li>
                                    <li>Ethics - We only do what is right.</li>
                                    <li>Honesty - We are upfront to our client about what to expect. We do not give false
                                        expectations.</li>
                                    <li>Result - We are committed to bring consistently possible best result to our client.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    
    <div class="teacher-area pt-130 pb-100">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Our <span>Team</span></h2>
                <p>We are team of highly experienced migration service executives with <br>high degree of professionalism
                    with highly personalised service.<br> The team members are:</p>
            </div>
            <div class="custom-row">
                @if (isset($members))
                    @foreach ($members as $member)
                        <div class="col-lg-4 px-3">
                            <div class="single-teacher mb-30">
                                <div class="teacher-img">
                                    <img src="{{ env('APP_URL') . 'uploads/team/' . $member->image }}" alt="">
                                </div>
                                <div class="teacher-content-visible">
                                    <h4>{{ $member->name }}</h4>
                                    <h5>{{ $member->designation }}</h5>
                                </div>
                                <div class="teacher-content-wrap">
                                    <div class="teacher-content">
                                        <h4>{{ $member->name }}</h4>
                                        <h5>{{ $member->designation }}</h5>
                                        <p>{!! Str::words($member->description, 25, ' ...') !!}</p>
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal{{ $loop->iteration }}"
                                            class="btn btn-sm btn-primary">More details</button>
                                        <div class="teacher-social">
                                            <ul>
                                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li><a class="youtube-play" href="#"><i
                                                            class="fa fa-youtube-play"></i></a>
                                                </li>
                                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="google-plus" href="#"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="exampleModal{{ $loop->iteration }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        {!! $member->description !!}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </div>

    <section class="why-choose-us mt-3 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about-choose.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                    <h2>WHY CHOOSE US</h2>
                        <p>BJ Education Network is a team of experienced, qualified and friendly professionals dedicated for
                            your result.</p>
                    </div>
                    <div class="wrapper">
                        <div class="icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <div class="info">
                            <h4>Experienced</h4>
                            <p>We are leading education and migration firm and we have helped over 1000 clients from over 20 countries to successfully enrol in to the college/university, apply for work visa and permanent residency. Our consultants have decades of experience in this industry and we are specialised for Australian education and visa only.</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="icon">
                            <i class="fas fa-poll"></i>
                        </div>
                        <div class="info">
                            <h4>Qualified</h4>
                            <p>We are a team of highly qualified Registered Migration Agent, Education Counsellor and Lawyer. We are required to operate with industry code of conduct.</p>
                        </div>
                    </div>
                    <div class="wrapper">
                        <div class="icon">
                            <i class="fas fa-address-card"></i>
                        </div>
                        <div class="info">
                            <h4>Result</h4>
                            <p>There are always more than one course that interests you, there are always more than one college or university that provides similar course, there are always more than one visa type you are eligible for. We help you to choose the course suitable for your interest and your career and also within your budget. We ask you right questions to identify the best visa option for you. We work for the best possible result for you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="video-area bg-img pt-270 pb-270" style="background-image:url(assets/img/banner/video-banner.jpg);">
        <div class="video-btn-2">
            <a class="video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                <img class="animated" src="assets/img/icon-img/viddeo-btn.png" alt="">
            </a>
        </div>
    </div>

    <section class="mt-5">
        <div class="achievement-area">

            <div class="container">
                <div class="section-title mb-75">
                    <h2>What our <span>clients say about us</span></h2>
                    <p>Friendly,experienced and professional people providing professionalised service which produces great
                        result.
                    </p>
                </div>

                @if (count($testimonials) == 0)
                    <div class="intro">
                        <h1 class="text-gray fw-bold">No any testimonials avaliable yet.</h1>
                    </div>
                @elseif(count($testimonials) >= 1)
                    <div class="swiper test-mySwiper py-4">
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="img-box">
                                        <img style="object-fit: cover"
                                            src="{{ asset(env('APP_URL') . 'uploads/testimonial/' . $testimonial->image) }}"
                                            class="profile" />
                                    </div>
                                    <p class="testimonial test-monial">{{ $testimonial->description }}</p>
                                    <p class="overview test-monial">
                                        <b>{{ $testimonial->name }}</b>{{ $testimonial->profession }}
                                    </p>
                            
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <div class="register-area bg-img pt-130 pb-130 contact-sec">
        <div class="container">
            <div class="section-title-2 white-text">
                <h2>Contact <span>Now</span></h2>
            </div>
            <div class="register-wrap">
                <div class="row">
                    <div class="col-lg-10 col-md-8">
                        <div class="register-form">
                            <form method="POST" action="{{route('contact.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="firstName" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="lastName" placeholder="Last Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="phone" placeholder="Phone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="email" placeholder="Email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button class="submit default-btn" type="submit">SUBMIT NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

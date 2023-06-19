@extends('client.layouts.master')
@section('metadata')
    @if (isset($metatag))
        <title>{{ $metatag->title }}</title>
        <meta name="description" content="{{ $metatag->description }}">
        <meta name="keywords" content="{{ $metatag->tags }}">
        <meta name="jadanconstruction" content="a construction company">
        <link rel="image_src" href="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
        <meta property="og:image" content="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
    @endif
@endsection
@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
            style="background-image:url(assets/img/bg/breadcrumb-bg-2.jpg);">
            <div class="container">
                <h2>Service</h2>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a> <span><i class="fa fa-angle-double-right"></i>Service</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="course-area bg-img pt-130 pb-100">
        <div class="container">

            <div class="row">
                @if (isset($services))
                    @foreach ($services as $service)
                        <div class="col-lg-4 col-sm-12 shadow service-card rounded">
                            <div class="course-img service-img">
                                <a href="{{ route('service.show', ['slug' => $service->slug]) }}"><img class="animated"
                                        src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                        alt=""></a>
                                {{-- <span>Addmission Going On</span> --}}
                            </div>
                            <div class="course-content service-content">
                                <h4><a
                                        href="{{ route('service.show', ['slug' => $service->slug]) }}">{{ $service->title }}</a>
                                </h4>
                                <p> {!! Str::words($service->description, 15, ' ...') !!}</p>
                            </div>
                            <div class="course-position-content">
                                {{-- <div class="credit-duration-wrap">
                                    <div class="sin-credit-duration">
                                        <i class="fa fa-diamond"></i>
                                        <span>Credits : 125</span>
                                    </div>
                                    <div class="sin-credit-duration">
                                        <i class="fa fa-clock-o"></i>
                                        <span>Duration : 4yrs</span>
                                    </div>
                                </div> --}}
                                <div class="course-btn service-btn event-btn">
                                    <a class="default-btn"
                                        href="{{ route('service.show', ['slug' => $service->slug]) }}">View More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
              
            </div>
        </div>
    </div>

    <section class="visa">
        <div class="container">
            <div class="service-visa">
                <h2>Visa</h2>
                <div class="row mt-5">
                    @if (isset($visas))
                    @foreach ($visas as $visa)
                            <div class="col-lg-4 col-sm-12 shadow service-card rounded">
                                <div class="course-img service-img">
                                    <a href="">
                                        <img class="animated" src="{{ env('APP_URL') . 'uploads/service/' . $visa->filename }}" alt="visa-img"></a>
                                </div>
                                <div class="course-content service-content">
                                    <h4><a href=""></a> {{ $visa->title }} </h4>
                                    <p>{!! Str::words($visa->description, 15, ' ...') !!} </p>
                                </div>
                                <div class="course-position-content">
                                  
                                    <div class="course-btn service-btn event-btn">
                                        <a class="default-btn"
                                            href="{{ route('visa.show', ['slug' => $visa->slug]) }}">View More</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        @if (isset($faqs))
            @foreach ($faqs as $faq)
                <div class="c">
                    <input type="checkbox" id="faq-{{ $loop->iteration }}">
                    <h4><label for="faq-{{ $loop->iteration }}">{{ $faq->question }}</label></h4>
                    <div class="p">
                        <p>{{ $faq->answer }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <div class="register-area bg-img pt-130 pb-130 contact-sec">
        <div class="container">
            <div class="section-title-2 mb-75 white-text">
                <h2>Register <span>Now</span></h2>
                <p>Winter Admission Is Going On. We are announcing Special discount for winter batch 2023.</p>
            </div>
            <div class="register-wrap">
                <div class="row">
                    <div class="col-lg-10 col-md-8">
                        <div class="register-form">
                            <h4>Get A free Registration</h4>
                            <form method="POST" action="{{ route('contact.store') }}">
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

@extends('client.layouts.master')

@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95"
            style="background-image:url({{ asset('assets/img/bg/breadcrumb-bg-5.jpg') }});">
            <div class="container">
                <h2>Event</h2>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a> <span><i class="fa fa-angle-double-right"></i>Event</span></li>
                </ul>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-lg-4">
                        <div class="shadow rounded mt-5 mb-5">
                            <div class="event-img">
                                <a href="{{ route('event.show', ['slug' => $event->slug]) }}"><img "
                                src="{{ env('APP_URL') . 'uploads/event/' . $event->filename }}"
                                alt="{{ $event->title }}" ></a>
                        <div class="event-date-wrap">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i>{{ $event->created_at->toDateString() }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">{{ $event->title }}</a></h3>
                        <p>{!! Str::words($event->description, 13, ' ...') !!}</p>
                        <div class="event-btn mt-4">
                            <a class="default-btn " href="{{ route('event.show', ['slug' => $event->slug]) }}">VIEW
                                MORE</a>
                        </div>
                    </div>
                </div>
          
            </div>
     @endforeach
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

@extends('client.layouts.master')

@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95"
            style="background-image:url({{ asset('assets/img/bg/breadcrumb-bg-5.jpg') }});">
            <div class="container">
                <h2>Gallery</h2>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Gallery</span></li>
                </ul>
            </div>
        </div>
    </div>

    <section>
        <div class="container mb-3">
            @if (count($galleries) == 0)
                <div class="intro">
                    <h1 class="text-danger fw-bold">there is no any gallery yet.</h1>
                </div>
            @elseif(count($galleries) > 0)
                <div class="row pb-3">
                    @foreach ($galleries as $gallerie)
                        <div class="col-lg-4">
                            <div class="g-image-wrapper shadow mt-3">
                                <img style="object-fit: cover;"
                                    src="{{ asset(env('APP_URL') . 'uploads/gallery/cover/' . $gallerie->cover_image) }}"
                                    alt="{{ $gallerie->title }}" class=" rounded w-100" />
                                <div style="text-align: center" class="overlay-wrapper">
                                    <div class="overlay-text p-3">
                                        <p>{{ $gallerie->title }}</p>
                                        <a href="{{ route('gallery.show', ['slug' => $gallerie->slug]) }}"
                                            class="btn btn-primary">View images</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {!! $galleries->links() !!}
            @endif
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

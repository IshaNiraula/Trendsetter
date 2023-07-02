@extends('client.layouts.master')
@section('content')
    <div class="wa_main_bn_wrap swiper ">
        <div id="main-slider" class="owl-carousel owl-theme slider-active swiper-wrapper ">
            @if (isset($sliders))
                @foreach ($sliders as $slider)
                    <div class="item swiper-slide">
                        <figure>
                            <img src="{{ env('APP_URL') . 'uploads/slider/' . $slider->filename }}"
                                class="" alt="" />
                            <figcaption>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <h2 class="wa-theme-color">{{ $slider->title }}</h2>
                                            <p>{{ $slider->description }}</p>
                                            <a href="{{ route('about') }}" class="theme-button theme-Color-button">read
                                                more</a>
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

     <!--//=======About section End=======//-->
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

     <!--//=============Services Start============//-->
    <section class="services text-center">
        <div class="container">
            <!--//==Section Heading Start==//-->
            <div class="centered-title">
                <h2>Our Services <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

            <!--//==Section Heading End==//-->
            <div class="row gap-4">
                <!--//==Services Item Start==//-->
                @foreach ($services as $service)
                    <div class="card-wrapper col-lg-4 col-md-6 col-12 padB60">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}" alt="">
                            </div>
                            <div class="card-text" data-aos="zoom-out-up">
                                <h2 class="card-title"><a
                                        href="{{ route('service.show', ['slug' => $service->slug]) }}">{{ $service->title }}</a>
                                </h2>
                                <p class="card-body">{!! Str::words($service->description, 15, ' ...') !!}</p>
                                <a href="{{ route('service.show', ['slug' => $service->slug]) }}"
                                    class="theme-button marT10">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="latest-team-item " data-aos="flip-left">
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
                                                                            class="fab fa-twitter"></i></a>
                                                                </li>
                                                                <li><a href="{{ $team->linkedin_link }}"
                                                                        title="linkedin"><i class="fab fa-linkedin"></i></a>
                                                                </li>

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

       <!--//=========Fun Facts Start=========//-->
       <section class="fun-facts padTB100">
        <div class="special-style-full special-style-full-1 special-area-widthfull special-style-dark">
            <div class="bg-image parallax-style facts-bg"></div>
        </div>
        <div id="fun-factor" class="fun-fact-section dark-theme-fun-fact">
            <div class="container text-center">
                <h3 class="marB80">Check Out Our Awesome Statistics Till Now!</h3>
                <div class="row text-center fact-counter pad-s15">
                    <!--//==Facts Counter Item==//-->
                    <div class="row">
                        @if (isset($counters))
                            @foreach ($counters as $counter)
                                <div class="col-md-3 col-sm-6 col-6 coun" data-aos="zoom-in">
                                    <div class="counter"
                                        style="border: 18px solid {{ $loop->iteration === 1 ? '#319b38' : ($loop->iteration === 2 ? '#32aaee' : ($loop->iteration === 3 ? '#fc6000' : ($loop->iteration === 4 ? '#f45a75' : 'black'))) }};
                                            color: {{ $loop->iteration === 1 ? '#319b38' : ($loop->iteration === 2 ? '#32aaee' : ($loop->iteration === 3 ? '#fc6000' : ($loop->iteration === 4 ? '#f45a75' : 'black'))) }};
                                            background: linear-gradient(to bottom, {{ $loop->iteration === 1 ? '#319b38' : ($loop->iteration === 2 ? '#32aaee' : ($loop->iteration === 3 ? '#fc6000' : ($loop->iteration === 4 ? '#f45a75' : 'black'))) }} 49%, transparent 50%);">
                                        <span class="counter-value">{{ $counter->number }}</span>
                                        <h3>{{ $counter->title }}</h3>

                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>




    </section>

      <!--//=============Gallery area Start============//-->
      <div class="rs-gallery ">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>Gallery<span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
            @if (count($galleries) == 0)
                <div class="intro">
                    <h1 class="text-danger fw-bold">there is no any gallery yet.</h1>
                </div>
            @elseif(count($galleries) > 0)
                <div class="row">
                    @foreach ($galleries as $gallerie)
                        <div class="col-lg-4 col-md-6 padT30">
                            <div class="gallery-item">
                                <img style="object-fit: cover;"
                                    src="{{ asset(env('APP_URL') . 'uploads/gallery/cover/' . $gallerie->cover_image) }}"
                                    alt="{{ $gallerie->title }}" class=" rounded w-100" />
                                <div class="gallery-desc">
                                    <h3><a href="#">{{ $gallerie->title }}</a></h3>

                                    <a class="image-popup"
                                        href="{{ route('gallery.show', ['slug' => $gallerie->slug]) }}"
                                        class="btn btn-primary">View images</a>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- {!! $galleries->links() !!} --}}
            @endif
        </div>
    </div>

    <!--//=======Our Testimonials Start=======//-->
    <section class="testimonial text-center dark-section padT90">
        <!--//======= Section Background parallax =======//-->
        <div class="special-style-full special-style-full-2 special-area-widthfull special-style-dark">
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
                                            <i class="fas fa-quote-left"></i>
                                            {{ $testimonial->description }}
                                            <i class="fas fa-quote-right"></i>
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

      <!--//=========Blogs area Start=========//-->
      <section class="blogs_main ">
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
                                    <div class=" col-lg-4 col-md-6 col-sm-12 padT40" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                        data-aos-duration="1000">
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
                                                    {!! Str::words($blog->description, 15, ' ...') !!}
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

    <section class="faqs padB100">
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
                        @foreach ($faqs as $faq)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{ $loop->iteration }}">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse{{ $loop->iteration }}" aria-expanded="true"
                                            aria-controls="collapse{{ $loop->iteration }}">
                                            {{ $faq->question }}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{ $loop->iteration }}" class="panel-collapse collapse in"
                                    role="tabpanel" aria-labelledby="heading{{ $loop->iteration }}">
                                    <div class="panel-body">
                                        <p>{{ $faq->answer }} </p>
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

    <section id="contacts ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aW50ZXJpb3IlMjBkZXNpZ258ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60"
                        alt="contact image" class="contact-image">
                </div>
                <div class="col-lg-6 home">
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <label for="name">Name</label>
                        <input type="text" id="fname" name="name" placeholder="Your name..">

                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" placeholder="Your Email..">

                        <label for="phone">Phone</label>
                        <input type="text" id="phone" name="phone" placeholder="Your Phone..">

                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Your Subject..">

                        <label for="message">Messafe</label>
                        <textarea id="message" name="message" placeholder="Write something.." rows="4"></textarea>

                        <button type="submit" class="theme-button">SEND  <i class="fas fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.counter-value').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 3500,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        });
    </script>
@endpush

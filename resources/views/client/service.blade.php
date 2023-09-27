@extends('client.layouts.master')
@section('metadata')
    @if (isset($metatag))
        <title>{{ $metatag->title }}</title>
        <meta name="description" content="{{ $metatag->description }}">
        <meta name="keywords" content="{{ $metatag->keywords }}">
        <meta name="trendsetters design studio"
            content="A renowned interior design company, we are passionate about transforming spaces into captivating realms that reflect your unique style and vision.">
        <meta image="{{ env('APP_URL') . '/assets/img/logo.jpeg' }}">
        <link rel="canonical" href="{{ env('APP_URL') . 'service' }}" />
        <link rel="image_src" href="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
        <meta property="og:determiner" content="An" />
        <meta property="og:site_name" content="Trendsetters Design studio" />
        <meta property="og:type" content="Homepage" />
        <meta property="og:url" content="{{ env('APP_URL') . 'service' }}" />
        <meta property="og:title" content="Home page" />
        <meta property="og:image" content="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
        <meta property="og:image:width" content="960" />
        <meta property="og:image:height" content="400" />
        <meta property="og:locale" content="en_GB" />
    @endif
@endsection
@section('content')

    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>Services</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <ul class="breadcrumb">
                            <li>
                                <a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="page_single services services_main services_details ">
        <div class="container">
            <div class="row">
                <!--//==service Section Start==//-->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        @if (isset($services))
                            @foreach ($services as $service)
                                <div class="card-wrapper col-lg-4 col-md-6 col-12 padB60">
                                    <div class="card">
                                        <div class="card-image">
                                            <img src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                                alt="">
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
                        @endif
                    </div>
                </div>
                <!--//==Blog Section End==//-->
            </div>
        </div>
    </section>

@endsection

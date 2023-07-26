@extends('client.layouts.master')
{{-- @push('metaTag')
   <!-- Primary Meta Tags -->
<title>Best Interior Design Company</title>
<meta name="title" content="{{$metatag->title}}">
<meta name="description" content="{{$metatag->description}}">
<meta name="keywords" content="{{$metatag->keywords}}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://metatags.io/">
<meta property="og:title" content="Meta Tags — Preview, Edit and Generate">
<meta property="og:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
<meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://metatags.io/">
<meta property="twitter:title" content="Meta Tags — Preview, Edit and Generate">
<meta property="twitter:description" content="With Meta Tags you can edit and experiment with your content then preview how your webpage will look on Google, Facebook, Twitter and more!">
<meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">
@endpush --}}
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

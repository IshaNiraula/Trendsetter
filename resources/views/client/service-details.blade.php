@extends('client.layouts.master')
@section('content')
    <!--//==Page Header Start==//-->
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>Service detail</h2>
                    <div class="clear"></div>
                    <div class="breadcrumb-box">
                        <h4 style="color: #dadfe4">{{ $service->title }}</h4>
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
    <!--//==Page Header End==//-->
    <div class="course-details-area pt-130">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--//==Thumbnail==//-->
                    <figure class="dark-theme-2">
                        <img src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}" alt="Blog Thumbnail">
                    </figure>
                    <!--//==Service Content==//-->
                    <div class="block-caption padT20">
                        <h3 class="marB10">{{ $service->title }}</h3>
                        <p>
                            {!! $service->description !!}
                        </p>
                    </div>
                </div>
            </div>
            <div class="related-course pt-70">
                <div class="related-title mb-45 mrg-bottom-small">
                    <h3>Related Servcies</h3>
                </div>
                <div class="row padT30">
                    @if (isset($services))
                        @foreach ($services as $service)
                            <div class="single-course col-lg-3 col-md-4 col-sm-6">
                                <div class="course-img">
                                    <a href="{{ route('service.show', ['slug' => $service->slug]) }}"><img
                                            class="animated"
                                            src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                            alt=""></a>
                                </div>
                                <div class="course-content">
                                    <h4><a
                                            href="{{ route('service.show', ['slug' => $service->slug]) }}">{{ $service->title }}</a>
                                    </h4>
                                    <p> {!! Str::words($service->description, 8, ' ...') !!}</p>
                                </div>

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

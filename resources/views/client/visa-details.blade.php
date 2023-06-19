@extends('client.layouts.master')
@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-2 pt-100 pb-95"
            style="background-image:url({{ asset('assets/img/bg/breadcrumb-bg-2.jpg') }});">
            <div class="container">
                <h2>Service</h2>
                <p>{{ $visa->title }}
                </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a> <span><i
                                class="fa fa-angle-double-right"></i>{{ $visa->title }}</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="course-details-area pt-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="course-left-wrap mr-40">
                        <div class="apply-area">
                            <img src="{{ env('APP_URL') . 'uploads/service/' . $visa->filename }}" alt="">
                            <div class="course-apply-btn">
                                <a href="{{route('contact')}}" class="default-btn">APPLY NOW</a>
                            </div>
                        </div>

                        <div class="tab-content jump">
                            <div class="over-view-content pt-2">
                                <h4>Visa DETAILS</h4>
                                <h5>Visa Name : {{ $visa->title }}</h5>
                            </div>
                            <div>
                                {!! $visa->description !!}
                            </div>
                        </div>
                        <div class="related-course pt-70">
                            <div class="related-title mb-45 mrg-bottom-small">
                                <h3>Related Servcies</h3>
                            </div>
                            <div class="related-slider-active">
                                @if (isset($visas))
                                    @foreach ($visas as $visa)
                                        <div class="single-course">
                                            <div class="course-img">
                                                <a href="{{ route('visa.show', ['slug' => $visa->slug]) }}"><img
                                                        class="animated"
                                                        src="{{ env('APP_URL') . 'uploads/service/' . $visa->filename }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="course-content">
                                                <h4><a
                                                        href="{{ route('visa.show', ['slug' => $visa->slug]) }}">{{ $visa->title }}</a>
                                                </h4>
                                                <p> {!! Str::words($visa->description, 10, ' ...') !!}</p>
                                            </div>
                                            <div class="course-position-content">
                                                <div class="course-btn">
                                                    <a class="default-btn"
                                                        href="{{ route('visa.show', ['slug' => $visa->slug]) }}">READ MORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-style sidebar-res-mrg-none">
                        <div class="sidebar-recent-course-wrap mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Servcies</h4>
                            </div>
                            <div class="sidebar-recent-course">
                                @if (isset($visas))
                                    @foreach ($visas as $visa)
                                        <div class="sin-sidebar-recent-course">
                                            <div class="sidebar-recent-course-img">
                                                <a href="{{ route('visa.show', ['slug' => $visa->slug]) }}"><img
                                                        src="{{ env('APP_URL') . 'uploads/service/' . $visa->filename }}"
                                                        alt="{{ $visa->title }}"></a>
                                            </div>
                                            <div class="sidebar-recent-course-content">
                                                <h4><a
                                                        href="{{ route('visa.show', ['slug' => $visa->slug]) }}">{{ $visa->title }}</a>
                                                </h4>
                                                <p class="pt-2 px-3">{{ $visa->created_at->toDateString() }}
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="sidebar-tag-wrap">
                            <div class="sidebar-title mb-40">
                                <h4>Tag</h4>
                            </div>
                            <div class="sidebar-tag">
                                <ul>
                                    <li><a href="#">Nursing</a></li>
                                    <li><a href="#">Information</a></li>
                                    <li><a href="#">Technology</a></li>
                                    <li><a href="#">Cyber Security</a></li>
                                    <li><a href="#">Architecture</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

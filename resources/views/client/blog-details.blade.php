@extends('client.layouts.master')
@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95"
            style="background-image:url({{ asset('assets/img/bg/breadcrumb-bg-5.jpg') }});">
            <div class="container">
                <h2>Blog Details</h2>
                <p>{{ $blog->title }}</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Blog Details</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="event-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="blog-details-wrap mr-40">
                        <div class="blog-details-top">
                            <img src="{{ asset(env('APP_URL') . 'uploads/blog/' . $blog->filename) }}"
                                alt="{{ $blog->title }}">
                            <div class="blog-details-content-wrap">
                                <div class="b-details-meta-wrap">
                                    <div class="b-details-meta">
                                        <ul>
                                            <li><i class="fa fa-calendar-o"></i>{{ $blog->created_at->toDateString() }}</li>
                                            <li><i class="fa fa-user"></i> Admin</li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>{{ $blog->title }}</h3>
                                <div>
                                    {!! $blog->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-style">
                        <div class="sidebar-recent-post mb-35">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Post</h4>
                            </div>
                            <div class="recent-post-wrap">
                                @if (isset($blogs))
                                    @foreach ($blogs as $blog)
                                        <div class="single-recent-post">
                                            <div class="recent-post-img">
                                                <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}"><img
                                                        src="{{ asset(env('APP_URL') . 'uploads/blog/' . $blog->filename) }}"
                                                        alt="{{ $blog->title }}"></a>
                                            </div>
                                            <div class="recent-post-content">
                                                <h5><a href="#">{{ $blog->title }}</a></h5>
                                                <p><span>{{ $blog->created_at->toDateString() }}</span></p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('client.layouts.master')
@section('metadata')
<title>{{ $blog->mtitle }}</title>
<meta name="description" content="{{ $blog->mdescription }}">
<meta name="keywords" content="{{$blog->mkeywords}}">
<meta name="trendsetters design studio" content="A renowned interior design company, we are passionate about transforming spaces into captivating realms that reflect your unique style and vision.">
<meta image="{{ env('APP_URL') . 'uploads/blog/' . $blog->filename }}">
<link rel="canonical" href="{{ env('APP_URL') .'blog' . "/". $blog->slug }}" />
<link rel="image_src" href="{{ env('APP_URL') . 'uploads/blog/' . $blog->filename }}" />
<meta property="og:determiner" content="An" />
<meta property="og:site_name" content="Trendsetters Design studio" />
<meta property="og:type" content="website">
<meta property="og:url" content="{{env('APP_URL')}}" />
<meta property="og:title" content="Home page" />
<meta property="og:image" content="{{ env('APP_URL') . 'uploads/blog/' . $blog->filename }}" />
<meta property="og:image:width" content="960" />
<meta property="og:image:height" content="400" />
<meta property="og:locale" content="en_GB" />
@endsection
@section('content')
<div class="page-header black-overlay">
    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <h2>Blog Details</h2>
                <div class="clear"></div>
                <div class="breadcrumb-box">
                    <h4 style="color: #dadfe4">{{ $blog->title }}</h4>
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
<section class="page_single blogs_main blogs_details ">
    <div class="container">
        <div class="row">
            <!--//==Blog Detail Section Start==//-->			
            <div class="col-md-12 col-sm-12 col-lg-8">
                <div class="row marB20">
                    <div class="col-md-12">
                        <!--//==Thumbnail==//-->
                        <figure class="dark-theme-1">
                            <img src="{{ env('APP_URL') . 'uploads/blog/' . $blog->filename }}" alt="Blog Thumbnail">
                        </figure>
                        <!--//==Blog Content Start==//-->
                        <div class="block-caption padT20">
                            <div class="meta-block">
                                <ul class="inline inline-1">
                                    <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>  {{ $blog->created_at->toFormattedDateString() }}</a></li>
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                </ul>
                            </div>
                            <h1>{{ $blog->title }}</h1>
                            <p> {!! $blog->description !!} </p>
                        </div>
                    </div>
                </div>
              
            </div>
        
            <!--//==Blog Detail Section End==//-->
            <div class="related-course pt-70 col-lg-4">
                <div class="related-title mrg-bottom-small">
                    <h3>Related Blogs</h3>
                </div>
                <div class="padT30 related-wrapper">
                    @if (isset($blogs))
                        @foreach ($blogs as $blog)
                            <div class="single-course">
                                <div class="course-img">
                                    <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}"><img
                                            class="animated"
                                            src="{{ env('APP_URL') . 'uploads/blog/' . $blog->filename }}"
                                            alt=""></a>
                                </div>
                                <div class="course-content">
                                    <h4><a
                                            href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                    </h4>
                                </div>

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
<!--//==Blog Detail Page End==//-->		
@endsection

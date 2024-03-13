@extends('client.layouts.master')
@section('metadata')
    @if (isset($metatag))
        <title>{{ $metatag->title }}</title>
        <meta name="description" content="{{ $metatag->description }}">
        <meta name="keywords" content="{{ $metatag->keywords }}">
        <meta name="trendsetters design studio"
            content="A renowned interior design company, we are passionate about transforming spaces into captivating realms that reflect your unique style and vision.">
        <meta image="{{ env('APP_URL') . '/assets/img/logo.jpeg' }}">
        <link rel="canonical" href="{{ env('APP_URL') . 'blog' }}" />
        <link rel="image_src" href="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
        <meta property="og:determiner" content="An" />
        <meta property="og:site_name" content="Trendsetters Design studio" />
        <meta property="og:type" content="Homepage" />
        <meta property="og:url" content="{{ env('APP_URL') . 'blog' }}" />
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
                        <h2>Blogs</h2>
                        <div class="clear"></div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="{{route('home')}}"><i class="fa fa-home" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="page_single blogs_main blogs_details padT100">
            <div class="container">
                <div class="row">
                    <!--//==Blog Section Start==//-->			
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        @if (count($blogs) == 0)
                        <div class="intro">
                            <h1 class="text-center">There is no any blogs uploaded yet.</h1>
                        </div>
                    @elseif(count($blogs) > 0)
                        <div class="row">
                          
                            @foreach ($blogs as $blog)
                            <div class="col-lg-4 col-md-6 col-sm-12 ">
                                <div class="wa-theme-design-block blog-page">
                                    <!--//==Thumbnail==//-->
                                    <figure class="dark-theme">
                                        <img src="{{ asset(env('APP_URL') . 'uploads/blog/' . $blog->filename) }}" alt="{{ $blog->title }}">
                                        <span class="hover-style"></span>
                                    </figure>
                                    <!--//==Blog Content Start==//-->
                                    <div class="block-caption padT20">
                                        <h4><a href="{{ route('blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h4>
                                        <!--//==Author Detail==//-->
                                        <div class="meta-block">
                                            <ul class="inline">
                                                <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>  {{ $blog->created_at->toFormattedDateString() }}</a></li>
                                                <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> admin</a></li>
                                            </ul>
                                        </div>
                                        <p>{!! Str::words($blog->description, 15 , ' ...') !!}</p>
                                        <a href="{{ route('blog.show', ['slug' => $blog->slug]) }}" class="theme-button marT10">Read more</a>
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

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
                        <h2>Blog</h2>
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
                        <div class="row">
                            @if (isset($blogs))
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

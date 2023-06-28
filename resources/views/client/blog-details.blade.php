@extends('client.layouts.master')
@section('content')
<div class="page-header black-overlay">
    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <h2>Blog detail</h2>
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
<section class="page_single blogs_main blogs_details padTB100">
    <div class="container">
        <div class="row">
            <!--//==Blog Detail Section Start==//-->			
            <div class="col-md-12 col-sm-12  col-xs-12">
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
                            <h4>{{ $blog->title }}</h4>
                            
                            <p> {!! $blog->description !!} </p>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
            <!--//==Blog Detail Section End==//-->
            <div class="related-course pt-70">
                <div class="related-title mrg-bottom-small">
                    <h3>Related Blogs</h3>
                </div>
                <div class="row padT30">
                    @if (isset($blogs))
                        @foreach ($blogs as $blog)
                            <div class="single-course col-lg-3 col-md-4 col-sm-6">
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
                                    <p> {!! Str::words($blog->description, 8, ' ...') !!}</p>
                                </div>

                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
   
    </div>
</section>
<!--//==Blog Detail Page End==//-->		
@endsection

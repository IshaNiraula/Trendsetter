@extends('client.layouts.master')

@section('content')
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>Gallery</h2>
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

    <section class="rs-gallery-4 rs-gallery ">
        <div class="container mb-3">
            <h2>Videos</h2>
            <div class="row">
                <div class="col-lg-3">
                    <video controls>
                        <source src="assets/img/video-1.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>
                </div>
                <div class="col-lg-3">
                    <video controls>
                        <source src="assets/img/video-2.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>
                </div>
                <div class="col-lg-3">
                    <video controls>
                        <source src="assets/img/video-3.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                      </video>
                </div>
            </div>
            <h2>Pictures</h2>
            @if (count($galleries) == 0)
                <div class="intro">
                    <h1 class="text-danger fw-bold">there is no any gallery yet.</h1>
                </div>
            @elseif(count($galleries) > 0)
                <div class="row pb-3">
                    @foreach ($galleries as $gallerie)
                    <div class="col-lg-3 col-md-6 padT30">
                        <div class="gallery-item">
                            <img style="object-fit: cover;"
                                    src="{{ asset(env('APP_URL') . 'uploads/gallery/cover/' . $gallerie->cover_image) }}"
                                    alt="{{ $gallerie->title }}" class=" rounded w-100" />
                            <div class="gallery-desc">
                                <h3><a href="#">{{ $gallerie->title }}</a></h3>
                               
                                <a class="image-popup" href="{{ route('gallery.show', ['slug' => $gallerie->slug]) }}"
                                    class="btn btn-primary">View images</a>
                             
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {!! $galleries->links() !!}
            @endif
        </div>
    </section>

   
@endsection


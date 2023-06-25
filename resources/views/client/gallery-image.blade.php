@extends('client.layouts.master')

@section('content')
<div class="page-header black-overlay">
    <div class="container breadcrumb-section">
        <div class="row pad-s15">
            <div class="col-md-12">
                <h2>Gallery Images</h2>
                <a href="{{route('gallery')}}"> <h3 style="color: #dca44b"> Gallery</h3></a>
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

<section class="container marT30 marB30 gallery">
    <div class="row">
        @foreach ($images as $image)
            <div class="col-sm-6 col-lg-4 mt-2 mb-2 gallery-image">
                <img src="{{ env('APP_URL') . 'uploads/gallery/album/' . $image->filename }}"
                    alt="{{ $image->filename }}" class="hover-shadow cursor" 
                    onclick="openModal();currentSlide({{ $loop->iteration }})">
            </div>
        @endforeach
    </div>
    <div id="myGalleryModal" class="galleryModal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="gallery-content">
            @foreach ($images as $image)
                <div class="mySlides">
                    <img src="{{ env('APP_URL') . 'uploads/gallery/album/' . $image->filename }}"
                        alt="{{ $image->filename }}" class="gallery-img">
                </div>
            @endforeach
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
</section>
@endsection


@push('scripts')
    <script>
        function openModal() {
            document.getElementById("myGalleryModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myGalleryModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    </script>
@endpush
@extends('client.layouts.master')


@section('content')
    <!--//==Page Header Start==//-->
    <div class="page-header black-overlay">
        <div class="container breadcrumb-section">
            <div class="row pad-s15">
                <div class="col-md-12">
                    <h2>About Us</h2>
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
    <!--//==Page Header End==//-->
    <!--//=======About Section Start=======//-->
    <section class="about-section ">
        <div class="container">
            <div class="row">
                <!--//==Section Heading Start==//-->
                <div class="centered-title">
                    <div class="col-md-12">
                        <h2>Who We are <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>
                    </div>
                </div>
                <!--//==Section Heading End==//-->
                <div class="content-container">
                    <!--about Box-->
                    <div class="about-box">
                        <!--about Content-->
                        <div class="about-content">
                            <div class="about">
                                <div class="clearfix">
                                    <!--Image Column-->
                                    @foreach ($abouts as $about)
                                        @if (isset($about))
                                            <div class="column image-column col-md-5 col-sm-12 col-xs-12">
                                                <div class="inner">
                                                    <figure><img
                                                            src="{{ env('APP_URL') . 'uploads/about/' . $about->filename }}"
                                                            alt="{{ $about->title }}" /></figure>
                                                            <div class="img-info">
                                                                <h3>I.d Swikriti Sharma</h3>
                                                                <h4>CEO</h4>
                                                            </div>
                                                </div>
                                            </div>
                                            <!--Content Column-->
                                            <div class="column content-column col-md-7 col-sm-12 col-xs-12">
                                                <div class="inner">
                                                    <span>About The Company</span>
                                                    <h2>{{ $about->title }}</h2>
                                                    <p>{!! $about->description !!}</p>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faqs marB30">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="centered-title">
                        <h2>FREQUENTLY ASKED QUESTIONS. <span class="heading-shapes"><i></i><i></i><i></i></span></h2>
                        <div class="clear"></div>

                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            @foreach($faqs as $faq)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading{{$loop->iteration}}">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                            href="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                          {{$faq->question}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse{{$loop->iteration}}" class="panel-collapse collapse in" role="tabpanel"
                                    aria-labelledby="heading{{$loop->iteration}}">
                                    <div class="panel-body">
                                        <p>{{$faq->answer}} </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                       
                    </div>
                   
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }
    </script>
@endpush

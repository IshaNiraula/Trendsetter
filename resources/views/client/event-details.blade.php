@extends('client.layouts.master')

@section('content')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-3 pt-100 pb-95"
            style="background-image:url({{ asset('assets/img/bg/breadcrumb-bg-5.jpg') }});">
            <div class="container">
                <h2>Event</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .
                </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="{{route('home')}}">Home</a> <span><i class="fa fa-angle-double-right"></i>Event</span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="events-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="events-details-left-content pr-20">
                        <div class="events-image">
                            <img src="{{ env('APP_URL') . 'uploads/event/' . $event->filename }}" alt="{{ $event->title }}" class="w-100">
                        </div>

                        <div class="blog-details-content-wrap">
                            <div class="b-details-meta-wrap">
                                <div class="b-details-meta">
                                    <ul class="event-details-shortTitle">
                                        <li><i class="fa fa-calendar-o"></i>{{ $event->created_at->toDateString() }}</li>
                                        <li><i class="fa fa-user"></i> Admin</li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>

                        <div class="meetings">
                            <h2 class="py-3">{{ $event->title }}</h2>
                            <div>{!! $event->description !!}</div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    
                    <div class="event-sidebar">
                        <h3 class="event-sidebar-header">More Events</h3>
                        @foreach ($events as $event)
                        <div class="event-sidebar-item shadow rounded">
                            <a href="{{route('event.show',['slug'=>$event->slug])}}"><img class="rounded" src="{{ env('APP_URL') . 'uploads/event/' . $event->filename }}" alt="{{$event->title}}"></a>

                           

                            <h4><a href="{{route('event.show',['slug'=>$event->slug])}}">{{$event->title}}</a></h4>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

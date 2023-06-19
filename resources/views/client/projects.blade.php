@extends('client.layouts.master')
@section('metadata')
    @if (isset($metatag))
        <title>{{ $metatag->title }}</title>
        <meta name="description" content="{{ $metatag->description }}">
        <meta name="keywords" content="{{ $metatag->tags }}">
        <meta name="jadanconstruction" content="a construction company">
        <link rel="image_src" href="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
        <meta property="og:image" content="{{ env('APP_URL') . 'uploads/metatag/' . $metatag->image }}" />
    @endif
@endsection
@section('content')
    <div class="container">
        <div class="breadcrumb flat mt-3">
            <a href="/" class="active">Home</a>
            <a href="#">Projects</a>
        </div>
        <section>
            <div class="container">
                <div class="intro">
                    <h1 class="text-gray fw-bold">Our Projects</h1>
                </div>
                @if (count($projects) == 0)
                    <div class="intro">
                        {{-- <h1 class="text-danger fw-bold">No Projects</h1> --}}
                    </div>
                @elseif(count($projects) > 0)
                    <div class="row">
                        @foreach ($projects as $project)
                            <div data-aos="fade-up" class="col-lg-4 mb-4">
                                <div class="rounded shadow">
                                    <img style="object-fit: cover;"
                                        src="{{ env('APP_URL') . 'uploads/project/' . $project->image }}"
                                        alt="{{ $project->name }}" class="card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $project->name }}</h5>
                                        <p class="card-text"> {!! Str::words($project->description, 15, ' ...') !!}</p>
                                        {{-- <a href="{{ route('service.show', ['slug' => $project->slug]) }}"
                                class="btn btn-outline-primary btn-sm">Read More</a> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <center>
                        {!! $projects->links() !!}
                    </center>
                @endif
            </div>
        </section>
    </div>
@endsection

@extends('admin.layouts.master')

@php
    $selectedPage = $metaData->page ?? ''; // Assign the selected page to a variable
@endphp
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <center>
            <h3 class="py-2">Edit </h3>
        </center>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <form method="post" action="{{ route('admin.metatag.update', ['id' => $metaData->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
           
                    <div class="card-body">
                        <div class="form-group">
                            <select name="page" id="" class="form-control">
                                <option value="">Select Page</option>
                                <option value="homePage" {{ $selectedPage === 'homePage' ? 'selected' : '' }}>Home page</option>
                                <option value="aboutPage" {{ $selectedPage === 'aboutPage' ? 'selected' : '' }}>About page</option>
                                <option value="contactPage" {{ $selectedPage === 'contactPage' ? 'selected' : '' }}>Contact page</option>
                                <option value="blogPage" {{ $selectedPage === 'blogPage' ? 'selected' : '' }}>Blog page</option>
                                <option value="servicePage" {{ $selectedPage === 'servicePage' ? 'selected' : '' }}>Service page</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title"
                                name="title" value="{{ $metaData->title }}">
                            <span class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="3" name="description" placeholder="Enter description">{{ $metaData->description }}</textarea>
                            <span class="text-danger">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="metatags">Keywords</label>
                            <input type="text" class="form-control" id="metatags" placeholder="Enter keywords"
                                name="keywords" value="{{ $metaData->keywords }}">
                            <span class="text-danger">
                                @error('metatags')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input name="image" type="file" />
                                </div>
                            </div>
                            <img src="{{ env('APP_URL') . 'uploads/metatag/' . $metaData->image }}"
                                alt="{{ $metaData->title }}" class="w-25 img-responsive" />
                        </div>
                  
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection

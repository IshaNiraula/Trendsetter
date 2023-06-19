@extends('admin.layouts.master')


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
                                <option value="">select page</option>
                                <option value="home_page" {{$metaData->page == 'home_page' && 'checked'}}>Home page</option>
                                <option value="about_page" {{$metaData->page == 'about_page' && 'checked'}}>About page</option>
                                <option value="carrier_page"  {{$metaData->page == 'carrier_page' && 'checked'}}>Carrier page</option>
                                <option value="contact_page"  {{$metaData->page == 'contact_page' && 'checked'}}>Contact page</option>
                                <option value="blog_page"  {{$metaData->page == 'blog_page' && 'checked'}}>Blog page</option>
                                <option value="service_page"  {{$metaData->page == 'service_page' && 'checked'}}>Service page</option>
                                <option value="gallery_page"  {{$metaData->page == 'gallery_page' && 'checked'}}>Gallery page</option>
                                <option value="length_converter_page">length converter page</option>
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
                            <label for="tags">keywords</label>
                            <input type="text" class="form-control" id="tags" placeholder="Enter keywords"
                                name="tags" value="{{ $metaData->tags }}">
                            <span class="text-danger">
                                @error('tags')
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
                                alt="{{ $metaData->title }}" class="w-100 img-responsive" />
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

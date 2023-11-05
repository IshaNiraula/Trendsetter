@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <center>
            <h3 class="py-2">Edit Service</h3>
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
                <form method="post" action="{{ route('admin.service.update', ['id' => $service->id]) }}"
                    enctype="multipart/form-data">
                    @csrf
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" placeholder="Enter title"
                                name="title" value="{{ $service->title }}">
                            <span class="text-danger">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" rows="3" name="description" placeholder="Enter description">{{ $service->description }}</textarea>
                            <span class="text-danger">
                                @error('description')
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
                            <img src="{{ env('APP_URL') . 'uploads/service/' . $service->filename }}"
                                alt="{{ $service->title }}" class="w-100 img-responsive" />
                        </div>

                        <div class="form-group">
                            <label for="position">position</label>
                            <input type="number" class="form-control" id="position" placeholder="Enter position"
                                name="position" value="{{ $service->position }}">
                            <span class="text-danger">
                                @error('position')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mtitle">Meta-Title</label>
                        <input type="text" class="form-control" id="mtitle" placeholder="Enter title"
                            name="mtitle" value="{{ $service->mtitle }}">
                        <span class="text-danger">
                            @error('mtitle')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="mdescription">Meta-Description</label>
                        <textarea class="form-control" rows="3" name="mdescription" placeholder="Enter description">{{ $service->mdescription }}</textarea>
                        <span class="text-danger">
                            @error('mdescription')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="mkeywords">Meta-Keywords</label>
                        <textarea class="form-control" rows="3" name="mkeywords" placeholder="Enter description">{{ $service->mkeywords }}</textarea>
                        <span class="text-danger">
                            @error('mkeywords')
                                {{ $message }}
                            @enderror
                        </span>
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
@push('scripts')
    <script>
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{ 'https://trendsettersdesignstudio.com/upload_service_editor_image', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        })
    </script>
@endpush

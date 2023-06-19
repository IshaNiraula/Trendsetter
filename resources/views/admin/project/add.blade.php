@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <center>
            <h3 class="py-2">Add Project</h3>
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
                <form method="post" action="{{ route('admin.project.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Name of the project</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter project name"
                                name="name" value="{{ old('name') }}">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <select name="cat_id" class="form-control" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($cats as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Enter the Description" name="description">{{ old('description') }}</textarea>
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
                        </div>
                        <div class="form-group">
                            <label for="client_name">Name of the client</label>
                            <input type="text" class="form-control" id="client_name" placeholder="Enter client_name"
                                name="client_name" value="{{ old('client_name') }}">
                            <span class="text-danger">
                                @error('client_name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="location">location</label>
                            <input type="text" class="form-control" id="location" placeholder="Enter location"
                                name="location" value="{{ old('location') }}">
                            <span class="text-danger">
                                @error('location')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="completed_at">completed_at</label>
                            <input type="date" class="form-control" id="completed_at" placeholder="Enter completed_at"
                                name="completed_at" value="{{ old('completed_at') }}">
                            <span class="text-danger">
                                @error('completed_at')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="project_value">project_value</label>
                            <input type="text" class="form-control" id="project_value" placeholder="Enter project_value"
                                name="project_value" value="{{ old('project_value') }}">
                            <span class="text-danger">
                                @error('project_value')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="manager">manager</label>
                            <input type="text" class="form-control" id="manager" placeholder="Enter manager"
                                name="manager" value="{{ old('manager') }}">
                            <span class="text-danger">
                                @error('manager')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="designer">designer</label>
                            <input type="text" class="form-control" id="designer" placeholder="Enter designer"
                                name="designer" value="{{ old('designer') }}">
                            <span class="text-danger">
                                @error('designer')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="brochure_link">brochure_link</label>
                            <input type="text" class="form-control" id="brochure_link" placeholder="Enter brochure_link"
                                name="brochure_link" value="{{ old('brochure_link') }}">
                            <span class="text-danger">
                                @error('brochure_link')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="position">position</label>
                            <input type="number" class="form-control" id="position" placeholder="Enter position"
                                name="position" value="{{ old('position') }}">
                            <span class="text-danger">
                                @error('position')
                                    {{ $message }}
                                @enderror
                            </span>
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
@push('scripts')
    <script>
        CKEDITOR.replace('description', {
            filebrowserUploadUrl: "{{ route('admin.project.editor.upload', ['_token' => csrf_token()]) }}",
            filebrowserUploadMethod: 'form'
        })
    </script>
@endpush

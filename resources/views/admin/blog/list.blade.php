@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Blogs</h3>
                    </div>
                    <div>
                        <button class="btn btn-primary mx-2 mt-2"><a class="text-white"
                                href="{{ route('admin.blog.add') }}">Add Blogs</a></button>
                    </div>
                    <!-- /.card-header -->
                    @if (count($blogs) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is not any blog avaliable yet.
                            </p>
                        </center>
                    @elseif(count($blogs) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>title</th>
                                        <th>meta-title</th>
                                        <th>position</th>
                                        <th>status</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @foreach ($blogs as $blog)
                                    <tbody>
                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->mtitle }}</td>
                                            <td>{{ $blog->position }}</td>
                                            <td>{{ $blog->status }}</td>
                                            <td class="d-flex"><button class="btn btn-primary"><a class="text-white"
                                                        href="{{ route('admin.blog.edit', ['id' => $blog->id]) }}">Edit</a></button>
                                                <form method="post"
                                                    action="{{ route('admin.blog.delete', ['id' => $blog->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                                </form>
                                                <button data-toggle="modal"
                                                    data-target="#exampleModal{{ $loop->iteration }}"
                                                    class="btn btn-warning ml-2"><a class="text-white" href="#">View
                                                        Content</a></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $loop->iteration }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <img src="{{ asset(env('APP_URL') . 'uploads/blog/' . $blog->filename) }}"
                                                        alt="{{ $blog->title }}" class="w-100 img-responsive" />
                                                    <div class="py-3">
                                                        {!! $blog->description !!}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </table>
                        </div>
                    @endif
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection

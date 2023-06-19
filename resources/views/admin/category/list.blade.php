@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <a href="{{route('admin.category.add')}}" class="btn btn-primary m-3">Add Category</a>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">project categories</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($categories) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There are not any categories avaliable yet.
                            </p>
                        </center>
                    @elseif(count($categories) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>title</th>
                                        <th>image</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @foreach ($categories as $category)
                                    <tbody>
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td><img src="{{ env('APP_URL') . 'uploads/project_cat/' . $category->image }}"
                                                    alt="{{ $category->name }}" class="w-25 img-responsive" />
                                            </td>
                                            <td><button class="btn btn-primary d-inline"><a class="text-white"
                                                        href="{{ route('admin.category.edit', ['slug' => $category->slug]) }}">Edit</a></button>
                                                <form class="d-inline" method="post"
                                                    action="{{ route('admin.category.delete', ['id' => $category->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
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

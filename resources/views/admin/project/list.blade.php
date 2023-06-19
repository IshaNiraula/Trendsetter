@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <a href="{{route('admin.project.add')}}" class="btn btn-primary m-3">Add project</a>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">projects</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($projects) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is not any project avaliable yet.
                            </p>
                        </center>
                    @elseif(count($projects) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>project name</th>
                                        <th>category</th>
                                        <th>description</th>
                                        <th>image</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @foreach ($projects as $project)
                                    <tbody>
                                        <tr>
                                            <td>{{ $project->id }}</td>
                                            <td>{{ $project->name }}</td>
                                            <td>{{ $project->projectCat->name }}</td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#desc{{$loop->iteration}}">description</button></td>
                                            <td><img src="{{ env('APP_URL') . 'uploads/project/' . $project->image}}"
                                                    alt="{{ $project->name }}" class="w-25 img-responsive" />
                                            </td>
                                            <td class="d-flex"><button class="btn btn-primary"><a class="text-white"
                                                        href="{{ route('admin.project.edit', ['slug' => $project->slug]) }}">Edit</a></button>
                                                <form method="post"
                                                    action="{{ route('admin.project.delete', ['id' => $project->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <div class="modal fade" id="desc{{$loop->iteration}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="staticBackdropLabel">project description</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                            {!! $project->description !!}
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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

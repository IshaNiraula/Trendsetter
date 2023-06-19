@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Event</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($events) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is not any Event avaliable yet.
                            </p>
                        </center>
                    @elseif(count($events) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>title</th>
                                        <th>position</th>
                                        <th>image</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @foreach ($events as $event)
                                    <tbody>
                                        <tr>
                                            <td>{{ $event->id }}</td>
                                            <td>{{ $event->title }}</td>
                                            <td>{{ $event->position }}</td>
                                            <td><img src="{{ env('APP_URL') . 'uploads/event/' . $event->filename }}"
                                                    alt="{{ $event->title }}" class="w-25 img-responsive" />
                                            </td>
                                            <td class="d-flex"><button class="btn btn-primary"><a class="text-white"
                                                        href="{{ route('admin.event.edit', ['id' => $event->id]) }}">Edit</a></button>
                                                <form method="post"
                                                    action="{{ route('admin.event.delete', ['id' => $event->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                                </form>
                                                <button class="btn btn-warning ml-2"  data-toggle="modal" data-target="#exampleModal"><a class="text-white"
                                                        href="#">View
                                                        Content</a></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Description</h5>
                                            </div>
                                            <div class="modal-body">
                                             {!!$event->description!!}
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

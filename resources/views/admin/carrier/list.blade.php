@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <a href="{{ route('admin.carrier.add') }}" class="btn btn-primary m-3">Add career</a>
        <!-- /.row -->
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">career</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($carriers) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is not any career avaliable yet.
                            </p>
                        </center>
                    @elseif(count($carriers) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Job title</th>
                                        <th>active</th>
                                        <th>description</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @foreach ($carriers as $carrier)
                                    <tbody>
                                        <tr>
                                            <td>{{ $carrier->id }}</td>
                                            <td>{{ $carrier->title }}</td>
                                            <td>{{ $carrier->status }}</td>
                                            <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#desc{{ $loop->iteration }}">description</button></td>
                                            <td class="d-flex"><button class="btn btn-primary"><a class="text-white"
                                                        href="{{ route('admin.carrier.edit', ['id' => $carrier->id]) }}">Edit</a></button>
                                                <form method="post"
                                                    action="{{ route('admin.carrier.delete', ['id' => $carrier->id]) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger ml-2">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <div class="modal fade" id="desc{{ $loop->iteration }}" data-backdrop="static"
                                        data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">career description
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    {!! $carrier->description !!}
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

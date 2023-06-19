@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Partners</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($partners) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There are not any partners avaliable yet.
                            </p>
                        </center>
                    @elseif(count($partners) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>image</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @foreach ($partners as $partner)
                                    <tbody>
                                        <tr>
                                            <td>{{ $partner->id }}</td>
                                            <td><img src="{{ env('APP_URL') . 'uploads/partner/' . $partner->filename }}"
                                                    alt="{{ $partner->title }}" class="w-25 img-responsive" />
                                            </td>
                                            <td class="d-flex gap-2">
                                                <form method="post"
                                                    action="{{ route('admin.partner.delete', ['id' => $partner->id]) }}">
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

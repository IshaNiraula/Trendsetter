@extends('admin.layouts.master')


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <a href="{{route('admin.media.add')}}" class="btn btn-primary m-3">Add media</a>
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">media</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($files) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There are not any media avaliable yet.
                            </p>
                        </center>
                    @elseif(count($files) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>name</th>
                                        <th>view</th>
                                        <th>action</th>
                                    </tr>
                                </thead>
                                @foreach ($files as $file)
                                    <tbody>
                                        <tr>
                                            <td>{{ $file->id }}</td>
                                            <td>{{ $file->name }}</td>
                                            <td><a href="{{env('APP_URL')."uploads/media/". $file->filename}}"><button class="btn btn-primary">view</button></a></td>
                                            <td>
                                                <button class="btn btn-primary" id="clip{{$loop->iteration}}" onclick="copyToClip('{{$file->filename}}')">copy link</button>
                                             
                                                <form class="d-inline" method="post"
                                                    action="{{ route('admin.media.delete', ['id' => $file->id]) }}">
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
@push('scripts')
<script>
   async function  copyToClip(filename) {
  try {
    await navigator.clipboard.writeText('{{env("APP_URL") . "uploads/media/"}}' + filename);
    alert('link copied to clipboard');
    /* Resolved - text copied to clipboard successfully */
  } catch (err) {
    console.error('Failed to copy: ', err);
    /* Rejected - text failed to copy to the clipboard */
  }
}
</script>
@endpush
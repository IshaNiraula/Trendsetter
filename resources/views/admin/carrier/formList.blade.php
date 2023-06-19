@extends('admin.layouts.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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
                        <h3 class="card-title">Form Details</h3>
                    </div>
                    <!-- /.card-header -->
                    @if (count($formsData) === 0)
                        <center>
                            <p class="text-2xl text-red-600 font-bold">
                                There is not any submitted career form avaliable yet.
                            </p>
                        </center>
                    @elseif(count($formsData) >= 1)
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Location</th>
                                        <th>Phone</th>
                                        <th>Position</th>
                                        <th>Salary</th>
                                        <th>Date</th>
                                        <th>Experience</th>
                                        <th>Employee Status</th>
                                        <th>Referer</th>
                                        <th>Referer Name</th>
                                        <th>Referer Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                @foreach ($formsData as $form)
                                    <tbody>
                                        <tr>
                                            <td>{{ $form->id }}</td>
                                            <td>{{ $form->name }}</td>
                                            <td>{{ $form->email }}</td>
                                            <td>{{ $form->location }}</td>
                                            <td>{{ $form->phone }}</td>
                                            <td>{{ $form->position }}</td>
                                            <td>{{ $form->salary }}</td>
                                            <td>{{ $form->date }}</td>
                                            <td>{{ $form->experience }}</td>
                                            <td>{{ $form->e_status }}</td>

                                            <td>{{ $form->r_status }}</td>
                                            <td>{{ $form->referer_name }}</td>
                                            <td>{{ $form->referer_email }}</td>
                                            <td class="d_flex">
                                                <button class="btn btn-primary"><a class="text-white"
                                                        href="{{ asset(env('APP_URL') . 'uploads/resume/' . $form->resume) }}">View
                                                        Pdf</a></button>
                                                <form method="post" action="{{route('admin.carrier.form.delete',['id'=>$form->id])}}">
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

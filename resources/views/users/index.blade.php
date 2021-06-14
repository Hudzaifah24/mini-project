@extends('layout.app')

@section('title', 'Users')

@section('main_title', 'User Page')

@section('content')
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Hoverable rows</h4>
                </div>
                <div class="card-content">
                    <a class="btn btn-primary" href="user/create">Create</a>
                    {{-- <div class="card-body">
                        <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover
                            state on table
                            rows
                            within a
                            <code class="highlighter-rouge">&lt;tbody&gt;</code>.
                        </p>
                    </div> --}}
                    <!-- table hover -->
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">EMAIL</th>
                                    <th scope="col">PASSWORD</th>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($user as $data)
                                <tr>
                                    <th scope="row" class="text-bold-500">{{ $loop->iteration }}</th>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->password }}</td>
                                    <td class="text-bold-500">{{ $data->email }}</td>
                                    <td>
                                        <img style="width: 40px;" src="{{ $data->image }}" alt="">
                                    </td>
                                    <td>
                                        <a class="btn btn-warning" href="user/edit/{{ $data->id }}">Edit</a>
                                        <a class="btn btn-danger" href="user/delete/{{ $data->id }}">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

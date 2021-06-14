@extends('layout.app')

@section('title', 'Categories')

@section('main_title', 'Category Page')

@section('content')
    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Hoverable rows</h4>
                </div>
                <div class="card-content">
                    <a class="btn btn-primary" href="category/create">Create</a>
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
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $data)
                                    <tr>
                                        <td class="text-bold-500">{{ $loop->iteration }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="category/edit/{{ $data->id }}">Edit</a>
                                            <a class="btn btn-danger" href="category/delete/{{ $data->id }}">Delete</a>
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

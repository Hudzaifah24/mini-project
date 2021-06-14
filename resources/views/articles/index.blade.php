@extends('layout.app')

@section('title', 'Articles')

@section('main_title', 'Article Page')

@section('content')

    <div class="row" id="table-hover-row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Hoverable rows</h4>
                </div>
                <div class="card-content">
                    <a class="btn btn-primary" href="/article/create">Create</a>
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
                                    <th>TITLE</th>
                                    <th>CONTENT</th>
                                    <th>IMAGE</th>
                                    <th>USER_ID</th>
                                    <th>CATEGORY_ID</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($article as $data)
                                <tr>
                                    <th scope="row" class="text-bold-500">{{ $loop->iteration }}</th>
                                    <td>{{ $data->title }}</td>
                                    <td>{{ $data->content }}</td>
                                    <td>
                                        <img style="width: 40px;" src="{{ $data->image }}" alt="">
                                    </td>
                                    <td>{{ $data->user_id }}</td>
                                    <td>{{ $data->category_id }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="article/edit/{{ $data->id }}">Edit</a>
                                        <a class="btn btn-danger" href="article/delete/{{ $data->id }}">Delete</a>
                                    </td>
                                    {{-- <td><a href="#"><i
                                        class="badge-circle badge-circle-light-secondary font-medium-1"
                                        data-feather="mail"></i></a></td> --}}
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <td class="text-bold-500">Morgan Vanblum</td>
                                    <td>$13/hr</td>
                                    <td class="text-bold-500">Graphic concepts</td>
                                    <td>Remote</td>
                                    <td>Shangai,China</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Tiffani Blogz</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Ashley Boul</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr>
                                <tr>
                                    <td class="text-bold-500">Mikkey Mice</td>
                                    <td>$15/hr</td>
                                    <td class="text-bold-500">Animation</td>
                                    <td>Remote</td>
                                    <td>Austin,Texas</td>
                                    <td><a href="#"><i
                                                class="badge-circle badge-circle-light-secondary font-medium-1"
                                                data-feather="mail"></i></a></td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

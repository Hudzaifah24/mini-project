<!DOCTYPE html>
<html lang="en">

@extends('layout.header')

<body>

    <div class="col-5 m-auto">
        <div class="card p-4 shadow">
            <form action="{{ route('updateu',$user->id ) }}" method="POST" class="mb-3 row">
                @csrf
                <h1 class="text-center my-3">Edit User</h1>
                <div class="my-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="name" type="text" class="form-control" id="inputPassword" value="{{ $user->name }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" type="email" class="form-control" id="inputPassword" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input name="password" type="text" class="form-control" id="inputPassword" value="{{ $user->password }}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input name="image" type="text" class="form-control" id="inputPassword" value="{{ $user->image }}">
                    </div>
                </div>
                <div class="col-3 m-auto row">
                    <input class="btn btn-warning" type="submit" value="Edit">
                </div>
            </form>
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

@extends('layout.header')

<body>

    <div class="col-5 m-auto">
        <div class="card p-4 shadow">
            <form action="{{ route('update',$category->id ) }}" method="POST" class="mb-3 row">
                @csrf
                <h1 class="text-center my-3">Edit Category</h1>
                <div class="my-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input name="name" type="text" class="form-control" id="inputPassword" value="{{ $category->name }}">
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

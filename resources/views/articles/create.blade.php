<!DOCTYPE html>
<html lang="en">

@extends('layout.header')

<body>

    <div class="col-5 m-auto">
        <div class="card p-4 shadow">
            <form action="store" method="POST" class="mb-3 row">
                @csrf
                <h1 class="text-center my-3">Create Article</h1>
                <div class="my-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input name="title" type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Content</label>
                    <div class="col-sm-10">
                        <input name="content" type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input name="image" type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Category</label>
                    <div class="col-sm-10">
                        <input name="category_id" type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">User</label>
                    <div class="col-sm-10">
                        <input name="user_id" type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="col-3 m-auto row">
                    <input class="btn btn-warning" type="submit" value="Add">
            </form>
        </div>
    </div>

</body>
</html>

@extends('layout')
@section('content')

    <div class="card w-auto" style="width: 40rem;">
        <div class="card-header bg-dark">
            <h2 class="text-center text-light">Create Product</h2>
        </div>
        <div class="card-body">
            <form action="/admin/category" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="title">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="text" class="form-control" placeholder="Enter Image" name="image">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" style="width: auto"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Clear</button>
            </form>
        </div>
    </div>
@endsection
@extends('layout');
@section('content')
    <div class="card w-auto" style="width: 40rem;">
        <div class="card-header bg-dark">
            <h1 class="text-center text-light">Edit Category</h1>
        </div>

        <div class="card-body">
            <form action="/admin/category/{{$obj -> id}}" method="POST">
                @method('PUT')
                {{csrf_field()}}
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" name="title" class="form-control" value="{{$obj -> name}}"
                           placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="description" class="form-control" value="{{$obj -> description}}"
                           placeholder="Enter Description">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <img src="{{$obj -> image}}" style="width: 200px" alt="">
                    <input type="text" name="image" class="form-control" value="{{$obj -> image}}"
                           placeholder="Enter Description">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" name="price" class="form-control" value="{{$obj -> price}}"
                           placeholder="Enter price">
                </div>
                <button type="submit" class="btn btn-outline-primary">Submit</button>
                <button type="reset" class="btn btn-outline-info">Clear</button>
            </form>
        </div>
    </div>
@endsection
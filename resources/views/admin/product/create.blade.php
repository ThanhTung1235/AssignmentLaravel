@extends('layout')
@section('content')

    <div class="card w-auto" style="width: 40rem;">
        <div class="card-header bg-dark">
            <h2 class="text-center text-light">Create Product</h2>
        </div>
        <div class="card-body">
            <form action="/admin/product" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>name</label>
                    <input type="text" class="form-control" placeholder="Enter title" name="name">
                </div>

                <div class="form-group">
                    <label>Image</label>
                    <input type="text" class="form-control" placeholder="Enter Image" name="image">
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="number" class="form-control" placeholder="Enter price" name="price">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="description" style="width: auto"></textarea>
                </div>
                <select name="categoryId" class="form-control w-25">
                    @foreach($category as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Clear</button>
            </form>
        </div>
    </div>
@endsection
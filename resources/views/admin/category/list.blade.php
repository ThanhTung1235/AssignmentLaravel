@extends('layout')
@section('content')

    <div class="row">
        <div class="card-body">
            <h5 class="card-title float-left">List Product</h5>
            <a href="/admin/category/create" class="float-right"><i class="far fa-plus-square"></i> Add new</a>
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($obj as $item)
                <tr>
                    <th scope="row">{{$item ->id}}</th>
                    <td>
                        <div class="card">
                            <div style="background-image: url('{{$item -> image}}');background-size: cover;height: 100px"></div>
                        </div>
                    </td>
                    <td>{{$item -> name}}</td>
                    <td>{{$item ->price}}</td>
                    <td>{{$item ->description}}</td>

                    <td>
                        <a href="/admin/category/{{$item -> id}}/edit " class="btn btn-info">Edit</a>
                        <a href="#/admin/category/{{$item -> id}}" id="{{$item -> id}}"
                           class="btn btn-danger btn-delete">Delete</a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    </div>

    <script>
        $('.btn-delete').click(function () {
            var Id = $(this).attr('id');
            var confirms = confirm('do you want delete item?');
            if (confirms) {
                $.ajax({
                    url: 'http://127.0.0.1:8000/admin/category/' + Id,
                    method: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (response) {
                        alert('Deleted !');
                        window.location.reload();
                    },
                    error: function () {
                        alert('some thing wrong!?');
                    }
                });
            }

        })
    </script>
@endsection





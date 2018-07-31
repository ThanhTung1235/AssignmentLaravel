<!doctype html>
<html lang="en" id="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>
<div class="bg-secondary">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <i class="fab fa-amazon fa-4x text-light mr-5"></i>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="form-inline my-2 my-lg-0 mr-5">
                    <input class="form-control mr-sm-2" type="search" style="width: 60vh" placeholder="Search"
                           aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Category</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<div class="container mt-lg-5">
    <div class="row">
        <div class="col-sm-3">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" href="/admin/product/create" role="tab" aria-controls="v-pills-profile"
                   aria-selected="false">Create</a>
                <a class="nav-link" href="/admin/product" role="tab" aria-controls="v-pills-messages" aria-selected="false">List</a>
                <a class="nav-link" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                   aria-selected="false">Settings</a>
            </div>
        </div>
        <div class="col-sm-9">
            @section('content')
            @show
        </div>
    </div>
</div>
<footer class="page-footer font-small indigo bg-dark mt-lg-5">
    <div class="container text-center text-md-left">
        <div class="row">
            <div class="col-md-4 mx-auto text-light">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-light">Description</h5>
                orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book.
            </div>
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-4 mx-auto">
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4 text-light">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>
            </div>
            <hr class="clearfix w-100 d-md-none">

            <div class="col-md-4 mx-auto">
                <i class="fab fa-amazon fa-10x text-light"></i>
                <h4 class="text-light">Amazon.com</h4>
            </div>
            <hr class="clearfix w-100 d-md-none">

        </div>
    </div>
    <div class="footer-copyright text-center py-3 text-light">© 2018 Copyright

    </div>
</footer>

</body>
</html>
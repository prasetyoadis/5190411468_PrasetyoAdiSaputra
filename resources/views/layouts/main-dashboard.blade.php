<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Anibase</title>
    <!-- Bootstrap v5.2.0 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Google Font Icons CSS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @media (min-width: 992px) {
            #nav-side{
                width: 20%;
            }
        }
        @media (min-width: 1200px) {
            #nav-side{
                width: 15%;
            }
        }
    </style>
</head>
<body>
    <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand d-lg-none" href="/">Anibase</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link d-lg-none" aria-current="page" href="/admin/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-lg-none" href="/admin/post-anime">Post Anime</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-lg-none" href="#">Post Halaman</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown ml-auto">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="/img/akun-icon.png" class="image-fluit rounded-circle" style="max-width: 25px" alt="...">
                                <span>{{ auth()->user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">
                                <span class="fs-6 material-symbols-outlined">settings</span> Setting Akun</a></li>
                                <li><a class="dropdown-item" href="#">
                                <span class="fs-6 material-symbols-outlined">password</span> Ganti Password</a></li>
                                <hr class="m-0">
                                <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <span class="fs-6 material-symbols-outlined">logout</span> Logout</button>
                                </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-lg-3 col-xl-2 m-0 p-0 d-none d-lg-block">
            <nav class="position-fixed bg-dark" id="nav-side" style="height: 100vh; top: 0; left: 0">
                <div class="list-group pt-2">
                    <div class="list-group-item bg-dark text-white text-center mb-3">
                        <h2><a class="text-decoration-none text-white" href="/">Anibase</a></h2>
                    </div>
                    <a href="/admin/dashboard" class="list-group-item list-group-item-action @if($title == "Dashboard") active @endif" aria-current="true">
                        <span class="fs-5 material-symbols-outlined">dashboard</span> Dashboard</a>
                    <a href="/admin/post-anime" class="list-group-item list-group-item-action @if($title == "Post Anime") active @endif">
                        <span class="fs-5 material-symbols-outlined">movie</span> Post Anime</a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <span class="fs-5 material-symbols-outlined">draft</span> Post Halaman</a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9 col-xl-10 m-0 p-0">
            @yield('dash-content')
        </div>
    </div>
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
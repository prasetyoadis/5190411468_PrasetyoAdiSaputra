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
</head>
<body>
    <div class="row m-0 p-0">
        <div class="col-12 m-0 p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <p class="navbar-brand"></p>
                    <div class="d-flex">
                        <div class="me-auto">
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="/img/akun-icon.png" class="image-fluit rounded-circle" style="max-width: 25px" alt="...">
                                        <span>{{ auth()->user()->name }}</span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-2 m-0 p-0">
            <nav class="position-fixed bg-dark" style="width: 15%; height: 100vh; top: 0; left: 0">
                <div class="list-group pt-2">
                    <div class="list-group-item bg-dark text-white text-center mb-3">
                        <h2>Anibase</h2>
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
        <div class="col-10 m-0 p-0">
            @yield('dash-content')
        </div>
    </div>
    <!-- Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
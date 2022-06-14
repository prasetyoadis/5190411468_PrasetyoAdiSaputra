<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | Anibase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        @media (max-width: 768px) {
            #form-login-register{
                width:75%;
            }
        }
        @media (min-width: 768px) {
            #form-login-register{
                width:65%;
            }
        }
        @media (min-width: 992px) {
            #form-login-register{
                width:50%;
            }
        }
        @media (min-width: 1200px) {
            #form-login-register{
                width:40%;
            }
        }
        @media (min-width: 1400px) {
            #form-login-register{
                width:35%;
            }
        }
    </style>
    </head>
<body>
    
        @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>      
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script type="text/javascript" src=" {{ asset('js/app.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body class=" text-white">

    <div class="container d-flex flex-column bg-dark flex-md-row align-items-center pb-3 pt-3  border-bottom mt-3">

        <a href="/" class="d-flex align-items-center text-white text-decoration-none">
            <span class="fs-4">Barcelona</span>
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <a class="me-3 py-2 text-white text-decoration-none" href="/">Главная</a>
            <a class="me-3 py-2 text-white text-decoration-none" href="about">Про клуб</a>
        </nav>
        <a class="btn btn-outline-primary" href="/review">Отзывы</a>
        <a class="btn btn-outline-primary" href="/admin">Администрация</a>
    </div>
    <div class="container main-top p-5" >
            @yield('main_content')
        <div class="container test">
            @include('footer')
        </div>
    </div>

   </body>
</html>

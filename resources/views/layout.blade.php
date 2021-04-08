<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @section('title')Hot News ::@show
    </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
    <header>
        <div class="jumbotron">
            @include('header.siteHeader')
        </div>
    </header>
    <nav>
        @include('nav.siteMenu')
    </nav>
    <hr>
    <div class="container">
        @yield('page_content')
    </div>
    <hr>
    <footer class="footer">
        <div class="container">
            @include('footer')
        </div>
    </footer>
</body>
</html>

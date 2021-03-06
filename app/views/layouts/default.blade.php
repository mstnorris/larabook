<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Larabook</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css"
          media="screen"/>
    <link rel="stylesheet" href="/css/main.css"/>
</head>
<body>

    @include('layouts.partials.nav')

    <div class="container">
        @include('flash::message')
        @yield('content')
    </div>
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>
</html>
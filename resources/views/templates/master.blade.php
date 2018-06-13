<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master Layout</title>

    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Coffe and Keyboard</h1>
            <p class="lead">Need tech news that doesn't suck ?</p>
        </div>
    </div>

    @include('partials.nav')

    @yield('content')

    @include('partials.footer')

    <script src="js/app.js"></script>
</body>

</html>

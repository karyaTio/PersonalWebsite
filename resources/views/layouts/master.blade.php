<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>OPEN TECH</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">


</head>

<body>
    @include('partials.nav')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @yield('content')
            </div>
            <div class="col-md-4">
                @include('partials.widget.archives')
            </div>
        </div>
    </div>
    

    @include('partials.footer')

    <script src="js/app.js"></script>
</body>

</html>

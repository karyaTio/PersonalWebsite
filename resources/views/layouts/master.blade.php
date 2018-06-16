<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>OPEN TECH</title>

    @include('partials.style')
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

    @include('partials.script')
</body>

</html>

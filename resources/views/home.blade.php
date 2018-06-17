<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>WELCOME TO OPEN TECH</title>

    @include('partials.style')
</head>

<body>

    @include('partials.nav')

    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">Welcome to my personal website.</p>
        <hr class="my-4">
        <p>Let's be frind shall we </p>
        <a class="btn btn-primary btn-lg" href="/about-me" role="button">About Me</a>
    </div>


    @include('partials.footer') @include('partials.script')
</body>

</html>

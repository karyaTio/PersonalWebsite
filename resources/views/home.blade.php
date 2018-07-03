<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>WELCOME TO OPEN TECH</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>

<body>

  @include('partials.nav')

  <header>
    <div class="hero">
      <div class="hero-background"></div>
      
      <div class="hero-content">
        <h3>Jangan Biarkan bisnis mu ketinggalan !!!</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </div>
  </header>

    @include('partials.footer')

    <!-- <script src="js/app.js"></script> -->
    <script type="text/javascript">
    function toggleNavbar() {
        var x = document.getElementById("myNavbar");
        if (x.className === "navbar-nav") {
            x.className += " toggleNavbar";
            console.log("Added Classlist");
        } else {
            x.className = "navbar-nav";
            console.log("Remove Classlist");
        }
    }

    </script>
</body>

</html>

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
        <p>All in one solution for your online presence needs</p>
        <a class="btn btn-large" id="go-to-contact">Contact Me</a>
      </div>
    </div>
  </header>

  <main id="main">
    <section id="section-a">
      <div class="content">
        <h3>Solution for all your website needs</h3>
        <div class="wide-card">
          <img src="{{ url('images/website.png')}}" alt="Tio Saputra Web Developer & Web Designer">
          <p>Do you need a website that can improve your bussiness needs ? I can provide it for you</p>
        </div>
      </div>
    </section>

    <section id="section-b">
      <div class="content">
        <h3>Or Perhaps a mobile app ?</h3>
        <div class="">
          <img src="{{ url('images/mobile.png')}}" alt="Tio Saputra Android Application Developer">
          <p>Take your bussiness to the next level by integrating mobile application</p>
        </div>
      </div>
    </section>

    <section id="section-c">
      <h2>Contact Me</h2>
      <hr>
      <form class="form" action="#" method="post">
        <div class="form-group">
          <label for="Contact">Name</label>
          <input type="text" name="name" value="">
        </div>
        <div class="form-group">
          <label for="Contact">Email address</label>
          <input type="email" name="email" value="">
        </div>
        <div class="form-group">
          <label for="deskription">Message</label>
          <textarea name="message" rows="5"></textarea>
        </div>
        <div class="form-group">
          <button class="btn" type="submit" name="button">Send</button>
        </div>
      </form>
    </section>
  </main>

  @include('partials.footer')

  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/apps.js') }}"></script>
</body>

</html>

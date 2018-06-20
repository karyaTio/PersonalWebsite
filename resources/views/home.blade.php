<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>WELCOME TO OPEN TECH</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    <style>
        .home-a {
            background-color: aquamarine;
        }

        .home-b {
            background-color: cadetblue;
        }

        .home-c {
            background-color: beige;
        }

        .home-d {
            background-color: blueviolet;
            color: aliceblue;
        }

        .img-thumb {
            max-height: 150px;
        }

    </style>
</head>

<body>

    @include('partials.nav')

    <section class="home-a p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img class="img-fluid" src="images/tiosaputra.jpeg" alt="Tio Saputra Web Developer Mobile Developer">
                </div>
                <div class="col-md-9 py-4">
                    <h2>Hello my name is Tio Saputra</h2>
                    <p>Welcome to my internet home</p>
                    <p>Free news about programming world, also free tutorial, who does'nt like free stuff right ?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-b p-5">
        <div class="container">
            <h2 class="text-center">Check out my latest article</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top img-thumb" src="photos/1/thumbs/_101886535_rory5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top img-thumb" src="photos/1/thumbs/_101886535_rory5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top img-thumb" src="photos/1/thumbs/_101886535_rory5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top img-thumb" src="photos/1/thumbs/_101886535_rory5.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-c p-5">
        <div class="container-fluid text-center">
            <h2>I can do this for you</h2>
            <div class="row">
                <div class="col-md-6 p-5">
                    <img src="images/web-dev.png" alt="Tio Saputra Web Development">
                    <p>Web Development</p>
                </div>
                <div class="col-md-6 p-5">
                    <img src="images/mobile_dev.png" alt="Tio Saputra Mobile App Development">
                    <p>Mobile Apps Development</p>
                </div>
            </div>
        </div>
    </section>

    <section class="home-d p-5">
        <div class="container text-center">
            <h2>Want to know me more ?</h2>
            <a href="/about-me" class="btn btn-info">Click Here</a>
        </div>
    </section>


    @include('partials.footer')

    <script src="js/app.js"></script>
</body>

</html>

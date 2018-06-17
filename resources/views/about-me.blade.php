<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Tio Saputra</title>

    @include('partials.style')
</head>

<body>

    @include('partials.nav')

    <div class="portfolio-a">
        <div class="container">
            <div class="row">
                <div class="col-md-4 p-5">
                    <img class="img-fluid" src="images/tiosaputra.jpeg" alt="Tio Saputra a programmer">
                </div>
                <div class="col-md-8 pt-5">
                    <h3>Tio Saputra</h3>
                    <p>21 Years Old</p>
                    <p>I am a passionate web and mobile developer, someday i will have my own bussiness, related to tech ofcourse.
                        i also like to make a game if i have free time
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-b">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-3">
                    <h4 class="text-center">What i can do for you ?</h4>
                    <p>Creating a website to your need</p>
                    <p>Creating mobile app </p>
                    <p>Even creating a game if u like</p>
                    <p>Redisign your website </p>
                </div>
                <div class="col-md-6 p-3">
                    <h4 class="text-center">What my skills are </h4>
                    <p>Web development : HTML, CSS, JAVASCRIPT, JQuery, SASS, Laravel, and etc.</p>
                    <p>App development : Android Studio, Java, XML</p>
                    <p>Database knowledge : Mysql(MariaDB), Postgre, Firebase, MongoDB</p>
                    <p>An ability to learn faster, because not every project is similar, and i have no problem to learn by doing,
                        in fact its my favorit learning method</p>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-c">
        <div class="container text-justify">
            <h2>If u feel like to know me more</h2>
            <p><strong> read the bold text for important information only (recommended for most reader because i can't stop typing when i feel like it)</strong></p>
            <ul>
                <li>05-10-1997 : is the date when i born</li>
                <li>
                    20xx to 20xx : is where i school at SMK YADIKA BALAM i take networking there, and on it's second year
                    is the first time i learn to code, my first programming language is fotran, yup i learn fotran, my teacher mr.hassan introduce me to programming, even though he is a design teacher
                    , then i learn vb, c#.from there i falling in love with programming,i am then start to learning otodidak using the internet searching tutorial, learning java and web development.
                </li>
                <li>20xx to 20xx : i go to college at UNIVERSITAS TEKNOKRAT INDONESIA, i am not picky at university,for me i don't really care where i end up
                    all university is the same, its about how u study there, in fact when i go to university, and they teach me about programming i already know all of it. i got a good headstart i supose.
                </li>
                <li>2017 : i creating programs for my senior end project, it's about 5 project at the time.</li>
                <li>xx-xx-xxxx : i am starting to make my precence on the internet, all my project are prototype this far, so it's time to make a project that go production phase that actually have value</li>
            </ul>
        </div>
    </div>

    @include('partials.footer') @include('partials.script')
</body>

</html>

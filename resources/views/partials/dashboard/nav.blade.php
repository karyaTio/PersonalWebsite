@if (Auth::check())
<div class="text-center">
    <h3>{{ Auth::user()->name }}</h3>
    <hr> 
</div>
@endif

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link" href="/posts/manage">All Post</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/posts/create">Create Posts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Portfolio</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Contact Me</a>
    </li>
    <li class="nav-item">
        <a href="/register" class="nav-link">Register</a>
    </li>
    <li class="nav-item">
        <a href="/login" class="nav-link">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
    </li>
</ul>
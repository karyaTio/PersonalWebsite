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

    {{-- IF Auth --}}
    @if (Auth::check())
    <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
    </li>
    @endif
</ul>
